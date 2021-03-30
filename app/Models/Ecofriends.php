<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EcoFriends extends Model
{
    use HasFactory;

    public function getAllEcoFriends()
    {
        return DB::table('eco_friends')->get();
    }

    public function getEcoFriendsByStudentId($id)
    {
        return DB::table('eco_friends')->where('Student_id', $id)->first();
    }

    public function registerEcoFriend($data)
    {
        DB::table('eco_friends')->insert($data);
    }

    public function activateEcoFriends($id)
    {
        DB::table('eco_friends')
            ->where('id', $id)
            ->update(['is_active' => 1, 'email_verified_at' => now()]);
    }
}
