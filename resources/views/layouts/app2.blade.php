<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <title>AnNassim Al Akhdar</title>
    <meta name="keywords" content="Annassim Al Akhdar">
    <meta name="keywords" content="النسيم الاخضر">
    <meta name="description"
        content="annassim al akhdar est une coopérative qui fournit une gamme de services, tels que l'achat et la vente de lait naturel et de ses dérivés">
    <meta name="description" content="النسيم الاخضر هي تعاونية تقدم مجموع من الخدمات كبيع وشراء حليب طبيعي و مشتقاته">
    <meta name="author" content="annassim al akhdar">
    <meta name="author" content="annassim al akhdar,nassimalakhdar,anassimalakhdar,coopérative">
    <!-- FAVICONS ICON -->
    <!-- PAGE TITLE HERE -->
    <title>Cooperative annasim al akhdar</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png"
        href="{{ url('https://anassimalakhdar.com/assets/images/favicon.png') }}">
    <!-- PAGE TITLE HERE -->


    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">

    @yield('content')

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>
