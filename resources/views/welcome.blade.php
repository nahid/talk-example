<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
        <title>Test chat 123</title>
=======
        <title>Talk Message</title>
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
<<<<<<< HEAD
                    Test Chat 123
                </div>

                <div class="links">
=======
                    Talk
                </div>

                <div class="links">
                    <p>
                        Talk is a laravel 5 based messaging(conversation) system. You can easily integrate
                        this package with any Laravel based project.
                    </p>
                    <p>
                        This is a demo project for Talk. So lets start your journey.
                    </p>
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
                    <a href="{{url('/register')}}" class="">Registration</a>
                </div>
            </div>
        </div>
    </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
