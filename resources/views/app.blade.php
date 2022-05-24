<!doctype html>
<html lang="cs_CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if(\Illuminate\Support\Facades\Session::get('theme') == 'dark')
        <link href="/bootstrap-night.min.css" rel="stylesheet">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">
    @endif
    <link href="{{ URL::asset('main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <title>PC Konfigurátor</title>
</head>
<body class="d-flex flex-column min-vh-100">
{{--TODO: okomentovat CELÝ KOD...--}}
{{--TODO: Přejmenovat classy z třeba cpuCooler na CpuCooler...--}}
{{--TODO: upravit vzhled kodu...--}}
{{--TODO: zkontrolovat zadaní ukolu, jestli vse splnuji...--}}
{{--TODO: zkusit udělat strankovac...--}}
{{--TODO: přenest scss to /resources/css...--}}
{{--TODO: zkusit udelat kompresi img...--}}
@php
    \Illuminate\Support\Facades\Session::put("currentRoute", \Illuminate\Support\Facades\Request::fullUrl())
@endphp
@yield("content")
</body>
</html>
