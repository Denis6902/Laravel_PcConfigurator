<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    function index($product){
        switch ($product):
            case "cpu-cooler":
                return view('products.cpu-cooler', [
                    // set my prom to view

                ]);

            case "motherboard":
                return view('products.motherboard', [
                    // set my prom to view

                ]);

            case "memory":
                return view('products.memory', [
                    // set my prom to view

                ]);

            case "storage":
                return view('products.storage', [
                    // set my prom to view

                ]);

            case "gpu":
                return view('products.gpu', [
                    // set my prom to view

                ]);

            case "case":
                return view('products.case', [
                    // set my prom to view

                ]);

            case "psu":
                return view('products.psu', [
                    // set my prom to view

                ]);

            case "os":
            return view('products.os', [
                // set my prom to view

            ]);

            case "monitor":
            return view('products.monitor', [
                // set my prom to view

            ]);

            endswitch;
    }
}
