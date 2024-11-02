<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @yield('description')

    @include('admin.includes.csslinks')

    @yield('assets')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Header -->
        @include('admin.includes.header')

        <!-- Sidebar -->
        @include('admin.includes.sidebar')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('admin.includes.footer')

    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    @include('admin.includes.scripts')

    @yield('scripts')

</body>
</html>
