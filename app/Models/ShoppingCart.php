<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Model
{
    use HasFactory;

    public function getAllTakeaways()
    {
        return DB::table('green_takeaway')->get();
    }
    
    public function getTakeaway($id = null)
    {
        return DB::table('green_takeaway')
        ->where('id', '=', $id)
        ->get();
    }

    public function insertOrder($user_id, $dine_in, $takeaway_id){
        return DB::table('green_eco_friends')
        ->where('id', $user_id)
        ->update([
            'dine_in' => $dine_in,
            'takeaway_id' => $takeaway_id,
            'ordered' => TRUE
        ]);;
    }
}
