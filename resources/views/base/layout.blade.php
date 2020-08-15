<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

{{-- TÍTULO DE PÁGINA --}}
    <title> @yield('title', 'Project Manager | Inicio') </title>

    {{-- METADATOS --}}
    @include('base.resources.metas')

    {{-- ESTILOS --}}
    @include('base.resources.styles')
    @yield('styles')

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

{{-- NAVBAR --}}
@include('base.components.navbar')

{{-- SIDEBAR --}}
@include('base.components.sidebar')

{{-- CONTENIDOS --}}
<div class="content-wrapper">

    @yield('content')

</div>

{{-- FOOTER --}}
@include('base.components.footer')

</div>

{{-- SCRIPTS --}}
@include('base.resources.scripts')
@yield('scripts')

</body>
</html>
