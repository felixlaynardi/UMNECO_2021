<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function LandingPage()
    {
        if (!session()->has('user')) {
            return view('cms.page.login', ['title' => 'UMN ECO 2021 - Login Eco Friends']);
        } else {
            $ecoFriend = new EcofriendController;
            dd($ecoFriend);
            // $userSubmitLinkStatus = getUserStatus()
            return view('cms.page.landing_page', ['title' => 'UMN ECO 2021 - Join Eco Friends']);
            // return redirect()->route('profileView');
        }
    }
    
    public function SubmitLink()
    {
        $model = new LandingPage();
        $data = ["https://www.google.com/", 1];
        $model->insertLinkBlue($data);
        // dd($result);
        return view('cms.page.landing_page', ['title' => 'UMN ECO 2021 - Join Eco Friends']);
    }
    
    //check if logged in user has submit link or not
    public function getUserStatus($id)
    {
        $model = new LandingPage();
        $status = $model->getLinkBlue($id);
        if (!$status) {
            return false;
        }
        // dd($result);
        return true;
    }


}
