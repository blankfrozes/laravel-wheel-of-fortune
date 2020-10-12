<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('include.head')
    </head>
    <body class="w-full px-20">
        @include('include.header')

        @yield('content')

        @include('include.footer')

        @stack('scripts')
    </body>
</html>
