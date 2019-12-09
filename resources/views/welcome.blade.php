<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twilio Greeter!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            .top-right > a {
                color: #636b6f;
                padding: 0 24px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .05rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > p {
                color: #636b6f;
                padding: 12px 24px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                display: block;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ url('/?language=english') }}">English</a>
                <a href="{{ url('/?language=german') }}">German</a>
                <a href="{{ url('/?language=idoma') }}">Idoma</a>
                <a href="{{ url('/?language=yoruba') }}">Yoruba</a>
                <a href="{{ url('/?language=french') }}">French</a>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Twilio Greeter
                </div>

                <div class="links">
                    @foreach ($greetings as $greeting)
                    <p>{{$greeting}}</p>
                    @endforeach
                </div>
            </div>
        </div>

    </body>
</html>
