<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
    function read()
    {
        return view('about.index');
    }

    function oldRead(){
        return view('about.old');
    }
}
