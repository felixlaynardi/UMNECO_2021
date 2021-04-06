<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MissionProgress extends Model
{
    use HasFactory;

    public function missionProgress($userid, $missionType, $submittedLink, $mission_X_ID)
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
            DB::table('progress_racounter')->insert([
                'userid' => $userid,
                'mission_racounter_id' => $mission_X_ID,
                'status' => false,
                'link' => $submittedLink,
                'date' => $mytime
            ]);
        }
    }
}
