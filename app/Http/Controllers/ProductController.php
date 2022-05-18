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
                $allCpu = $this->checkCpuCompability();

                return view('products.cpu', [
                    "allCpu" => $allCpu,
                    "brandModel" => $brandModel,
                ]);

            case "motherboard":
                $allMotherboard = $this->checkMotherboardCompability();

                return view('products.motherboard', [
                    "allMotherboard" => $allMotherboard,
                    "brandModel" => $brandModel,
                ]);

            case "memory":
                //$allMemory = Memory::all();
                $allMemory = $this->checkMemoryCompability();

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
                $allGpu = $this->checkMinimumWattageCompability('App\Models\PSU', "psu", 'App\Models\GPU');

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
                $allPsu = $this->checkMinimumWattageCompability('App\Models\GPU', "gpu", 'App\Models\PSU');

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

    public function checkSocketCompability($ProductModel1, $productName1, $ProductModel2)
    {
        $product = $ProductModel1::find(Session::get($productName1));

        if (Session::get($productName1) != null) {
            return $ProductModel2::Where("socket_id", $product["socket_id"])->get();
        } else {
            return $ProductModel2::all();
        }
    }

    /*    public function checkMinimumWattageCompability($ProductModel1, string $productName1, $ProductModel2)
        {
            $product = $ProductModel1::find(Session::get($productName1));

            if (Session::get($productName1) != null) {

                switch ($productName1):
                    case "gpu":
                        return $ProductModel2::Where("wattage", ">=", $product["minimumWattage"])->get();

                    case "psu":
                        return $ProductModel2::Where("minimumWattage", "<=", $product["wattage"])->get();
                endswitch;
            } else {
                return $ProductModel2::all();
            }
        }*/

    public function checkCpuCompability()
    {
        $memory = Memory::find(Session::get("memory"));
        $motherboard = Motherboard::find(Session::get("motherboard"));

        if (Session::get("memory") != null && Session::get("motherboard") != null) {
            return CPU::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
                ["socket_id", "=", $motherboard["socket_id"]],
            ])->get();
        } elseif (Session::get("memory") != null) {
            return CPU::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("motherboard") != null) {
            return CPU::Where([
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
                ["socket_id", "=", $motherboard["socket_id"]],
            ])->get();
        } else {
            return CPU::all();
        }
    }

    public function checkMotherboardCompability()
    {
        $memory = Memory::find(Session::get("memory"));
        $cpu = CPU::find(Session::get("cpu"));

        if (Session::get("memory") != null && Session::get("cpu") != null) {
            return Motherboard::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["socket_id", "=", $cpu["socket_id"]],
            ])->get();
        } elseif (Session::get("memory") != null) {
            return Motherboard::Where([
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("cpu") != null) {
            return Motherboard::Where([
                ["socket_id", "=", $cpu["socket_id"]],
            ])->get();
        } else {
            return Motherboard::all();
        }
    }

    public function checkMemoryCompability()
    {
        $motherboard = Motherboard::find(Session::get("motherboard"));
        $cpu = CPU::find(Session::get("cpu"));

        if (Session::get("motherboard") != null && Session::get("cpu") != null) {
            return Memory::Where([
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["socket_id", "=", $cpu["socket_id"]],
            ])->get();
        } elseif (Session::get("motherboard") != null) {
            return Memory::Where([
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("cpu") != null) {
            return Memory::Where([
                ["socket_id", "=", $cpu["socket_id"]],
            ])->get();
        } else {
            return Memory::all();
        }
    }

    // TODO: možná sloučit metody?
    // TODO: otestovat metody?
}
