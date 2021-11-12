<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EcoFriends extends Model
{
    use HasFactory;

    public function getAllEcoFriends()
    {
        return DB::table('blue_eco_friends')->get();
    }

    public function getEcoFriendsByEmail($email)
    {
        return DB::table('blue_eco_friends')->where('email', $email)->first();
    }

    public function registerEcoFriend($data)
    {
        DB::table('blue_eco_friends')->insert($data);
    }

    public function activateEcoFriends($id)
    {
        DB::table('blue_eco_friends')
            ->where('id', $id)
            ->update(['is_active' => 1, 'email_verified_at' => now()]);
    }

    public function changeEcoFriendPasswordFromAdmin($userid, $usersid, $password)
    {
        DB::table('blue_eco_friends')
            ->where('id', $userid)
            ->where('student_id', $usersid)
            ->update(['password' => $password]);
    }


    public function changeEFPassword($email, $new_password){
        DB::table('blue_eco_friends')
                ->where('email', $email)
                ->update(['password' => $new_password]);
    }

    //inserting link by updating blue_eco_friends by id
    public function insertLinkBlue($id, $task_link, $submission_time)
    {
        $affected = DB::table('blue_eco_friends')
                    ->where('id', $id)
                    ->update(['task_link' => $task_link, 'submission_time' => $submission_time]);
    }
    
    //get status, for identify if user has submit link or not. this one for show/hide submit button
    public function getSubmitStatus($id)
    {
        return DB::table('blue_eco_friends')
                ->select('id')
                ->where('id', $id)
                ->whereNotNull('task_link')
                ->get();
    }
}
