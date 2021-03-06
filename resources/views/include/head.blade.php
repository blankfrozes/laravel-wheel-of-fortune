<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Profile') }}</title>
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
