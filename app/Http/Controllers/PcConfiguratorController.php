<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class PcConfiguratorController extends BaseController
{
    function read()
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
        $totalPrice = 0;

        $thisCpu = null;
        $thisCpuCooler = null;
        $thisMotherboard = null;
        $thisMemory = null;
        $thisStorage = null;
        $thisGpu = null;
        $thisPcCase = null;
        $thisPsu = null;
        $thisOs = null;
        $thisMonitor = null;

        if ($cpu != null) {
            $thisCpu = \App\Models\CPU::Find($cpu);
            $totalPrice += $thisCpu["price"];
        }

        if ($cpuCooler != null) {
            $thisCpuCooler = \App\Models\CpuCooler::Find($cpuCooler);
            $totalPrice += $thisCpuCooler["price"];
        }

        if ($motherboard != null) {
            $thisMotherboard = \App\Models\Motherboard::Find($motherboard);
            $totalPrice += $thisMotherboard["price"];
        }

        if ($memory != null) {
            $thisMemory = \App\Models\Memory::Find($memory);
            $totalPrice += $thisMemory["price"];
        }

        if ($storage != null) {
            $thisStorage = \App\Models\Storage::Find($storage);
            $totalPrice += $thisStorage["price"];
        }

        if ($gpu != null) {
            $thisGpu = \App\Models\GPU::Find($gpu);
            $totalPrice += $thisGpu["price"];
        }

        if ($pcCase != null) {
            $thisPcCase = \App\Models\PcCase::Find($pcCase);
            $totalPrice += $thisPcCase["price"];
        }

        if ($psu != null) {
            $thisPsu = \App\Models\PSU::Find($psu);
            $totalPrice += $thisPsu["price"];
        }

        if ($os != null) {
            $thisOs = \App\Models\OS::Find($os);
            $totalPrice += $thisOs["price"];
        }

        if ($monitor != null) {
            $thisMonitor = \App\Models\Monitor::Find($monitor);
            $totalPrice += $thisMonitor["price"];
        }

        $count = count(session()->all());
        $isempty = ($count - 5 == 0) || $count == 1;

        if (Session::get('theme') == null) {
            Session::put('theme', 'white');
        }

        return view('pcconfigurator.index', [
            "isEmpty" => $isempty,
            "totalPrice" => $totalPrice,
            "thisCpu" => $thisCpu,
            "thisCpuCooler" => $thisCpuCooler,
            "thisMotherboard" => $thisMotherboard,
            "thisMemory" => $thisMemory,
            "thisStorage" => $thisStorage,
            "thisGpu" => $thisGpu,
            "thisPcCase" => $thisPcCase,
            "thisPsu" => $thisPsu,
            "thisOs" => $thisOs,
            "thisMonitor" => $thisMonitor,
            "brandModel" => $brandModel,
        ]);
    }

    function updateTheme()
    {
        $currentRoute = Session::get("currentRoute");

        $theme = 'white'; // nastaví téma na white

        // pokud je v Session ulozené téma dark
        if (Session::get('theme') == 'dark') {
            $theme = 'white'; // nastaví téma na white
        } elseif (Session::get('theme') == 'white') { // pokud je v Session ulozené téma white
            $theme = 'dark'; // nastaví téma na dark
        }

        return view('pcConfigurator.switchTheme', [
            "theme" => $theme,
            "currentRoute" => $currentRoute
        ]);
    }
}
