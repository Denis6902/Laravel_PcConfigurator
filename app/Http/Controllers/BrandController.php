<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller as BaseController;

class BrandController extends BaseController
{
    function read($id)
    {
        $brand = Brand::Find($id);
        $allThisBrandCpu = CPU::where('brand_id', $id)->get();
        $allThisBrandCpuCooler = CpuCooler::where('brand_id', $id)->get();
        $allThisBrandGpu = GPU::where('brand_id', $id)->get();
        $allThisBrandMemory = Memory::where('brand_id', $id)->get();
        $allThisBrandMonitor = Monitor::where('brand_id', $id)->get();
        $allThisBrandMotherboard = Motherboard::where('brand_id', $id)->get();
        $allThisBrandOs = OS::where('brand_id', $id)->get();
        $allThisBrandPcCase = PcCase::where('brand_id', $id)->get();
        $allThisBrandPsu = PSU::where('brand_id', $id)->get();
        $allThisBrandStorage = Storage::where('brand_id', $id)->get();
        // TODO: zkusit merge tabulek
        // TODO: dodělat stránkovač

        $allComponents = new Collection;
        $allComponents = $allComponents->merge($allThisBrandCpu);
        $allComponents = $allComponents->merge($allThisBrandCpuCooler);
        $allComponents = $allComponents->merge($allThisBrandGpu);
        $allComponents = $allComponents->merge($allThisBrandMemory);
        $allComponents = $allComponents->merge($allThisBrandMonitor);
        $allComponents = $allComponents->merge($allThisBrandMotherboard);
        $allComponents = $allComponents->merge($allThisBrandOs);
        $allComponents = $allComponents->merge($allThisBrandPcCase);
        $allComponents = $allComponents->merge($allThisBrandPsu);
        $allComponents = $allComponents->merge($allThisBrandStorage);

        return view('pcConfigurator.brand', [
            "brand" => $brand,
            "allThisBrandCpu" => $allThisBrandCpu,
            "allThisBrandCpuCooler" => $allThisBrandCpuCooler,
            "allThisBrandGpu" => $allThisBrandGpu,
            "allThisBrandMemory" => $allThisBrandMemory,
            "allThisBrandMonitor" => $allThisBrandMonitor,
            "allThisBrandMotherboard" => $allThisBrandMotherboard,
            "allThisBrandOs" => $allThisBrandOs,
            "allThisBrandPcCase" => $allThisBrandPcCase,
            "allThisBrandPsu" => $allThisBrandPsu,
            "allThisBrandStorage" => $allThisBrandStorage,
            "allComponents" => $allComponents,
        ]);
    }
}
