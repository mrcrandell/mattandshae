@extends('layouts.default')

@section('head')
@stop

@section('content')


    <?php
        $date = strtotime("May 19, 2018 4:00 PM");
        $remaining = $date - time();
        $days_remaining = floor($remaining / 86400);
        $hours_remaining = floor(($remaining % 86400) / 3600);
    ?>

    <p>{{$days_remaining}} days and {{$hours_remaining}} hours until we become Mr <span class="fancy">&amp;</span> Mrs Crandell.</p>

@stop

@section('scripts')
@stop

