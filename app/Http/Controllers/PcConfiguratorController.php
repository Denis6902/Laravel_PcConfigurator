<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Nullable;

class PcConfiguratorController extends BaseController
{
    function index()
    {
        $count = count(session()->all()) - 3;
        $isempty = ($count == 0);

        return view('pcconfigurator.index', [
            "isEmpty" => $isempty
        ]);
    }

    function switchTheme(){

        if(\Illuminate\Support\Facades\Session::get('theme') == null){
            $theme = 'dark';
        }
        elseif(\Illuminate\Support\Facades\Session::get('theme') == 'dark'){
            $theme = 'white';
        }
        elseif(\Illuminate\Support\Facades\Session::get('theme') == 'white'){
            $theme = 'dark';
        }

        route('pc-configurator');
        return view('pcconfigurator.switchTheme', [
            "theme" => $theme
        ]);
    }
}
