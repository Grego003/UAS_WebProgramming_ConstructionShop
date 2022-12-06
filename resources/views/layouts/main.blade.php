<!DOCTYPE html>

<html lang="en">

<head>
    <header>
        @include('layouts.partials.head')
    </header>
</head>

<body>
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.script')
</body>

</html>
