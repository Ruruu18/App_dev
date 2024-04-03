<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
<div id="app">
    <user-dashboard></user-dashboard>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <user-dashboard></user-dashboard>
@endsection
