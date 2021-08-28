<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class TwibbonController extends Controller
{
    public function exhort(){
        $title = "UMN ECO 2021 - Twibbon";
        $status = 'exhort';

        return view('cms.page.twibbon', compact('title', 'status'));
    }

    public function alter(){
        $title = "UMN ECO 2021 - Twibbon";
        $status = 'alter';

        return view('cms.page.twibbon', compact('title', 'status'));
    }

    public function tidbit(){
        $title = "UMN ECO 2021 - Twibbon";
        $status = 'tidbit';

        return view('cms.page.twibbon', compact('title', 'status'));
    }
}
