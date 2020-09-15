<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
                <div class="title m-b-md">
                    Laravel test task
                </div>
                {{ Form::open(['url' => route('send.message')]) }}
                    <div class="card-body form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                {!! Form::label('message', 'Your message', ['class' => 'col-sm-3 control-label required']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('message', null, ['class' => 'form-control', 'placeholder' => 'Your message']) !!}
                                </div>
                            </div>
                        </div>
                        {{Form::submit('Send')}}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </body>
</html>
