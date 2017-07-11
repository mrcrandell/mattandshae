@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Contact Us</h1>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <p>If you have any questions, please let us know.</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">Please correct the errors in red below.</div>
        @endif
        <form id="contact-form" class="form" action="{{url('/')}}/contact" method="post" autocomplete="off">
            <div class="form-group {{($errors->has('name'))?'has-error':''}}">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                @foreach ($errors->get('name') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            <div class="form-group {{($errors->has('email'))?'has-error':''}}">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                @foreach ($errors->get('email') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            <div class="form-group {{($errors->has('message_text'))?'has-error':''}}">
                <label for="message_text" class="sr-only">Message</label>
                <textarea class="form-control" rows="5" id="message_text" name="message_text" placeholder="Message"></textarea>
                @foreach ($errors->get('message_text') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            {{ csrf_field() }}
            @foreach ($errors->get('g-recaptcha-response') as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @foreach ($errors->get('captcha') as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            <div class="form-group form-group-submit">
                <button type="submit" class="btn btn-submit btn-hopbush">Send</button>
            </div>
        </form>
    </div>
</div>

@stop
