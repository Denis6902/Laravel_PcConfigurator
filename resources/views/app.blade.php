@php
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
    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\Session;

    $cpuId = Session::get('cpu');
    $cpuCoolerId = Session::get('cpucooler');
    $motherboardId = Session::get('motherboard');
    $memoryId = Session::get('memory');
    $storageId = Session::get('storage');
    $gpuId = Session::get('gpu');
    $pcCaseId = Session::get('pccase');
    $psuId = Session::get('psu');
    $osId = Session::get('os');
    $monitorId = Session::get('monitor');

    $cpu = CPU::Find($cpuId);
    $cpuCooler = CpuCooler::Find($cpuCoolerId);
    $motherboard = Motherboard::Find($motherboardId);
    $memory = Memory::Find($memoryId);
    $storage = Storage::Find($storageId);
    $gpu = GPU::Find($gpuId);
    $pcCase = PcCase::Find($pcCaseId);
    $psu = PSU::Find($psuId);
    $os = OS::Find($osId);
    $monitor = Monitor::Find($monitorId);

    $products = new Collection();
    $products->add($cpu);
    $products->add($cpuCooler);
    $products->add($motherboard);
    $products->add($memory);
    $products->add($storage);
    $products->add($gpu);
    $products->add($pcCase);
    $products->add($psu);
    $products->add($os);
    $products->add($monitor);

    $filtered_products = $products->filter(function ($value, $key) {
        return $value != null;
    });

    $totalPrice = 0;
    foreach ($filtered_products as $product){
        $totalPrice += $product["price"];
    }

    \Illuminate\Support\Facades\Session::put('totalPrice', $totalPrice);

@endphp
    <!doctype html>
<html lang="cs_CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="light dark">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-nightshade.min.css"
          rel="stylesheet">
    <link href="{{ URL::asset('main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/js/darkmode.min.js"></script>
    <title>PC Konfigurátor</title>
</head>
<body class="d-flex flex-column min-vh-100">
{{--TODO: okomentovat CELÝ KOD...--}}
@yield("content")
</body>

<script>
    document.querySelector("#darkmode-button-header-id").onclick = function (e) {
        darkmode.toggleDarkMode();
    }

    document.querySelector("#darkmode-button-footer-id").onclick = function (e) {
        darkmode.toggleDarkMode();
    }
</script>
</html>
