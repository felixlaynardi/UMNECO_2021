<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Exception;

class MissionProgress extends Model
{
    use HasFactory;

    public function insertMissionProgress($userid, $missionType, $submittedLink, $mission_X_ID)
    {
        $mytime = Carbon::now();
        // dd($mytime->toDateTimeString());
        // 1 = utopia
        // 2 = rise
        // 3 = utile
        // 4 = racounter
        if ($missionType == 1) {
            DB::table('progress_utopia')->insert([
                'userid' => $userid,
                'mission_utopia_id' => $mission_X_ID,
                'status' => false,
                'link' => $submittedLink,
                'date' => $mytime
            ]);
        } else if ($missionType == 2) {
            DB::table('progress_rise')->insert([
                'userid' => $userid,
                'mission_rise_id' => $mission_X_ID,
                'status' => false,
                'link' => $submittedLink,
                'date' => $mytime
            ]);
        } else if ($missionType == 3) {
            DB::table('progress_utile')->insert([
                'userid' => $userid,
                'mission_utile_id' => $mission_X_ID,
                'status' => false,
                'link' => $submittedLink,
                'date' => $mytime
            ]);
        } else {
            DB::table('progress_raconteur')->insert([
                'userid' => $userid,
                'mission_raconteur_id' => $mission_X_ID,
                'status' => false,
                'link' => $submittedLink,
                'date' => $mytime
            ]);
        }
    }

    public function getMissionProgress($userid, $misiKe_N){
    
        $checkUtopiaProgressInTable = DB::table('progress_utopia')
            ->where('userid', '=', $userid)
            ->where('mission_utopia_id', '=', $misiKe_N)
            ->get();

        $checkUtileProgressInTable = DB::table('progress_utile')
            ->where('userid', '=', $userid)
            ->where('mission_utile_id', '=', $misiKe_N)
            ->get();
        // dd($checkUtopiaProgressInTable);

        $checkRiseProgressInTable = DB::table('progress_rise')
        ->where('userid', '=', $userid)
            ->where('mission_rise_id', '=', $misiKe_N)
            ->get();

        $checkRaconteurProgressInTable = DB::table('progress_raconteur')
        ->where('userid', '=', $userid)
            ->where('mission_raconteur_id', '=', $misiKe_N)
            ->get();
        
        // 0 mean there is no record/data in that table
        if($checkUtopiaProgressInTable->isEmpty()){
            $checkUtopiaProgressThatDay = 0;
        }else{
            $checkUtopiaProgressThatDay = 1;   
        }

        if ($checkUtileProgressInTable->isEmpty()) {
            $checkUtileProgressThatDay = 0;
        } else {
            $checkUtileProgressThatDay = 1;
        }

        if ($checkRiseProgressInTable->isEmpty()) {
            $checkRiseProgressThatDay = 0;
        } else {
            $checkRiseProgressThatDay = 1;
        }

        if ($checkRaconteurProgressInTable->isEmpty()) {
            $checkRaconteurProgressThatDay = 0;
        } else {
            $checkRaconteurProgressThatDay = 1;
        }
        $allMissionProgress = [
            "utopia" => $checkUtopiaProgressThatDay, 
            "utile" => $checkUtileProgressThatDay, 
            "rise" => $checkRiseProgressThatDay, 
            "raconteur" => $checkRaconteurProgressThatDay];
        // dd($allMissionProgress);
        return $allMissionProgress;
        
    }

