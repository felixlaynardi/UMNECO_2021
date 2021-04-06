<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        
        
        // if ($missionType == 2) {
        //     DB::table('progress_rise')->insert([
        //         'userid' => $userid,
        //         'mission_rise_id' => $mission_X_ID,
        //         'status' => false,
        //         'link' => $submittedLink,
        //         'date' => $mytime
        //     ]);
        // }
        
        // if ($missionType == 3) {
        //     DB::table('progress_utile')->insert([
        //         'userid' => $userid,
        //         'mission_utile_id' => $mission_X_ID,
        //         'status' => false,
        //         'link' => $submittedLink,
        //         'date' => $mytime
        //     ]);
        // }
        
        // if{
        //     DB::table('progress_raconteur')->insert([
        //         'userid' => $userid,
        //         'mission_raconteur_id' => $mission_X_ID,
        //         'status' => false,
        //         'link' => $submittedLink,
        //         'date' => $mytime
        //     ]);
        // }
    }
}
