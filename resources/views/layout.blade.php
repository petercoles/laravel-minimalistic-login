<!DOCTYPE html>
<html class="no-js" lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body class="login">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <div class="row" style="margin-top:100px; margin-bottom:20px;">
                <div class="col-md-4 col-md-offset-4 text-center">
                    @if ($hasLogo)
                    <img src="{{ $logo }}" alt="{{ $altText }}">
                    @else
                    <h2>{{ $logo }}</h2>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    @yield('body')
                </div>
            </div>

        </div>

    </body>
</html>
