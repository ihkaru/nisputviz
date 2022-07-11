<!DOCTYPE html>
<style>
    .dropdown:hover .dropdown-menu {
  display: block;
}
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="w-full mb-8">
        @include('includes.head')
    </head>

    <body class="antialiased bg-gray-50">
        <header class="row mb-8">
            @include('includes.header')
        </header>
        <div id="main" class="row w-11/12 m-auto p-4 border border-gray-200 rounded-lg bg-white">
                @yield('content')
        </div>
        <footer class="row p-8 bg-white text-gray-600 mt-8">
            @include('includes.footer')
        </footer>
    </body>
</html>
