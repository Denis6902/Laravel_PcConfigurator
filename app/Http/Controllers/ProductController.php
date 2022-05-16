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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class ProductController extends BaseController
{
    function readProducts($product)
    {
        $brandModel = 'App\Models\Brand';

        switch ($product):
            case "cpucooler":
                $allCpuCooler = CpuCooler::all();

                return view('products.cpuCooler', [
                    "allCpuCooler" => $allCpuCooler,
                    "brandModel" => $brandModel,
                ]);

            case "cpu":
                $allCpu = $this->checkCompability('App\Models\Motherboard', "motherboard", 'App\Models\CPU');



                return view('products.cpu', [
                    "allCpu" => $allCpu,
                    "brandModel" => $brandModel,
                ]);

            case "motherboard":
                $allMotherboard = $this->checkCompability('App\Models\CPU', "cpu", 'App\Models\Motherboard');

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

    function readProduct($product, $id)
    {
        $brandModel = 'App\Models\Brand';

        switch ($product):
            case "cpucooler":
                $cpuCooler = CpuCooler::Find($id);

                return view('product.cpuCooler', [
                    "cpuCooler" => $cpuCooler,
                    "brandModel" => $brandModel,
                ]);

            case "cpu":
                $cpu = CPU::Find($id);

                return view('product.cpu', [
                    "cpu" => $cpu,
                    "brandModel" => $brandModel,
                ]);

            case "motherboard":
                $motherboard = Motherboard::Find($id);

                return view('product.motherboard', [
                    "motherboard" => $motherboard,
                    "brandModel" => $brandModel,
                ]);

            case "memory":
                $memory = Memory::Find($id);

                return view('product.memory', [
                    "memory" => $memory,
                    "brandModel" => $brandModel,
                ]);

            case "storage":
                $storage = Storage::Find($id);
                return view('product.storage', [
                    "storage" => $storage,
                    "brandModel" => $brandModel,
                ]);

            case "gpu":
                $gpu = GPU::Find($id);

                return view('product.gpu', [
                    "gpu" => $gpu,
                    "brandModel" => $brandModel,
                ]);

            case "pccase":
                $pcCase = PcCase::Find($id);

                return view('product.pcCase', [
                    "pcCase" => $pcCase,
                    "brandModel" => $brandModel,
                ]);

            case "psu":
                $psu = PSU::Find($id);

                return view('product.psu', [
                    "psu" => $psu,
                    "brandModel" => $brandModel,
                ]);

            case "os":
                $os = OS::Find($id);

                return view('product.os', [
                    "os" => $os,
                    "brandModel" => $brandModel,
                ]);

            case "monitor":
                $monitor = Monitor::Find($id);

                return view('product.monitor', [
                    "monitor" => $monitor,
                    "brandModel" => $brandModel,
                ]);

        endswitch;
    }

    function create($product, $id)
    {
        return view('pcConfigurator.addProduct', [
            "product" => $product,
            "id" => $id
        ]);
    }

    function delete($product)
    {
        return view('pcConfigurator.deleteProduct', [
            "product" => $product,
        ]);
    }

    public function checkCompability($ProductModel1, $productName1, $ProductModel2)
    {
        $product = $ProductModel1::find(Session::get($productName1));

        if (Session::get($productName1) != null) {
            return $ProductModel2::Where("socket_id", $product["socket_id"])->get();
        } else {
            return $ProductModel2::all();
        }
    }
}
