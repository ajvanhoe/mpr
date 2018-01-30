
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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

            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    TEST
                </div>

                <div class="links">
                   
               @if (Route::has('login'))
                
                    @auth
                        @if(auth()->user()->verified == 1)
                        <a class="btn btn-primary" href="{{ url('/dashboard') }}">Home</a>
                        @else
                         <a class="btn btn-primary" class="btn btn-succe" href="{{ route('send-email') }}">email</a>

                        @endif

                    @else
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-primary" class="btn btn-succe" href="{{ route('register') }}">Register</a>
                    @endauth
                     
                 @endif
                 
                
                </div>
            </div>
        </div>
    </body>
</html>
