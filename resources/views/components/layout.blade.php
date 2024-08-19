<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ $title }}</title>

    @include('components.cdn')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{-- <link rel="icon" href="{{ asset('image/icon.png') }}"> --}}

    @stack('styles')
</head>

<body>

    <!-- Menu -->

    @include('sections.menu')

    <!-- Content -->

    {{ $slot }}

    <!-- Footer -->

    @include('sections.footer')

</body>

</html>
