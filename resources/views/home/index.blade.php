@extends('layouts.dashboard-layout')
@section('title', 'Home')
@section('page-title', 'Home')
@section('page-subtitle', 'Welcome')

@section('breadcrumb')
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Dashboard</a>
        {{--<span class="icon-angle-right"></span>--}}
    </li>
    {{--    <li><a href="{{ url('/home') }}">Dashboard</a></li>--}}
@endsection

@section('content')
    <h1>Welcome</h1>
@endsection