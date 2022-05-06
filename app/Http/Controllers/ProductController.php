<?php

namespace App\Http\Controllers;

use App\Models\CPU;
use App\Models\CpuCooler;
use App\Models\GPU;
use App\Models\Monitor;
use App\Models\Memory;
use App\Models\Motherboard;
use App\Models\OS;
use App\Models\PcCase;
use App\Models\PSU;
use App\Models\Storage;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    function read($product)
    {
        $brandModel = 'App\Models\Brand';

        switch ($product):
            case "cpu-cooler":
                $allCpuCooler = CpuCooler::all();

                return view('products.cpuCooler', [
                    "allCpuCooler" => $allCpuCooler,
                    "brandModel" => $brandModel,
                ]);

            case "cpu":
                $allCpu = CPU::all();

                return view('products.cpu', [
                    "allCpu" => $allCpu,
                    "brandModel" => $brandModel,
                ]);

            case "motherboard":
                $allMotherboard = Motherboard::all();

                return view('products.motherboard', [
                    "allMotherboard" => $allMotherboard,
                    "brandModel" => $brandModel,
                ]);

            case "memory":
                $allMemory = Memory::all();

                return view('products.memory', [
                    "allMemory" => $allMemory,
                    "brandModel" => $brandModel,
                ]);

            case "storage":
                $allStorage = Storage::all();
                return view('products.storage', [
                    "allStorage" => $allStorage,
                    "brandModel" => $brandModel,
                ]);

            case "gpu":
                $allGpu = GPU::all();

                return view('products.gpu', [
                    "allGpu" => $allGpu,
                    "brandModel" => $brandModel,
                ]);

            case "pccase":
                $allPcCase = PcCase::all();

                return view('products.pcCase', [
                    "allPcCase" => $allPcCase,
                    "brandModel" => $brandModel,
                ]);

            case "psu":
                $allPsu = PSU::all();

                return view('products.psu', [
                    "allPsu" => $allPsu,
                    "brandModel" => $brandModel,
                ]);

            case "os":
                $allOs = OS::all();

                return view('products.os', [
                    "allOs" => $allOs,
                    "brandModel" => $brandModel,
                ]);

            case "monitor":
                $allMonitor = Monitor::all();

                return view('products.monitor', [
                    "allMonitor" => $allMonitor,
                    "brandModel" => $brandModel,
                ]);

        endswitch;
    }

    function create($product, $id){
        return view('pcConfigurator.addProduct', [
            "product" => $product,
            "id" => $id
        ]);
    }

    function delete($product){
        return view('pcConfigurator.deleteProduct', [
            "product" => $product,
        ]);
    }
}
