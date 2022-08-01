<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('site.inc.head')

<body>
    @include('site.inc.header')
    <main>
        @yield('content')
    </main>
    @include('site.inc.footer')
    @include('site.inc.scripts')
</body>

</html>
