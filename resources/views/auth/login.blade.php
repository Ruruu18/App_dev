<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div id="app">
        <login-form></login-form>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <login-form></login-form>
@endsection

