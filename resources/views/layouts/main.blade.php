<html>
@include('layouts._include.header')

<body>
    @yield('contents')
    @include('layouts._include.footer')
</body>
@include('sweetalert::alert')

</html>
