<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ecofriends;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

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
    public function change_pass(Request $request){
        $model = new Ecofriends;

        $email = $request->email;
        $new_password = Hash::make($request->password);

        $model->changeEFPassword($email, $new_password);

        return redirect()->back()->with('msg', 'User password have been changed successfully!');
    }

}
