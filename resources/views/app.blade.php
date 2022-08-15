<!doctype html>
<html lang="cs_CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="light dark">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-nightshade.min.css" rel="stylesheet">
    <link href="{{ URL::asset('main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/js/darkmode.min.js"></script>
    <title>PC Konfigurátor</title>
</head>
<body class="d-flex flex-column min-vh-100">
{{--TODO: okomentovat CELÝ KOD...--}}
@yield("content")
</body>

<script>
    document.querySelector("#darkmode-button-header-id").onclick = function(e){
        darkmode.toggleDarkMode();
    }

    document.querySelector("#darkmode-button-footer-id").onclick = function(e){
        darkmode.toggleDarkMode();
    }
</script>
</html>
