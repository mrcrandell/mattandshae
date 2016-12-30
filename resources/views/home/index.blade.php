<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Matthew &amp; ShaeLee's Wedding</title>
        <meta name="description" content="{{isset($description) ? $description : ''}}">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" type="text/css" href="{{ elixir('css/index.css') }}" />
    </head>
    <body class="homepage">

        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Matthew &amp; ShaeLee</h1>

                <?php
                    $date = strtotime("May 19, 2018 4:00 PM");
                    $remaining = $date - time();
                    $days_remaining = floor($remaining / 86400);
                    $hours_remaining = floor(($remaining % 86400) / 3600);
                ?>

                <p>{{$days_remaining}} days and {{$hours_remaining}} hours until we become Mr <span class="fancy">&amp;</span> Mrs Crandell.</p>

                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3">
                        <div class="passcode-container">
                            @if (session('errors'))
                                <div class="alert alert-danger">
                                    {{ session('errors') }}
                                </div>
                            @endif
                            <form method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="passcode">Passcode</label>
                                    <input type="password" class="form-control" id="passcode" name="passcode" placeholder="Passcode" autofocus>
                                </div>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default">Enter</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>

</html>

