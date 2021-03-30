<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Ecofriends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        $data['password'] = $request['password'];
        $data['confirm_password'] = $request['confirm_password'];
        $data['availability'] = $request['availability'];

        //making sure the student_id(NIM) is 11 digit
        if (strlen($data['student_id']) < 11) {
            for ($i = strlen($data['student_id']); $i <= 11; $i++) {
                $data['student_id'] = '0' . $data['student_id'];
            }
        } else if (strlen($data['student_id']) < 11) {
            $data['student_id'] = substr($data['student_id'], strlen($data['student_id']) - 11);
        }

        //rule for the data
        $rule = array(
            'name' => 'required',
            'student_id' => 'required|unique:eco_friends,student_id|numeric',
            'email' => 'required|email|unique:eco_friends,email|ends_with:@student.umn.ac.id',
            'major' => 'required',
            'generation' => 'required',
            'instagram_account' => 'required|unique:eco_friends:instagram_account',
            'line_id' => 'required|unique:eco_friends:line_id',
            'phone_number' => 'min:11|max:12|unique:eco_friends,phone_number',
            'password' => 'required|min:8|max:25',
            'confirm_password' => 'required|min:8|max:25',
            'availability' => 'required|in:1'
        );

        $validator = Validator::make($data, $rule);
        //validate data
        if (!$validator->fails()) {
            //check the password 
            if ($data['password'] == $request['confirm_password']) {
                //unset unused data
                unset($data['confirm_password']);
                unset($data['availability']);
                //hash the password
                $data['password'] = Hash::make($request['password']);
                //send Email
                $this->sendEmail($data);
                //call register from Ecofriends model
                $model->registerEcoFriend($data);
                //redirect to thanks for the registration
                return redirect()->route('registerView');
            } else {
                echo 'fail password diff';
            }
        } else {
            //set error message that data error
            return Redirect::back()->withErrors($validator);
        }
    }

    public function sendEmail($data)
    {
        //Change email title and add name and other data to be sent to registerMail.blade.php
        $details = [
            'title' => '[WELCOME TO RED, ECO FRIENDS!]',
        ];

        Mail::to($data['email'])->send(new RegisterMail($details));
    }
}
