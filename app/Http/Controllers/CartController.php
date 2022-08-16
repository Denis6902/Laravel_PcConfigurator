<?php

namespace App\Http\Controllers;

use App\Models\CPU;
use App\Models\CpuCooler;
use App\Models\GPU;
use App\Models\Memory;
use App\Models\Monitor;
use App\Models\Motherboard;
use App\Models\OS;
use App\Models\PcCase;
use App\Models\PSU;
use App\Models\Storage;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{
    function read()
    {
        $cpuId = Session::get('cpu');
        $cpuCoolerId = Session::get('cpucooler');
        $motherboardId = Session::get('motherboard');
        $memoryId = Session::get('memory');
        $storageId = Session::get('storage');
        $gpuId = Session::get('gpu');
        $pcCaseId = Session::get('pccase');
        $psuId = Session::get('psu');
        $osId = Session::get('os');
        $monitorId = Session::get('monitor');

        $cpu = CPU::Find($cpuId);
        $cpuCooler = CpuCooler::Find($cpuCoolerId);
        $motherboard = Motherboard::Find($motherboardId);
        $memory = Memory::Find($memoryId);
        $storage = Storage::Find($storageId);
        $gpu = GPU::Find($gpuId);
        $pcCase = PcCase::Find($pcCaseId);
        $psu = PSU::Find($psuId);
        $os = OS::Find($osId);
        $monitor = Monitor::Find($monitorId);

        $products = new Collection();
        $products->add($cpu);
        $products->add($cpuCooler);
        $products->add($motherboard);
        $products->add($memory);
        $products->add($storage);
        $products->add($gpu);
        $products->add($pcCase);
        $products->add($psu);
        $products->add($os);
        $products->add($monitor);

        $filtered_products = $products->filter(function ($value, $key) {
            return $value != null;
        });


        return view('pcconfigurator.cart', [
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
            "products" => $filtered_products,
        ]);
    }
}
