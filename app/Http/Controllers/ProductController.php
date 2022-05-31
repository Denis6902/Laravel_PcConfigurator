<?php

namespace App\Http\Controllers;

use App\Models\CPU;
use App\Models\CpuCooler;
use App\Models\GPU;
use App\Models\IllustrationImage;
use App\Models\Memory;
use App\Models\Monitor;
use App\Models\Motherboard;
use App\Models\OS;
use App\Models\PcCase;
use App\Models\PSU;
use App\Models\Socket;
use App\Models\Storage;
use App\Models\SupportedRamType;
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
                $illustrationImage = IllustrationImage::find($cpuCooler->illustration_image_id);

                return view('product.cpuCooler', [
                    "cpuCooler" => $cpuCooler,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

            case "cpu":
                $cpu = CPU::Find($id);
                $illustrationImage = IllustrationImage::find($cpu->illustration_image_id);
                $socket = Socket::find($cpu->socket_id);
                $supportedRamType = SupportedRamType::find($cpu->supported_ram_type_id);

                return view('product.cpu', [
                    "cpu" => $cpu,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                    "socket" => $socket,
                    "supportedRamType" => $supportedRamType,
                ]);

            case "motherboard":
                $motherboard = Motherboard::Find($id);
                $illustrationImage = IllustrationImage::find($motherboard->illustration_image_id);
                $socket = Socket::find($motherboard->socket_id);
                $supportedRamType = SupportedRamType::find($motherboard->supported_ram_type_id);

                return view('product.motherboard', [
                    "motherboard" => $motherboard,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                    "socket" => $socket,
                    "supportedRamType" => $supportedRamType,
                ]);

            case "memory":
                $memory = Memory::Find($id);
                $illustrationImage = IllustrationImage::find($memory->illustration_image_id);
                $supportedRamType = SupportedRamType::find($memory->supported_ram_type_id);

                return view('product.memory', [
                    "memory" => $memory,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                    "supportedRamType" => $supportedRamType,
                ]);

            case "storage":
                $storage = Storage::Find($id);
                $illustrationImage = IllustrationImage::find($storage->illustration_image_id);

                return view('product.storage', [
                    "storage" => $storage,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

            case "gpu":
                $gpu = GPU::Find($id);
                $illustrationImage = IllustrationImage::find($gpu->illustration_image_id);

                return view('product.gpu', [
                    "gpu" => $gpu,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

            case "pccase":
                $pcCase = PcCase::Find($id);
                $illustrationImage = IllustrationImage::find($pcCase->illustration_image_id);

                return view('product.pcCase', [
                    "pcCase" => $pcCase,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

            case "psu":
                $psu = PSU::Find($id);
                $illustrationImage = IllustrationImage::find($psu->illustration_image_id);

                return view('product.psu', [
                    "psu" => $psu,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

            case "os":
                $os = OS::Find($id);
                $illustrationImage = IllustrationImage::find($os->illustration_image_id);

                return view('product.os', [
                    "os" => $os,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

            case "monitor":
                $monitor = Monitor::Find($id);
                $illustrationImage = IllustrationImage::find($monitor->illustration_image_id);

                return view('product.monitor', [
                    "monitor" => $monitor,
                    "brandModel" => $brandModel,
                    "illustrationImage" => $illustrationImage,
                ]);

        endswitch;
    }

    function create($product, $id)
    {
        $brandModel = 'App\Models\Brand';

        return view('pcConfigurator.addProduct', [
            "id" => $id,
            "product" => $product,
            "brandModel" => $brandModel
        ]);
    }

    function delete($product)
    {
        return view('pcConfigurator.deleteProduct', [
            "product" => $product,
        ]);
    }


    public function checkMinimumWattageCompability($ProductModel1, string $productName1, $ProductModel2)
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
    }

    public function checkCpuCompability()
    {
        $memory = Memory::find(Session::get("memory"));
        $motherboard = Motherboard::find(Session::get("motherboard"));

        if (Session::get("memory") != null && Session::get("motherboard") != null) { // jestli je již vybraná základní deska i paměť
            //, vratí CPU se správným socketem a podporou správného typu paměti
            return CPU::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
                ["socket_id", "=", $motherboard["socket_id"]],
            ])->get();
        } elseif (Session::get("memory") != null) { // jestli je již vybraná paměť, vratí CPU se správným typem paměti
            return CPU::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("motherboard") != null) { // jestli je již vybraná základní deska
            //, vratí CPU se správným socketem a podporou správného typu paměti
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

        if (Session::get("memory") != null && Session::get("cpu") != null) { // jestli je již vybraná paměť i CPU
            //, vratí základní desky se správným socketem a podporou správného typu paměti
            return Motherboard::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["socket_id", "=", $cpu["socket_id"]],
            ])->get();
        } elseif (Session::get("memory") != null) { // jestli je již vybraná paměť
            //, vratí základní desky se správnou podporou typu paměti
            return Motherboard::Where([
                ["supported_ram_type_id", "=", $memory["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("cpu") != null) { // jestli je již vybrané CPU
            //, vratí základní desky se správným socketem a podporou správného typu paměti
            return Motherboard::Where([
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
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
        $os = OS::find(Session::get("os"));

        if (Session::get("motherboard") != null && Session::get("cpu") != null && Session::get("os") != null) { // jestli je již vybraná základní deska i CPU i OS
            //, vratí paměťi se správnou kapacitou a podporou správného typu paměti
            return Memory::Where([
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["capacity", "<=", $os["maximumMemory"]],
            ])->get();
        } elseif (Session::get("motherboard") != null && Session::get("os") != null) {  // jestli je již vybraná základní deska i OS
            //, vratí paměťi se správnou kapacitou a podporou správného typu paměti
            return Memory::Where([
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
                ["capacity", "<=", $os["maximumMemory"]],
            ])->get();
        } elseif (Session::get("motherboard") != null) { // jestli je již vybraná základní deska
            //, vratí paměťi s podporou správného typu paměti
            return Memory::Where([
                ["supported_ram_type_id", "=", $motherboard["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("cpu") != null && Session::get("os") != null) { // jestli je již vybrané CPU a OS
            //, vratí paměťi s podporou správného typu paměti a se správnou kapacitou
            return Memory::Where([
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
                ["capacity", "<=", $os["maximumMemory"]],
            ])->get();
        } elseif (Session::get("cpu") != null) { // jestli je již vybrané CPU
            //, vratí paměťi s podporou správného typu paměti
            return Memory::Where([
                ["supported_ram_type_id", "=", $cpu["supported_ram_type_id"]],
            ])->get();
        } elseif (Session::get("os") != null) { // jestli je již vybraný OS
            //, vratí paměťi se správnou kapacitou
            return Memory::Where([
                ["capacity", "<=", $os["maximumMemory"]],
            ])->get();
        } else {
            return Memory::all();
        }
    }
}

