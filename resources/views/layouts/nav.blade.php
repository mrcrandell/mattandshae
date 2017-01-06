<?php
    $date = strtotime("May 19, 2018 4:00 PM");
    $remaining = $date - time();
    $days_remaining = floor($remaining / 86400);
    $hours_remaining = floor(($remaining % 86400) / 3600);
?>
<div class="container-fluid page">
    <header class="header">
        <div class="page-header text-center">
            <h1>Matthew <span class="fancy">&amp;</span> ShaeLee</h1>
            <p>{{$days_remaining}} days and {{$hours_remaining}} hours until we become Mr <span class="fancy">&amp;</span> Mrs Crandell.</p>
        </div>
            <nav class="navbar">
                <ul class="nav navbar-nav">
                    <li class="{{(isset($active_page)) && $active_page=='our-wedding'?'active':''}}"><a href="{{url('/our-wedding')}}">Our Wedding</a></li>
                    <li class="{{(isset($active_page)) && $active_page=='hotel'?'active':''}}"><a href="#">Hotel Information</a></li>
                    <li class="{{(isset($active_page)) && $active_page=='faq'?'active':''}}"><a href="{{url('/faq')}}">FAQ</a></li>
                    <li class="{{(isset($active_page)) && $active_page=='registry'?'active':''}}"><a href="#">Registry</a></li>
                    <li class="{{(isset($active_page)) && $active_page=='contact'?'active':''}}"><a href="#">Contact Us</a></li>
                    <li class="{{(isset($active_page)) && $active_page=='nearby'?'active':''}}"><a href="#">Nearby Attractions</a></li>
                    <li class="{{(isset($active_page)) && $active_page=='style-guide'?'active':''}}"><a href="{{url('/style-guide')}}">Style Guide</a></li>
                </ul>
            </nav>

        <!--<div class="header-img">
            <img src="{{url('/img/engagement-background.jpg')}}" class="img-responsive" alt="Matthew &amp; ShaeLee are getting Married">
        </div>-->
    </header>
    <div class="content">
