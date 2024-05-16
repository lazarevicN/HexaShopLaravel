<!DOCTYPE html>
<html lang="en">

@include('fixed.head')

<body>

@include('fixed.preloader')
@include('fixed.navigation')

@yield('content')

@include('fixed.footer')
@include('fixed.scripts')

</body>
</html>
