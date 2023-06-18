<html>
@include('layouts._include.header')

<body style="min-width: 100vw;">
    @yield('contents')
    @include('layouts._include.footer')
</body>
@include('sweetalert::alert')

</html>
