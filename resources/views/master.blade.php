<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    @include('css')
    @include('script')
    @yield('css')
    @yield('upperScript')
    @yield('title')
</head>
<body>
    <div class="content">
        @yield('content')
    </div>

    @yield('lowerScript')
</body>
</html>