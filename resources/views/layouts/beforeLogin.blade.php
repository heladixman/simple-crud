<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}} | Kelompok 5</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="antialiased bg-heroLogin">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-slate-700 bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            <div class="flex flex-col items-center justify-center px-6 py-8 w-4/5 mx-auto h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        @yield('contentContainer')
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
