<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Mail\OrderEmail;
use App\Models\Ecofriends;
use App\Models\MissionProgress;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
use Symfony\Component\Console\Input\Input;

/*
    if(session()->has('user')) checks whether the user is logged in or not
    $model = new Ecofriends(); calls the Ecofriends model

*/

class EcofriendController extends Controller
{
    public function registrationView()
    {
        if (!session()->has('user')) {
            $model = new Ecofriends();
            $ecofriends = $model->getAllEcoFriends();
            return view('cms.page.registration-blue', ['title' => 'UMN ECO 2021 - Join Eco Friends', 'ecofriends' => $ecofriends]);
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
            $data->name = Str::limit($data->full_name, 20, '...');

            $eventStatus = FALSE;

            session()->put('userID', $data->id);
            return view(
                'cms.page.profile-greenate',
                [
                    'title' => 'UMN ECO 2021 - Profile',
                    'data' => $data,
                    'eventStatus' => $eventStatus
                ]
            );
        }
    }

    public function login(Request $request)
    {
        $model = new Ecofriends();
        if ($request->input('action') == "registration") {
            return redirect()->route('registrationView');
        } else {
            $data = $request->input();
            if ($data['email'] == null || $data['password'] == null) {
                $error = array(
                    'login' => "Email atau password salah"
                );
                return Redirect::back()->withErrors($error)->withInput($request->input());
            } else {
                $data['email'] = Str::lower($data['email']);
                $check_data = $model->getEcoFriendsByEmail($data['email']);
                if ($check_data != null) {
                    if ($check_data->email == $data['email'] && Hash::check($data['password'], $check_data->password)) {
                        session()->put('user', $data['email']);
                        // session()->put('userID', $check_data->id);
                        return redirect()->route('profileView')->with('status', 'Success');
                    } else {
                        $error = array(
                            'login' => "Email atau password salah"
                        );
                        return Redirect::back()->withErrors($error)->withInput($request->input());
                    }
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
            $request->session()->pull('user');
            $request->session()->pull('status');
            $request->session()->pull('OrderTotal');
            $request->session()->pull('DineIn');
            $request->session()->pull('TakeAway');
            $request->session()->pull('userID');
        }
        return redirect()->route('loginView');
    }

    public function register(Request $request)
    {
        $model = new Ecofriends();
        $data = $request->input();
        //Capitalize first letter of names and lowercases Line_id, IG Account and Email
        $data['Full_name'] = ucwords(Str::lower($data['Full_name']));
        $data['Email'] = Str::lower($data['Email']);
        $data['Instagram_account'] = Str::lower($data['Instagram_account']);
        $data['Line_id'] = Str::lower($data['Line_id']);

        if($data['Major'] == "Informatika" || $data['Major'] == "Teknik Komputer" || $data['Major'] == "Teknik Elektro" || $data['Major'] == "Teknik Fisika" || $data['Major'] == "Sistem Informasi"){
            $data['Faculty'] = "Fakultas Teknik dan Informatika";
        }else if ($data['Major'] == "Akuntansi" || $data['Major'] == "Manajemen"){
            $data['Faculty'] = "Fakultas Bisnis";
        }else if ($data['Major'] == "Komunikasi Strategis" || $data['Major'] == "Jurnalistik"){
            $data['Faculty'] = "Fakultas Ilmu Komunikasi";
        }else if ($data['Major'] == "Desain Komunikasi Visual" || $data['Major'] == "Arsitektur" || $data['Major'] == "Film & Animasi"){
            $data['Faculty'] = "Fakultas Seni & Desain";
        }else{
            $data['Faculty'] = "D3 Perhotelan";
        }

        $rule = array(
            'Full_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'Email' => 'required|email|unique:eco_friends,email|ends_with:@student.umn.ac.id,@umn.ac.id,@lecturer.umn.ac.id',
            'Student_id' => 'required|unique:eco_friends,student_id|not_in:0',
            'Faculty' => 'required',
            'Major' => 'required',
            'Generation' => 'required',
            'Instagram_account' => 'required|unique:eco_friends,instagram_account',
            'Line_id' => 'required|unique:eco_friends,line_id',
            'Phone_number' => 'required|unique:eco_friends,phone_number|digits_between:11,13',
            'Password' => 'required|min:8|max:25|confirmed',
            'Password_confirmation' => 'required|min:8|max:25',
            'Availability' => 'required|in:1'
        );

        $messages = [
            'Full_name.required' => 'Kamu perlu mengisi nama kamu',
            'Full_name.regex' => 'Nama tidak boleh mengandung angka ataupun simbol',

            'Student_id.required' => 'Kamu perlu mengisi NIM kamu',
            'Student_id.unique' => 'NIM kamu sudah terdaftar',
            'Student_id.not_in' => 'Kamu perlu mengisi NIM kamu',

            'Email.required' => 'Kamu perlu mengisi email kamu',
            'Email.email' => 'Email harus menggunakan email student atau email dari UMN',
            'Email.unique' => 'Email kamu sudah terdaftar',
            'Email.ends_with' => 'Email harus menggunakan email student UMN atau email dari UMN',

            'Faculty.required' => 'Kamu perlu mengisi fakultas kamu',

            'Major.required' => 'Kamu perlu mengisi jurusan kamu',

            'Generation.required' => 'Kamu perlu mengisi angkatan kamu',

            'Instagram_account.required' => 'Kamu perlu mengisi nama akun instagram kamu',
            'Instagram_account.unique' => 'Akun instagram kamu sudah terdaftar',

            'Line_id.required' => 'Kamu perlu mengisi id line kamu',
            'Line_id.unique' => 'Akun line kamu sudah terdaftar',

            'Phone_number.required' => 'Kamu perlu mengisi nomor telepon kamu',
            'Phone_number.min' => 'Nomor telepon terlalu pendek',
            'Phone_number.max' => 'Nomor telepon terlalu panjang',
            'Phone_number.unique' => 'Nomor telepon kamu sudah terdaftar',
            'Phone_number.numeric' => 'Nomor telepon harus berupa angka',

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
            unset($data['Password_confirmation'], $data['_token'], $data['Availability'], $data['Email_external']);

            $data['Password'] = Hash::make($request['Password']);
            $data['registration_time'] = Carbon::now('Asia/Jakarta');

            $this->sendEmail($data);

            $model->registerEcoFriend($data);

            session()->put('user', $data['Email']);

            return redirect()->route('profileView')->with('status', 'Success');
        } else {
            return Redirect::back()->withErrors($validator)->withInput($request->input())->with('status', 'Success');;
        }
    }

    public function sendEmail($data)
    {
        $details = [
            'title' => 'WELCOME TO GREENATE, ' . $data['Full_name'],
            'name' => $data['Full_name'],
        ];
        Mail::to($data['Email'])->send(new RegisterMail($details));
    }

    public function submitLink(Request $request){
        $data = $request->input();
        $model = new ShoppingCart();
        $userId = $request->session()->get('userID');

        if($data['link'] == null){
            return redirect()->route('profileView')->with('status', 'Failed');
        }else{
            $model->insertTaskLink($userId, $data['link']);
            return redirect()->route('profileView')->with('status', 'Link Submitted');
        }
    }
}
