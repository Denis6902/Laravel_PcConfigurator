<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class PcConfiguratorController extends BaseController
{
    function index()
    {
        $cpu = Session::get('cpu');
        $cpuCooler = Session::get('cpucooler');
        $motherboard = Session::get('motherboard');
        $memory = Session::get('memory');
        $storage = Session::get('storage');
        $gpu = Session::get('gpu');
        $pcCase = Session::get('pccase');
        $psu = Session::get('psu');
        $os = Session::get('os');
        $monitor = Session::get('monitor');
        $brandModel = 'App\Models\Brand';

        $count = count(session()->all());
        $isempty = ($count - 4 == 0) || $count == 1;
        $totalPrice = 0;

        if (Session::get('theme') == null) {
            Session::put('theme', 'white');
        }

        return view('pcConfigurator.index', [
            "isEmpty" => $isempty,
            "totalPrice" => $totalPrice,
            "cpu" => $cpu,
            "cpuCooler" => $cpuCooler,
            "motherboard" => $motherboard,
            "memory" => $memory,
            "storage" => $storage,
            "gpu" => $gpu,
            "pcCase" => $pcCase,
            "psu" => $psu,
            "os" => $os,
            "monitor" => $monitor,
            "brandModel" => $brandModel,
        ]);
    }

    function switchTheme()
    {

        if (Session::get('theme') == null) {
            $theme = 'white';
        } elseif (Session::get('theme') == 'dark') {
            $theme = 'white';
        } elseif (Session::get('theme') == 'white') {
            $theme = 'dark';
        }

        return view('pcConfigurator.switchTheme', [
            "theme" => $theme
        ]);
    }
}