    public function getProgresBarPercentage($userid){

        //count all mission in every mission table
        $totalUtopia = DB::table('mission_utopia')
            ->count();
        $totalUtile = DB::table('mission_utile')
            ->count();
        $totalRise = DB::table('mission_rise')
            ->count();
        $totalRaconteur = DB::table('mission_raconteur')
            ->count();
        // dd($totalUtopia, $totalUtile, $totalRise, $totalRaconteur);

        //find all true(1) progress in progress table
        $progressUtopia = DB::table('progress_utopia')
            ->where('status', true)
            ->where('userid', '=', $userid)
            ->count();

        $progressRise = DB::table('progress_rise')
            ->where('status', true)
            ->where('userid', '=', $userid)
            ->count();

        $progressUtile = DB::table('progress_utile')
            ->where('status', true)
            ->where('userid', '=', $userid)
            ->count();

        $progressRaconteur = DB::table('progress_raconteur')
            ->where('status', true)
            ->where('userid', '=', $userid)
            ->count();
        // dd($progressUtopia, $progressRise, $progressUtile, $progressRaconteur);

        $utopiaPercentage = intval(floor(($progressUtopia / $totalUtopia) *100));
        $risePercentage = intval(floor(($progressRise / $totalRise) *100));
        $utilePercentage = intval(floor(($progressUtile / $totalUtile) *100));
        $raconteurPercentage = intval(floor(($progressRaconteur / $totalRaconteur) *100));

        // dd($utopiaPercentage, $risePercentage, $utilePercentage, $raconteurPercentage);

        $percentageAllMission = [
            "utopiaPercentage" => $utopiaPercentage,
            "risePercentage" => $risePercentage,
            "utilePercentage" => $utilePercentage,
            "raconteurPercentage" => $raconteurPercentage
        ];
        // dd($progressAllMission);


        return $percentageAllMission;

        // dd($progressAllMission);
    }

    public function mysteryQuest($userid, $mysteryQuest){
        $updateMysteryQuest = DB::table('eco_friends')
            ->where('id', $userid)
            ->update(['mystery_quest' => $mysteryQuest]);
    }
        // dd($updateMysteryQuest);
    //get all mission progress data
    public function getRiseMissionProgressByMissionID($id){
        return DB::table('progress_rise')->where('mission_rise_id', $id)->get();
    }
    public function getUtopiaMissionProgressByMissionID($id){
        return DB::table('progress_utopia')->where('mission_utopia_id', $id)->get();
    }
    public function getUtileMissionProgressByMissionID($id){
        return DB::table('progress_utile')->where('mission_utile_id', $id)->get();
    }
    public function getRaconteurMissionProgressByMissionID($id){
        return DB::table('progress_raconteur')->where('mission_raconteur_id', $id)->get();
    }

    //get all mission data by user id
    public function getRiseMissionDatabyId($id){
        return DB::table('progress_rise')->where('userid', $id)->get();
    }
    public function getUtileMissionDatabyId($id){
        return DB::table('progress_utile')->where('userid', $id)->get();
    }
    public function getUtopiaMissionDatabyId($id){
        return DB::table('progress_utopia')->where('userid', $id)->get();
    }
    public function getRaconteurMissionDatabyId($id){
        return DB::table('progress_raconteur')->where('userid', $id)->get();
    }

    //approval for each mission
    public function riseMissionApproval($userId, $missionId){
        DB::table('progress_rise')
            ->where('userid',$userId)
            ->where('mission_rise_id',$missionId)
            ->update(['status' => true]);
    }
    public function utopiaMissionApproval($userId, $missionId){
        DB::table('progress_utopia')
            ->where('userid',$userId)
            ->where('mission_utopia_id',$missionId)
            ->update(['status' => true]);
    }
    public function utileMissionApproval($userId, $missionId){
        DB::table('progress_utile')
            ->where('userid',$userId)
            ->where('mission_utile_id',$missionId)
            ->update(['status' => true]);
    }
    public function raconteurMissionApproval($userId, $missionId){
        DB::table('progress_raconteur')
            ->where('userid',$userId)
            ->where('mission_raconteur_id',$missionId)
            ->update(['status' => true]);
    }

    // disapproval by each mission
    public function riseMissionDisapproval($userId, $missionId){
        DB::table('progress_rise')
            ->where('userid',$userId)
            ->where('mission_rise_id',$missionId)
            ->update(['status' => false]);
    }
    public function utopiaMissionDisapproval($userId, $missionId){
        DB::table('progress_utopia')
            ->where('userid',$userId)
            ->where('mission_utopia_id',$missionId)
            ->update(['status' => false]);
    }
    public function utileMissionDisapproval($userId, $missionId){
        DB::table('progress_utile')
            ->where('userid',$userId)
            ->where('mission_utile_id',$missionId)
            ->update(['status' => false]);
    }
    public function raconteurMissionDisapproval($userId, $missionId){
        DB::table('progress_raconteur')
            ->where('userid',$userId)
            ->where('mission_raconteur_id',$missionId)
            ->update(['status' => false]);
    }
}
