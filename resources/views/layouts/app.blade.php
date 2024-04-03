<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<div id="app">
    @yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
