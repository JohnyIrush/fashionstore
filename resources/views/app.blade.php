<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="/assets/css/slick.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.css">

        <link rel="apple-touch-icon" href="/assets/img/apple-icon.png">
        <link rel="stylesheet" href="/assets/css/templatemo.css">
        <link rel="stylesheet" href="/assets/css/custom.css">
        <!-- Scripts -->
        @routes
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="https://js.stripe.com/v3/"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="/safaricomdaraja-js/mpesa-express-form1.js" defer></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">-->
    </head>
    <body class="font-sans antialiased">
        @inertia
            {{--Start Ajax Call waiting--}}
            <div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
                <div class="modal-header">
                    <h1>Please Wait</h1>
                </div>
                <div class="modal-body">
                    <div id="ajax_loader">
                        <img src="~/Images/ajax-loader.gif" style="display: block; margin-left: auto; margin-right: auto;">
                    </div>
                </div>
            </div>
            {{--End Ajax Call waiting--}}
        @env ('local')
            <!--<script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>-->
        @endenv

        <script src="https://js.stripe.com/v3/"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>
