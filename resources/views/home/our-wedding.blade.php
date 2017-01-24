@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Our Wedding Day</h1>

<div class="row">
    <div class="col-sm-6">
        <h2>May 19, 2018</h2>
        <address><strong>The Cheney Place</strong><br>
            1600 Monroe Ave NW, Grand Rapids, MI 49505</address>
        <dl class="dl-horizontal">
            <dt>Ceremony</dt>
            <dd>4:00PM <br><small>(Please arrive by 3:45PM)</small></dd>
            <dt>Cocktail Hour</dt>
            <dd>4:30PM to 5:30PM</dd>
            <dt>Reception</dt>
            <dd>5:30PM to 10:30PM</dd>
        </dl>
        <!--<p>May 19, 2018 4:00 PM</p>
        <address><strong>The Cheney Place</strong><br>
            1600 Monroe Ave NW, Grand Rapids, MI 49505</address>
        <h2>Ceremony</h2>
        <p>4:00 PM (Please arrive at least 15 minutes early)</p>
        <h2>Cocktail Hour</h2>
        <p>4:30 PM to 5:30 PM</p>
        <h2>Reception</h2>
        <p>5:30 PM to 10:30 PM</p>-->

        <h2>Other Information</h2>
        <ol>
            <li>Parking is available at the venue. Other options: You can walk or take a taxi/Uber/Lyft from your hotel to the venue.</li>
            <li>Formal attire</li>
            <li>RSVP is required by March 1, 2018</li>
        </ol>
    </div>
    <div class="col-sm-6">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.331047927272!2d-85.67237774919626!3d42.99236330282571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819ac3c181da793%3A0xe25df70a8e7b5666!2sThe+Cheney+Place!5e0!3m2!1sen!2sus!4v1483138320671" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

@stop

@section('scripts')
@stop

