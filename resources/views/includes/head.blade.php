<meta charset="utf-8">

<meta name="application-name" content="{{ config('app.name') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name') }}</title>

<!-- Styles -->
<style>[x-cloak] { display: none !important; }</style>
@livewireStyles
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
@livewireScripts
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('scripts')

<!-- Scripts and CSS import -->
@vite
