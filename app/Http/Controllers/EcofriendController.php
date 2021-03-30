<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Ecofriends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EcofriendController extends Controller
{
    //
    public function registerView()
    {
        return view('cms.page.register', ['title' => 'UMN ECO 2021 - Join eco Friends']);
    }

    public function register(Request $request)
    {
        //call the Ecofriends model
        $model = new Ecofriends();
        //data to be inserted to the database
        $data['name'] = $request['name'];
        $data['student_id'] = $request['student_id'];
        $data['email'] = $request['email'];
        $data['major'] = $request['major'];
        $data['generation'] = $request['generation'];
        $data['instagram_account'] = $request['instagram_account'];
        $data['line_id'] = $request['line_id'];
        $data['phone_number'] = $request['phone_number'];
        $data['password'] = Hash::make($request['password']);
        $this->sendEmail($data);
        //call register from Ecofriends model
        $model->registerEcoFriend($data);
        //redirect to thanks for the registration
        return redirect()->route('registerView');
    }

    public function sendEmail($data)
    {
        $details = [
            'title' => '[WELCOME TO RED, ECO FRIENDS!]',
            'body' => 'this is the body'
        ];

        Mail::to($data['email'])->send(new RegisterMail($details));
        die;
    }
}
