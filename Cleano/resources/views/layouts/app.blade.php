<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cleaneo') }}</title>

    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('CSS/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/font-awesome.css')}}">

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('CSS/font-family.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <!-- this is the jQUERY cdn link -->
    <link href="{{asset('CSS/data-table.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('CSS/databootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/datatable.css')}}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="Dashboard">
        <div class="container-fluid container-xl px-0">
            <x-sidemenu />
            <div class="Dashboard_header mx-3">

                {{ $slot }}
            </div>
        </div>
    </div>



    @livewireScripts


    <script src="{{asset('JS/bootstrap.js')}}"></script>
    <script src="{{asset('JS/font-awesome.js')}}"></script>
    <script src="{{asset('JS/main.js')}}"></script>

    <script src="{{asset('JS/jquery.js')}}"></script>
    <script src="{{asset('JS/datatable.js')}}"></script>
    <script src="{{asset('JS/databootstrap.js')}}"></script>


    <script>
    new DataTable('#example');
    </script>

</body>

</html>