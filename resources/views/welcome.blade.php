<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel-Sample Test') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>          

        <!-- Styles -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       
    </head>
    <body>
        <div class="container text-center" style="padding:10px;margin-top : 200px !important; border: 1px solid black;border-radius: 15px;"> 
            <div class="row text-center">
                <div class="col-md-10" style="padding:30px 0px 30px 0px;"><h1>BEER REWARDS</h1></div>
            </div>       
            <div class="row">
                <div class="col-md-5"><h3>Enter as Guest</h3></div>
                <div class="col-md-5"><h3>Have an Account?</h3></div>
            </div>       
            <div class="row">
                <div class="col-md-5"><h2><b>What Year</b></h2></div>
                <div class="col-md-5"><h2><b>Login with</b></h2></div>
                <div class="col-md-5"><h2><b>Were You Born</b></h2></div>
                <div class="col-md-5"><h2><b>your rewards account</b></h2></div>
            </div>
            <div class="row">                               
                @include('layouts.guestlogin')
                <div class="col-md-1 font_big" style="padding-top:40px;margin-left:0px;">OR</div>
                @include('auth.login')
            </div>
        </div>
    </body>
</html>
