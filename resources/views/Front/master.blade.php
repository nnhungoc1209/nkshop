<!DOCTYPE html>
<html lang="en">
<head>
    @include('Front.head')
    @yield('css')
    @yield('upper-script')
    @yield('title')
</head>

<body>
    @include('Front.header')

    @include('Front.menu')

    @yield('content')

    @include('Front.footer')

    @yield('lower-script')
</body> 
</html>