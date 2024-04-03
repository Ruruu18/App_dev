<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<div id="app">
    <admin-dashboard></admin-dashboard>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <admin-dashboard></admin-dashboard>
@endsection
