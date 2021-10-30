<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LandingPage extends Model
{
    use HasFactory;

    public function insertLinkBlue($data)
    {
        // DB::table('submit_link')->insert($data);
        return DB::insert('insert into submit_link_blue (link, eco_friends_id) values (?, ?)', $data);
    }

    public function getLinkBlue($data)
    {
        // DB::table('submit_link')->insert($data);
        return DB::select('SELECT id FROM `submit_link_blue` WHERE ?', $data);
    }
}
