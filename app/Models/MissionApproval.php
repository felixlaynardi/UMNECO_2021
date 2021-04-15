<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MissionApproval extends Model
{
    use HasFactory;

    public function getRiseMissionApprovalDataByDayandUserId($userid, $missionid){
        return DB::table('mission_approval')
            ->where('userid', $userid)
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Rise')
            ->get();
    }
    public function getUtopiaMissionApprovalDataByDayandUserId($userid, $missionid){
        return DB::table('mission_approval')
            ->where('userid', $userid)
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Utopia')
            ->get();
    }
    public function getUtileMissionApprovalDataByDayandUserId($userid, $missionid){
        return DB::table('mission_approval')
            ->where('userid', $userid)
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Utile')
            ->get();
    }
    public function getRaconteurMissionApprovalDataByDayandUserId($userid, $missionid){
        return DB::table('mission_approval')
            ->where('userid', $userid)
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Raconteur')
            ->get();
    }

    public function getRiseMissionApprovalDataByDay($missionid){
        return DB::table('mission_approval')
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Rise')
            ->get();
    }
    public function getUtopiaMissionApprovalDataByDay($missionid){
        return DB::table('mission_approval')
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Utopia')
            ->get();
    }
    public function getUtileMissionApprovalDataByDay($missionid){
        return DB::table('mission_approval')
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Utile')
            ->get();
    }
    public function getRaconteurMissionApprovalDataByDay($missionid){
        return DB::table('mission_approval')
            ->where('mission_id', $missionid)
            ->where('mission_name', 'Raconteur')
            ->get();
    }

    public function approvalDataInsert($data)
    {
        DB::table('mission_approval')->insert($data);
    }

    public function compensationForUser($data)
    {
        if($data['mission_name']== "Rise"){
            DB::table('eco_friends')
            ->where('id',$data['userid'])
            ->update(['rise_compensation' => true]);
        }else{
            DB::table('eco_friends')
            ->where('id',$data['userid'])
            ->update(['utopia_compensation' => true]);
        }

        
    }
}
