<!doctype html>
<html lang="cs_CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if(\Illuminate\Support\Facades\Session::get('theme') == 'dark')
        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@latest/dist/css/bootstrap-dark.min.css"/>
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
{{--TODO: dodělat jednu 1:N vazbu...--}}
{{--TODO: dodělat validace, například ATX desku jde dát jenom do ATX skříňe...--}}
{{--TODO: dodělat databazi, hlavne kvuli validacim...--}}
@php
    \Illuminate\Support\Facades\Session::put("currentRoute", \Illuminate\Support\Facades\Request::fullUrl())
@endphp
@yield("content")
</body>
</html>
