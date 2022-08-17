<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
use App\Models\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Routing\Controller as BaseController;

class BrandController extends BaseController
{
    function readBrand($id)
    {
        // get all brand components
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

        // put it to collection
        $products = new Collection();
        $this->addToCollection($allThisBrandCpu, $products);
        $this->addToCollection($allThisBrandCpuCooler, $products);
        $this->addToCollection($allThisBrandMotherboard, $products);
        $this->addToCollection($allThisBrandMemory, $products);
        $this->addToCollection($allThisBrandStorage, $products);
        $this->addToCollection($allThisBrandGpu, $products);
        $this->addToCollection($allThisBrandPcCase, $products);
        $this->addToCollection($allThisBrandPsu, $products);
        $this->addToCollection($allThisBrandOs, $products);
        $this->addToCollection($allThisBrandMonitor, $products);

        // filter null values
        $filtered_products = $products->filter(function ($value, $key) {
            return $value != null;
        });

        $perPage = 6;
        $page = request()->query->get('page');
        $productCount = count($filtered_products);
        $maxPage = round($productCount / $perPage) - 1;

        if (request()->has('page')) {
            $filtered_products = $this->paginate($filtered_products, $perPage, $page);

            if ($maxPage < $page) {
                // redirect to page 1
                return redirect()->route('brand', ['id' => $id, 'page' => '1']);
            }
        } else {
            // redirect to page 1
            return redirect()->route('brand', ['id' => $id, 'page' => '1']);
        }

        return view('pcConfigurator.brand', [
            "brand" => $brand,
            "products" => $filtered_products,
            "maxPage" => $maxPage
        ]);
    }

    function readBrands()
    {
        $brands = Brand::all();

        return view('pcConfigurator.brands', [
            "brands" => $brands,
        ]);
    }

    public function addToCollection($array, Collection $collection): void
    {
        foreach ($array as $value) {
            $collection->add($value);
        }
    }

    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
