<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.head')
    @yield('head')
</head>

<body>
    <div class="bg-white">
        @include('component.header')
        @yield('content')
    </div>
</body>

</html>
