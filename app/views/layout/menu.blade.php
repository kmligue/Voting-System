@extends('layout.main')

@section('css')
    {{ HTML::style('assets/css/menu.css') }}
@stop

@section('content')

<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
    <div class="cbp-hsinner">
        <div class="left hide-for-small-only hide-for-medium-only logo"><h2><a href="/dashboard">Voting System</h2></a></div>
        <ul class="cbp-hsmenu">
            <li>
                <a href="#">File</a>
                <ul class="cbp-hssubmenu">
                    <li><a href="/president/create"><img src="/assets/images/avatar.svg" alt="img01" /><span>President</span></a></li>
                    <li><a href="#"><img src="/assets/images/avatar.svg" alt="img02"/><span>Vice President</span></a></li>
                    <li><a href="#"><img src="/assets/images/avatar.svg" alt="img03"/><span>Treasurer</span></a></li>
                    <li><a href="#"><img src="/assets/images/avatar.svg" alt="img04"/><span>Secretary</span></a></li>
                    <li><a href="#"><img src="/assets/images/avatar.svg" alt="img05"/><span>Representative</span></a></li>
                    <li><a href="#"><img src="/assets/images/avatar.svg" alt="img06"/><span>User</span></a></li>
                    <li><a href="#"><img src="/assets/images/lock.png" alt="img06"/><span>Generate Password</span></a></li>
                    <li><a href="/profile"><img src="/assets/images/avatar.svg" alt="img06"/><span>Profile</span></a></li>
                    <li><a href="/logout"><img src="/assets/images/signout.png" alt="img06"/><span>Signout</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#">Transaction</a>
                <ul class="cbp-hssubmenu cbp-hssub-rows">
                    <li><a href="#"><img src="/assets/images/7.png" alt="img07"/><span>Lovely Slurp</span></a></li>
                    <li><a href="#"><img src="/assets/images/8.png" alt="img08"/><span>Lemony Grappa</span></a></li>
                    <li><a href="#"><img src="/assets/images/9.png" alt="img09"/><span>Eggy Liquor</span></a></li>
                    <li><a href="#"><img src="/assets/images/10.png" alt="img10"/><span>Fresh Juice</span></a></li>
                    <li><a href="#"><img src="/assets/images/1.png" alt="img01"/><span>Delicate Wine</span></a></li>
                    <li><a href="#"><img src="/assets/images/2.png" alt="img02"/><span>Fine Spirit</span></a></li>
                    <li><a href="#"><img src="/assets/images/3.png" alt="img03"/><span>Heavenly Ale</span></a></li>
                    <li><a href="#"><img src="/assets/images/4.png" alt="img04"/><span>Juicy Lemonade</span></a></li>
                    <li><a href="#"><img src="/assets/images/5.png" alt="img05"/><span>Wise Whiskey</span></a></li>
                    <li><a href="#"><img src="/assets/images/6.png" alt="img06"/><span>Sweet Rum</span></a></li>
                    <li><a href="#"><img src="/assets/images/1.png" alt="img01"/><span>Delicate Wine</span></a></li>
                    <li><a href="#"><img src="/assets/images/2.png" alt="img02"/><span>Fine Spirit</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#">Inquiry</a>
                <ul class="cbp-hssubmenu">
                    <li><a href="#"><img src="/assets/images/10.png" alt="img10"/><span>Fresh Juice</span></a></li>
                    <li><a href="#"><img src="/assets/images/6.png" alt="img06"/><span>Sweet Rum</span></a></li>
                    <li><a href="#"><img src="/assets/images/9.png" alt="img09"/><span>Eggy Liquor</span></a></li>
                </ul>
            </li>
            <li><a href="#">Reports</a></li>
        </ul>
    </div>
</nav>

@yield('body')

@stop

@section('script')
    {{ HTML::script('assets/js/menu.js') }}

    <script type="text/javascript">
        var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>
@stop