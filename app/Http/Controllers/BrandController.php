<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class BrandController extends BaseController
{
    function index($id)
    {
        $brand = Brand::Find($id);

        return view('pcConfigurator.brand', [
            "brand" => $brand
        ]);
    }
}
