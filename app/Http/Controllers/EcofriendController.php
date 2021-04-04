<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Ecofriends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;
use Symfony\Component\Console\Input\Input;

/*
    if(session()->has('user')) checks whether the user is logged in or not
    $model = new Ecofriends(); calls the Ecofriends model

*/

class EcofriendController extends Controller
{
    public function registerView()
    {
        if (!session()->has('user')) {
            return view('cms.page.register', ['title' => 'UMN ECO 2021 - Join Eco Friends']);
        } else {
            return redirect()->route('profileView');
        }
    }

    public function loginView()
    {
        if (!session()->has('user')) {
            return view('cms.page.login', ['title' => 'UMN ECO 2021 - Login Eco Friends']);
        } else {
            return redirect()->route('profileView');
        }
    }

    public function profileView(Request $request)
    {
        if (!session()->has('user')) {
            return redirect()->route('loginView');
        } else {
            $model = new Ecofriends();
            //Set Session
            $data = $model->getEcoFriendsByEmail($request->session()->get('user'));
            return view('cms.page.profile', ['title' => 'UMN ECO 2021', 'data' => $data], compact('data'));
        }
    }

    public function login(Request $request)
    {
        $model = new Ecofriends();
        if ($request->input('action') == "register") {
            return redirect()->route('registerView');
        } else {
            $data = $request->input();
            if ($data['email'] == null || $data['password'] == null) {
                $error = array(
                    'login' => "Email atau password salah"
                );
                return Redirect::back()->withErrors($error)->withInput($request->input());
            } else {
                $check_data = $model->getEcoFriendsByEmail($data['email']);
                if ($check_data->email == $data['email'] && Hash::check($data['password'], $check_data->password)) {
                    session()->put('user', $data['email']);
                    session()->put('status', 'Success');
                    return redirect()->route('profileView');
                } else {
                    $error = array(
                        'login' => "Email atau password salah"
                    );
                    return Redirect::back()->withErrors($error)->withInput($request->input());
                }
            }
        }
    }



    public function logout(Request $request)
    {
        if (session()->has('user')) {
            $request->session()->pull('user', 'status');
        }
        return redirect()->route('loginView');
    }

    public function register(Request $request)
    {
        $model = new Ecofriends();
        $data = $request->input();

        $data['Student_id'] = (int)$data['Student_id'];


        $rule = array(
            'Firstname' => 'required',
            'Student_id' => 'required|unique:eco_friends,student_id|not_in:0',
            'Email' => 'required|email|unique:eco_friends,email|ends_with:@student.umn.ac.id',
            'Major' => 'required',
            'Generation' => 'required',
            'Instagram_account' => 'required|unique:eco_friends,instagram_account',
            'Line_id' => 'required|unique:eco_friends,line_id',
            'Phone_number' => 'min:11|max:12|unique:eco_friends,phone_number',
            'Password' => 'required|min:8|max:25|confirmed',
            'Password_confirmation' => 'required|min:8|max:25',
            'Availability' => 'required|in:1'
        );


        $messages = [
            'Firstname.required' => 'Kamu perlu mengisi nama kamu',

            'Student_id.required' => 'Kamu perlu mengisi NIM kamu',
            'Student_id.unique' => 'NIM kamu sudah terdaftar',
            'Student_id.not_in' => 'Kamu perlu mengisi NIM kamu',

            'Email.required' => 'Kamu perlu mengisi email kamu',
            'Email.email' => 'Email harus menggunakan email student',
            'Email.unique' => 'Email kamu sudah terdaftar',
            'Email.ends_with' => 'Email harus menggunakan email student',

            'Major.required' => 'Kamu perlu mengisi jurusan kamu',

            'Generation.required' => 'Kamu perlu mengisi angkatan kamu',

            'Instagram_account.required' => 'Kamu perlu mengisi nama akun instagram kamu',
            'Instagram_account.unique' => 'Instagram kamu sudah terdaftar',

            'Line_id.required' => 'Kamu perlu mengisi id line kamu',
            'Line_id.unique' => 'Line kamu sudah terdaftar',

            'Phone_number.required' => 'Kamu perlu mengisi nomor telepon kamu',
            'Phone_number.min' => 'Nomor telepon terlalu pendek',
            'Phone_number.max' => 'Nomor telepon terlalu panjang',
            'Phone_number.unique' => 'Nomor telepon kamu sudah terdaftar',

            'Password.required' => 'Kamu perlu mengisi password kamu',
            'Password.min' => 'Password minimal terdiri dari 8 karakter',
            'Password.max' => 'Password maximal terdiri dari 25 karakter',
            'Password.confirmed' => 'Password tidak sama',

            'Password_confirmation.required' => 'Kamu perlu mengisi password kamu',
            'Password_confirmation.min' => 'Password minimal terdiri dari 8 karakter',
            'Password_confirmation.max' => 'Password maximal terdiri dari 25 karakter',

            'Availability.required' => 'Kamu perlu menyetujui ketentuan yang berlaku'
        ];

        $validator = Validator::make($data, $rule, $messages);

        if (!$validator->fails()) {
            unset($data['Password_confirmation'], $data['_token'], $data['Availability']);

            $data['Password'] = Hash::make($request['Password']);

            $this->sendEmail($data);

            $model->registerEcoFriend($data);

            return redirect()->route('registerView');
        } else {
            return Redirect::back()->withErrors($validator)->withInput($request->input());
        }
    }

    public function sendEmail($data)
    {
        $details = [
            'title' => '[WELCOME TO RED, ' . $data['Firstname'] . ' ' . $data['Lastname'] . ']',
            'name' => $data['Firstname'],
        ];
        Mail::to($data['Email'])->send(new RegisterMail($details));
    }
}
