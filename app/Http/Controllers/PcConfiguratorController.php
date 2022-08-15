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
        }

        if ($cpuCooler != null) {
            $thisCpuCooler = \App\Models\CpuCooler::Find($cpuCooler);
        }

        if ($motherboard != null) {
            $thisMotherboard = \App\Models\Motherboard::Find($motherboard);
        }

        if ($memory != null) {
            $thisMemory = \App\Models\Memory::Find($memory);
        }

        if ($storage != null) {
            $thisStorage = \App\Models\Storage::Find($storage);
        }

        if ($gpu != null) {
            $thisGpu = \App\Models\GPU::Find($gpu);
        }

        if ($pcCase != null) {
            $thisPcCase = \App\Models\PcCase::Find($pcCase);
        }

        if ($psu != null) {
            $thisPsu = \App\Models\PSU::Find($psu);
        }

        if ($os != null) {
            $thisOs = \App\Models\OS::Find($os);
        }

        if ($monitor != null) {
            $thisMonitor = \App\Models\Monitor::Find($monitor);
        }


        return view('pcconfigurator.index', [
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
}
