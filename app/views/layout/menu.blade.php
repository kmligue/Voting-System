@extends('layout.main')

@section('content')

<nav class="top-bar">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">Voting System</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"></a></li>
    </ul>
    
    <ul class="right top-menu">
        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
    </ul>
   
</nav>

@yield('body')

@stop