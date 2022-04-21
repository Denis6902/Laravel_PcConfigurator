<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class PcConfiguratorController extends BaseController
{
    function index()
    {
        $id = Session::get('motherboard');
        $oneMotherboard = Motherboard::Find($id);

        return view('pcconfigurator.index', [
            "motherboard" => $oneMotherboard
        ]);
    }
}
