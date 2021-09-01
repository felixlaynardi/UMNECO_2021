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

    public function insertOrder($user_id, $dine_in, $takeaway_id, $ordered){
        return DB::table('green_order')->insert([
            'user_id' =>  $user_id,
            'dine_in' => $dine_in,
            'takeaway_id' => $takeaway_id,
            'ordered' => $ordered
        ]);
    }
}
