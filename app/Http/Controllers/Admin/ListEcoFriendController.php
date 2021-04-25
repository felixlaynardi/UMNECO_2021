<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ecofriends;
use App\Models\MissionProgress;
use App\Models\MissionApproval;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ListEcoFriendController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        $dbitems = new Ecofriends;
        $dbMissionProgress = new MissionProgress;
        $dbMissionApproval = new MissionApproval;
        $items = $dbitems->getAllEcoFriends();
        // dd($items->getAllEcoFriends());

        $curr_date = Carbon::now('Asia/Jakarta');
        $start_date = Carbon::create(2021, 4, 15, 0, 0, 0, 'Asia/Jakarta');
        
        if($curr_date->greaterThan($start_date)){
            $different_days = $start_date->diffInDays($curr_date);
        }else{
            $different_days = -1;
        }
        
        $day = $different_days+1;

        $riseMissionByIds = $dbMissionProgress->getRiseMissionProgressByMissionID($day);
        $utopiaMissionByIds = $dbMissionProgress->getUtopiaMissionProgressByMissionID($day);
        $utileMissionByIds = $dbMissionProgress->getUtileMissionProgressByMissionID($day);
        $raconteurMissionByIds = $dbMissionProgress->getRaconteurMissionProgressByMissionID($day);
        $riseMissionAppbyDay = $dbMissionApproval->getRiseMissionApprovalDataByDay($day);
        $utopiaMissionAppbyDay = $dbMissionApproval->getUtopiaMissionApprovalDataByDay($day);
        $utileMissionAppbyDay = $dbMissionApproval->getUtileMissionApprovalDataByDay($day);
        $raconteurMissionAppbyDay = $dbMissionApproval->getRaconteurMissionApprovalDataByDay($day);

        return view('admin.page.list_ecofriends', ['title' => 'UMN ECO 2021 - List Eco Friends', 'day' => $day])
            ->with(compact('items'))
            ->with(compact('riseMissionByIds'))
            ->with(compact('utopiaMissionByIds'))
            ->with(compact('utileMissionByIds'))
            ->with(compact('raconteurMissionByIds'))
            ->with(compact('riseMissionAppbyDay'))
            ->with(compact('utopiaMissionAppbyDay'))
            ->with(compact('utileMissionAppbyDay'))
            ->with(compact('raconteurMissionAppbyDay'));
    }

    public function detail($id){
        // dd($id);
        $dbitems = new Ecofriends;
        $dbMissionProgress = new MissionProgress;
        $dbMissionApproval = new MissionApproval;
        $items = $dbitems->getAllEcoFriends();
        
        
        $curr_date = Carbon::now('Asia/Jakarta');
        $start_date = Carbon::create(2021, 4, 12, 0, 0, 0, 'Asia/Jakarta');
        
        if($curr_date->greaterThan($start_date)){
            $different_days = $start_date->diffInDays($curr_date);
        }else{
            $different_days = -1;
        }

        $day = $different_days+1;

        foreach ($items as $item){
            if($item->id == $id){
                // get mission data by id
                $allRise = $dbMissionProgress->getRiseMissionDatabyId($item->id);
                $allUtile = $dbMissionProgress->getUtileMissionDatabyId($item->id);
                $allUtopia = $dbMissionProgress->getUtopiaMissionDatabyId($item->id);
                $allRaconteur = $dbMissionProgress->getRaconteurMissionDatabyId($item->id);
                $riseMissionApp = $dbMissionApproval->getRiseMissionApprovalDataByDayandUserId($item->id ,$day);
                $utopiaMissionApp = $dbMissionApproval->getUtopiaMissionApprovalDataByDayandUserId($item->id ,$day);
                $utileMissionApp = $dbMissionApproval->getUtileMissionApprovalDataByDayandUserId($item->id ,$day);
                $raconteurMissionApp = $dbMissionApproval->getRaconteurMissionApprovalDataByDayandUserId($item->id ,$day);

                return view('admin.page.detail_ecofriends', ['title' => 'Eco Friend Details', 'day' => $day, 'msg' => ''])
                    ->with(compact('item'))
                    ->with(compact('allRise'))
                    ->with(compact('allUtile'))
                    ->with(compact('allUtopia'))
                    ->with(compact('allRaconteur'))
                    ->with(compact('riseMissionApp'))
                    ->with(compact('utopiaMissionApp'))
                    ->with(compact('utileMissionApp'))
                    ->with(compact('raconteurMissionApp'));
            }
        }
    }

    public function disapproveRise(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->riseMissionDisapproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = $request->notes;
        $data['type'] = "Disapproval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Rise day '. $request->missionid . ' mission disapporved!');
    }
    public function disapproveUtopia(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->utopiaMissionDisapproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = $request->notes;
        $data['type'] = "Disapproval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Utopia day '. $request->missionid . ' mission disapporved!');
    }
    public function disapproveUtile(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->utileMissionDisapproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = $request->notes;
        $data['type'] = "Disapproval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Utile day '. $request->missionid . ' mission disapporved!');
    }
    public function disapproveRaconteur(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->raconteurMissionDisapproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = $request->notes;
        $data['type'] = "Disapproval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Raconteur day '. $request->missionid . ' mission disapporved!');
    }

    public function approveRise(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->riseMissionApproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = "none";
        $data['type'] = "Approval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Rise day '. $request->missionid . ' mission Apporved!');
    }
    public function approveUtopia(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->utopiaMissionApproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = "none";
        $data['type'] = "Approval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Utopia day '. $request->missionid . ' mission Apporved!');
    }
    public function approveUtile(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->utileMissionApproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = "none";
        $data['type'] = "Approval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Utile day '. $request->missionid . ' mission Apporved!');
    }
    public function approveRaconteur(Request $request){
        $dbMissionProgress = new MissionProgress;
        $dbMissionProgress->raconteurMissionApproval($request->userid, $request->missionid);

        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = "none";
        $data['type'] = "Approval";
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Raconteur day '. $request->missionid . ' mission Apporved!');
    }

    public function riseCompensation(Request $request){
        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = $request->notes;
        $data['type'] = "Compensation";

        $dbMissionApproval->compensationForUser($data);
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Rise mission compensation success!');
    }

    public function utopiaCompensation(Request $request){
        $dbMissionApproval = new MissionApproval;
        $data['admin_id'] = $request->adminid;
        $data['userid'] = $request->userid;
        $data['mission_name'] = $request->missionname;
        $data['mission_id'] = $request->missionid;
        $data['notes'] = $request->notes;
        $data['type'] = "Compensation";

        $dbMissionApproval->compensationForUser($data);
        $dbMissionApproval->approvalDataInsert($data);

        return redirect()->back()->with('msg', 'Utopia mission compensation success!');
    }

    public function efChangePassword(Request $request){
        $ecofriends = new Ecofriends();
        $new_password = Hash::make($request->efpassword);

        $ecofriends->changeEcoFriendPasswordFromAdmin($request->userid, $request->usersid, $new_password);

        return redirect()->back()->with('msg', 'User password have been changed successfully!');
    }

    public function approvalList(){
        $ecofriends = new Ecofriends();
        $missionapps = new MissionApproval();
        $teams = new User();

        $allEcoFriends = $ecofriends-> getAllEcoFriends();
        $allMissionApp = $missionapps->getAllApprovals();
        $allTeams = $teams->getAllUsers();

        return view('admin.page.list_of_approval', ['title' => 'UMN ECO 2021 - List of Approval'])
        ->with(compact('allEcoFriends'))
        ->with(compact('allMissionApp'))
        ->with(compact('allTeams'));
    }
}
