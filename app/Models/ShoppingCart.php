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

    public function insertOrder($user_id, $order_data){
        return DB::table('green_eco_friends')
        ->where('id', $user_id)
        ->update($order_data);
    }

    public function insertTaskLink($user_id, $link){
        return DB::table('green_eco_friends')
        ->where('id', $user_id)
        ->update([
            'task_link' => $link
        ]);
    }
}
