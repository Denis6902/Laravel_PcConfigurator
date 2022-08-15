@php
    $totalPrice = 0;
    $cpu = Session::get('cpu');
    $cpuCooler = Session::get('cpucooler');
    $motherboard = Session::get('motherboard');
    $memory = Session::get('memory');
    $storage = Session::get('storage');
    $gpu = Session::get('gpu');
    $pcCase = Session::get('pccase');
    $psu = Session::get('psu');
    $os = Session::get('os');
    $monitor = Session::get('monitor');

if ($cpu != null) {
$thisCpu = \App\Models\CPU::Find($cpu);
$totalPrice += $thisCpu["price"];
}

if ($cpuCooler != null) {
$thisCpuCooler = \App\Models\CpuCooler::Find($cpuCooler);
$totalPrice += $thisCpuCooler["price"];
}

if ($motherboard != null) {
$thisMotherboard = \App\Models\Motherboard::Find($motherboard);
$totalPrice += $thisMotherboard["price"];
}

if ($memory != null) {
$thisMemory = \App\Models\Memory::Find($memory);
$totalPrice += $thisMemory["price"];
}

if ($storage != null) {
$thisStorage = \App\Models\Storage::Find($storage);
$totalPrice += $thisStorage["price"];
}

if ($gpu != null) {
$thisGpu = \App\Models\GPU::Find($gpu);
$totalPrice += $thisGpu["price"];
}

if ($pcCase != null) {
$thisPcCase = \App\Models\PcCase::Find($pcCase);
$totalPrice += $thisPcCase["price"];
}

if ($psu != null) {
$thisPsu = \App\Models\PSU::Find($psu);
$totalPrice += $thisPsu["price"];
}

if ($os != null) {
$thisOs = \App\Models\OS::Find($os);
$totalPrice += $thisOs["price"];
}

if ($monitor != null) {
$thisMonitor = \App\Models\Monitor::Find($monitor);
$totalPrice += $thisMonitor["price"];
}

\Illuminate\Support\Facades\Session::put('totalPrice', $totalPrice);
if($totalPrice == 0){
    \Illuminate\Support\Facades\Session::forget('totalPrice');
}
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
