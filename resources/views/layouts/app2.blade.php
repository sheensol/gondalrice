<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @yield('description')

    @include('includes.csslinks')

    @yield('assets')
</head>

<body class="animsition">

    {{--<div>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>--}}

    <!-- Header -->
    @include('includes.header2')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('includes.footer')

    <!-- Scripts -->
    @include('includes.scripts')

    @yield('scripts')

</body>
</html>
