<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ecofriends;
use Illuminate\Support\Facades\Redirect;

class GreenateAdminController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        $model = new Ecofriends;
        
        $data = $model->getAllEcoFriends();
        
        return view('admin.page.greenate_EFL', ['title' => 'Greenate Eco Friends List', 'data' => $data]);
    }

}
