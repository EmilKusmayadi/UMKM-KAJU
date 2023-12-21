<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#F8F3EC]">
            <div class="w-full flex justify-between overflow-hidden p-[15px]">
                <div class="w-full sm:max-w-md mx-auto my-auto px-6 py-4 bg-transparent overflow-hidden sm:rounded-lg absolute md:relative">
                    <h1 class="text-[46px] font-semibold mb-10">Keajaiban dunia <br> sayuran hidroponik</h1>
                    {{ $slot }}
                </div>
                <img src="{{asset('image/login.png')}}" alt="" class="h-[100vh] md:h-[95vh]">
                <a class="absolute end-7 top-7 w-[180px] h-[40px] flex justify-center items-center ms-5 text-white text-sm bg-transparent border border-[#E8C597] hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="">
                    {{ __('Registrasi') }}
                </a>
            </div>
        </div>
    </body>
</html>
