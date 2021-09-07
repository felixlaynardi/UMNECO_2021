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
        return DB::table('green_eco_friends')->get();
    }

    public function getEcoFriendsByEmail($email)
    {
        return DB::table('green_eco_friends')->where('email', $email)->first();
    }

    public function registerEcoFriend($data)
    {
        DB::table('green_eco_friends')->insert($data);
    }

    public function activateEcoFriends($id)
    {
        DB::table('green_eco_friends')
            ->where('id', $id)
            ->update(['is_active' => 1, 'email_verified_at' => now()]);
    }

    public function changeEFPassword($email, $new_password){
        DB::table('green_eco_friends')
                ->where('email', $email)
                ->update(['password' => $new_password]);
    }
}
