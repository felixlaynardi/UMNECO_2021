<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mission extends Model
{
    use HasFactory;
    //red
    public function addUtopia($data)
    {
        DB::table('mission_utopia')->insert($data);
    }
    public function addRise($data)
    {
        DB::table('mission_rise')->insert($data);
    }
    public function addUtile($data)
    {
        DB::table('mission_utile')->insert($data);
    }
    public function addRaconteur($data)
    {
        DB::table('mission_raconteur')->insert($data);
    }

    //green
    public function addTakeaway($data)
    {
        DB::table('green_takeaway')->insert($data);
    }
}
