<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    @include('css')
    @yield('css')
    @yield('upperScript')
    @yield('title')
</head>
<body>
    @include('Admin.menu')

    <div class="content">
        @yield('content')
    </div>

    @include('script')
    @yield('lowerScript')
</body>
</html>