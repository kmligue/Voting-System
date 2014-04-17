@extends('layout.main')

@section('content')

<div id="st-container" class="st-container">

    <div class="st-pusher">

        <nav class="st-menu st-effect-1" id="menu-1">
            <h2 class="icon icon-lab">Sidebar</h2>
            <ul>
                <li><a class="icon icon-data" href="#">Data Management</a></li>
                <li><a class="icon icon-location" href="#">Location</a></li>
                <li><a class="icon icon-study" href="#">Study</a></li>
                <li><a class="icon icon-photo" href="#">Collections</a></li>
                <li><a class="icon icon-wallet" href="#">Credits</a></li>
            </ul>
        </nav>

        <div class="st-content">
            
            <div class="st-content-inner">
                
                <button data-effect="st-effect-1">Slide in on top</button>

            </div>

        </div>

    </div>
</div>

@yield('body')

@stop