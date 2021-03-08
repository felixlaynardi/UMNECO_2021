<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Oprec;

class OprecController extends Controller
{
    public function index(){
        //return view('cms.page.oprecView', ['title' => 'OPEN RECRUITMENT'], ['items' => $items]);
        return view('cms.page.oprecView', ['title' => 'UMN ECO 2021 - Open Recruitment']);
    }
    public function store(Request $request){
        // dd($request->photo->extension());
        $team = $request->teamname;
        $fullname = $request->fullname;
        $nim = $request->nim;
        $faculty = $request->faculty;
        if($request->faculty == 'comm'){
            $major = $request->majors_comm;
        }else if($request->faculty == 'business'){
            $major = $request->majors_business;
        }else if($request->faculty == 'design'){
            $major = $request->majors_design;
        }else{
            $major = $request->majors_fti;
        }
        $classyear = $request->classyear;
        $pob = $request->place_of_birth;
        $birthdate = $request->birthdate;
        $insta = $request->instagram;
        $line = $request->line;
        $phonenumber = (string)$request->phonenumber;
        $email = $request->email;

        
        $extension = $request->photo->extension();

        $path = public_path('images/oprec/oprecImages');

        // if (!File::exists($path)) {
        //     File::makeDirectory($path, $mode = 0777, true, true);
        // }
        
        $filename = 'foto_' . $request->fullname . '.' . $extension;
        $pathFoto = '/images/oprec/oprecImages/' . $filename;

        $request->photo->move($path, $filename);
        

        $exp = $request->experience;
        $about = $request->about;
        $why = $request->why;
        $division = $request->division;

        if($request->teamname == 'genta' || $request->teamname == 'bacarita' || $request->teamname == 'liku'){
            if($request->radio == 'pr'){
                $q1 = $request->prQ1;
                $q2 = 'none';
                $subtim = $request->radio;
            }else if($request->radio == 'visual'){
                $q1 = $request->visualQ1;
                $q2 = 'none';
                $subtim = $request->radio;
            }else if($request->radio == 'foto'){
                $q1 = $request->bacaritaQ1;
                $q2 = 'none';
                $subtim = $request->radio;
            }else if($request->radio == 'video'){
                $q1 =  $request->bacaritaQ2;
                $q2 = 'none';
                $subtim = $request->radio;
            }else if($request->radio == 'sponsor'){
                $q1 =  $request->likuQ1;
                $q2 = 'none';
                $subtim = $request->radio;
            }else if($request->radio == 'medpar'){
                $q1 =  $request->likuQ2;
                $q2 = 'none';
                $subtim = $request->radio;
            }
        }else{
            $subtim = 'none';
            if($request->teamname == 'anta'){
                $q1 = $request->antaQ1;
                $q2 = $request->antaQ2;
            }else if($request->teamname == 'gantar'){
                $q1 = $request->gantarQ1;
                $q2 = $request->gantarQ2;
            }else if($request->teamname == 'arto'){
                $q1 = $request->artoQ1;
                $q2 = $request->artoQ2;
            }else if($request->teamname == 'lua'){
                $q1 = $request->luaQ1;
                $q2 = $request->luaQ2;
            }else if($request->teamname == 'lawang'){
                $q1 = $request->lawangQ1;
                $q2 = $request->lawangQ2;
            }else if($request->teamname == 'orta'){
                $q1 = $request->ortaQ1;
                $q2 = $request->ortaQ2;
            }
        }
        $data_oprec = Oprec::create([
            'team' => $team,
            'fullname' => $fullname,
            'nim' => $nim,
            'faculty' => $faculty,
            'major' => $major,
            'classyear' => $classyear,
            'place_of_birth' => $pob,
            'birthdate' => $birthdate,
            'instagram' => $insta,
            'line' => $line,
            'phonenumber' => $phonenumber,
            'email' => $email,
            'photo' => $pathFoto,
            'experience' => $exp,
            'about' => $about,
            'why' => $why,
            'division' => $division,
            'subdiv' => $subtim,
            'question1' => $q1,
            'question2' => $q2
        ]);
        if ($data_oprec) {
            session()->flash('status', 'success');
            $is_success = true;
        } else {
            session()->flash('status', 'fail');
        }
        return redirect('open-recruitment');
    }
    public function viewform(Request $request){
        //dd($request);
        $item = $request->tim;
        return view('cms.page.oprec', ['title' => 'UMN ECO 2021 - Open Recruitment'],['item' => $item]);
    }
}
