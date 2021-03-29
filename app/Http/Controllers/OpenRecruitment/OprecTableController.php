<?php

namespace App\Http\Controllers\OpenRecruitment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Oprec;

class OprecTableController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        $items = Oprec::all();

        // dd($items);
        return view('admin.page.oprec_table', ['title' => 'UMN ECO 2021 - Table Data Open Recruitment'], compact('items'));
    }
}
