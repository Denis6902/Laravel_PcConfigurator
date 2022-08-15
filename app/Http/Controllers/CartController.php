<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{
    function read()
    {
        return view('pcconfigurator.cart', [

        ]);
    }
}
