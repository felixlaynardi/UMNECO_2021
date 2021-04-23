<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Ecofriends;
use App\Models\MissionProgress;
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
            return view('cms.page.registration', ['title' => 'UMN ECO 2021 - Join Eco Friends', 'ecofriends' => $ecofriends]);
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

            //set mission day-N
            //format date (YYYY, M, D)
            Carbon::now()->timezone("Asia/Jakarta");
            $startTime = Carbon::create(2021, 4, 26);

            //currTime only used for debugging
            $currTime = Carbon::create(2021, 5, 8);

            //use $now for real case
            $now = Carbon::create("today");
            $misiKe_N = $now->diffInDays($startTime);
            $misiKe_N++;

            //check link submitted or no in that day
            $progressModel = new MissionProgress();
            $allMissionProgress = $progressModel->getMissionProgress($data->id, $misiKe_N);
            // dd($allMissionProgress);

            //data for display to progress bar
            $percentageAllMission = $progressModel->getProgresBarPercentage($data->id);

            //showing special sweet alert for raconteur and utile for user to choose
            $ChooseSpecialMissionDate = Carbon::create(2021, 4, 29);
            $specialMissionLaunch = $now->diffInDays($ChooseSpecialMissionDate);
            // dd($specialMissionLaunch);

            return view(
                'cms.page.profile',
                [
                    'title' => 'UMN ECO 2021 - Profile',
                    'data' => $data,
                    'misiKe_N' => $misiKe_N,
                    'allMissionProgress' => $allMissionProgress,
                    'percentageAllMission' => $percentageAllMission,
                    'dateForSpecialMission' => $specialMissionLaunch
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
                        return redirect()->route('profileView')->with('status', 'Success');;
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
            $request->session()->pull('user', 'status');
        }
        return redirect()->route('loginView');
    }

    public function register(Request $request)
    {
        $model = new Ecofriends();
        $data = $request->input();
        //Capitalize first letter of names and lowercases Line_id, IG Account and Email
        $data['Firstname'] = ucwords(Str::lower($data['Firstname']));
        $data['Lastname'] = ucwords(Str::lower($data['Lastname']));
        $data['Line_id'] = Str::lower($data['Line_id']);
        $data['Instagram_account'] = Str::lower($data['Instagram_account']);
        $data['Email'] = Str::lower($data['Email']);

        //Cut the front 0 in Student_id (NIM) 
        $data['Student_id'] = (int)$data['Student_id'];

        //Set rules for the form
        $rule = array(
            'Firstname' => 'required|regex:/^[\pL\s\-]+$/u',
            'Lastname' => 'regex:/^[\pL\s\-]+$/u',
            'Student_id' => 'required|unique:eco_friends,student_id|not_in:0',
            'Email' => 'required|email|unique:eco_friends,email|ends_with:@student.umn.ac.id,@umn.ac.id,@lecturer.umn.ac.id',
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
            'Firstname.required' => 'Kamu perlu mengisi nama kamu',
            'Firstname.regex' => 'Nama tidak boleh mengandung angka ataupun simbol',

            'Lastname.regex' => 'Nama tidak boleh mengandung angka ataupun simbol',

            'Student_id.required' => 'Kamu perlu mengisi NIM kamu',
            'Student_id.unique' => 'NIM kamu sudah terdaftar',
            'Student_id.not_in' => 'Kamu perlu mengisi NIM kamu',

            'Email.required' => 'Kamu perlu mengisi email kamu',
            'Email.email' => 'Email harus menggunakan email student atau email dari UMN',
            'Email.unique' => 'Email kamu sudah terdaftar',
            'Email.ends_with' => 'Email harus menggunakan email student UMN atau email dari UMN',

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
            unset($data['Password_confirmation'], $data['_token'], $data['Availability']);
            //Compensation false = Haven't used any compensation
            $data['utopia_compensation'] = false;
            $data['rise_compensation'] = false;
            $data['mystery_quest'] = 0;

            $data['Password'] = Hash::make($request['Password']);

            $this->sendEmail($data);

            $model->registerEcoFriend($data);

            session()->put('user', $data['Email']);

            return redirect()->route('profileView');
        } else {
            return Redirect::back()->withErrors($validator)->withInput($request->input())->with('status', 'Success');;
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

    public function submitLink(Request $request)
    {
        $progressModel = new MissionProgress();
        $model = new Ecofriends();
        $missionType = $request->input("type");
        $submittedLink = $request->input("link");
        $missionUtopiaID = $request->input("misiKe_N");
        $data = $model->getEcoFriendsByEmail($request->session()->get('user'));
        // dd($data);
        $progressModel->insertMissionProgress($data->id, $missionType, $submittedLink, $missionUtopiaID);

        return redirect()->route('profileView')->with('status', 'Submitted');
    }

    public function mysteryQuest(Request $request)
    {
        //1 = Utile
        //2 = Raconteur
        //3 = skip
        $progressMission = new MissionProgress();
        $data = new Ecofriends();
        $data = $data->getEcoFriendsByEmail($request->session()->get('user'));
        $mysteryQuest = $request->mysteryQuest;

        $progressMission->mysteryQuest($data->id, $mysteryQuest);

        return redirect()->route('profileView');
    }
}
