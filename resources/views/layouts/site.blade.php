<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="w-3/4 mx-auto p-3 bg-darkgray">
    <div>
    <header>
        <h1 class="text-2xl text-darkgray">{{ config('app.name', 'Laravel') }}</h1>
    </header>
        <nav class="my-2">
            <ul class="flex">
                <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'blog.index') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('blog.index')}}">Blog</a> </li>
                <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'about.me') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('about.me')}}">Over mij</a></li>
                <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'contact.form') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('contact.form')}}">Contact</a></li>
            </ul>
        </nav>
    <main>
            {{ $slot }}
    </main>
    <footer>
        @ 2022
    </footer>
    </div>
    </body>
</html>
