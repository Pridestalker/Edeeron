<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Edeeron') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-size: 1rem;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content" id="app">
                <div class="title m-b-md">
                    {{ config('app.name', 'Edeeron')}}
                </div>
                <homepage-links>
                    <div class="links">
                        <a href="#frontpage-information">Informatie</a>
                        <a href="#frontpage-about">Over ons</a>
                        <a href="#frontpage-contact">Contact</a>
                        <a href="/register">Registreer</a>
                    </div>
                </homepage-links>
            </div>
        </div>
        <div class="flex-center position-ref full-height bg-success" id="frontpage-information">
            <div class="content" id="app">
                <div class="title m-b-md text-light">
                    Informatie
                </div>
                <div class="links">
                    <p class="text-light">
                        {{ config('app.name', 'Edeeron') }} is een web applicatie waar je je financieeën makkelijk in kan bijhouden.
                        Het is mogelijk om alleen inkomsten bij te houden, of alleen uitgaves. Het is ook mogelijk om een totaal overzicht te houden 
                        van je inkomen en uitgaves.
                        <br />

                    </p>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height bg-primary" id="frontpage-about">
            <div class="content" id="app">
                <div class="title m-b-md text-warning">
                    Over ons
                </div>
                <div class="links">
                    <p class="text-dark">
                        {{ config('app.name', 'Edeeron') }} is gemaakt door <a class="text-dark" href="http://hijlkema.xyz">Mitch Hijlkema</a>. Web-ontwikkelaar uit Amsterdam. <br />
                        {{ config('app.name', 'Edeeron') }} is gemaakt om je financieeën makkelijk bij te houden. 
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="flex-center position-ref full-height bg-secondary" id="frontpage-contact">
            <div class="content" id="app">
                <div class="title m-b-md text-dark">
                    Contact
                </div>
                <div class="links">
                    <p class="text-dark">
                        Vragen over {{ config('app.name', 'Edeeron') }} kun je  stellen via mail op mitch@hijlkema.studio
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
