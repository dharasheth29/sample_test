<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
        body{
            font-family: "Calibri";
            font-size:12px;
        }
        .div_margin{
            margin: 300 300 300 300;
        }
        .trasparent_text_input_small {
            border: 0;
            outline: 0;
            background: transparent;
            border-bottom: 1px solid grey;
            width:30px;
            font-size: 55px;
        }
        .trasparent_text_input_large {
            border: 0;
            outline: 0;
            background: transparent;
            border-bottom: 1px solid grey;
            width:200px;
        }
        .border_round{
            border-style: solid 1px grey;
            border-radius: 3px;
        }
        </style>
        
    </head>
    <body>
        <div class="container" style="border:solid 1px;">
            <div class="div_margin rounded col-md-9" style="border:solid 1px;">
                <div class="col-md-5"><h1>BEER REWARDS</h3></div>
                <div class="col-md-5"><h1>Have an account?</h3></div>
                <div>                        
                    <div class="col-md-4">Enter as guest</div>          
                    <div class="col-md-2">OR</div>
                    <div class="col-md-4">Login with your account</div>            
                </div>
                <div class="col-md-9" style="border:solid 1px;">
                    @extends('auth.login') 
                    @extends('layouts.guestlogin')                                                
                </div>
            </div>
       </div>    
    </body>
</html>
