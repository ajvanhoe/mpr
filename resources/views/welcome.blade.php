<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mala prodavnica retkosti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 70vh; /* bilo 100 */
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
           
            <div class="content">
                <div class="title m-b-md animated bounce slow">
                    Mala prodavnica retkosti
                </div>
                <hr>
                <div class="links">
                    <a href="{{route('public.index.albuma')}}">Albumi</a>
                    <a href="{{route('public.index.knjiga')}}">Knjige</a>
                    <a href="{{route('public.index.stripova')}}">Stripovi</a>
                    <a href="{{route('kontakt')}}">Kontakt</a>
                </div>

                <hr>
              
            </div>
        </div>
    </body>
</html>
