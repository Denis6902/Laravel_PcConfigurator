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
        $brand->name = Str::limit($brand->name, strlen($brand->name) - 1, '');

        return view('pcconfigurator.brand', [
            "brand" => $brand
        ]);
    }
}
