<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutAdminController extends Controller
{
    public function store(){
        auth()->logout();

        return redirect()->route('loginAdmin');
    }
}
