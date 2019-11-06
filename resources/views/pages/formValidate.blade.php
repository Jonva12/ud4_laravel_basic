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
        <!--@if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif-->
        <form method="post" action="{{route('saludo.form3')}}">
            @csrf
            <label>Nombre: </label><input type="text" name="nombre" id="nombre" value="{{old('nombre')}}"><br>
            {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            <label>Apellido: </label><input type="text" name="apellido" id="apellido" value="{{old('apellido')}}"><br>
            {!! $errors->first('apellido', '<small>:message</small><br>') !!}
            <label>Email: </label><input type="email" name="email" id="email" value="{{old('email')}}"><br>
            {!! $errors->first('email', '<small>:message</small><br>') !!}
            <label>Telefono: </label><input type="number" name="tlf" id="tlf" value="{{old('tlf')}}"><br>
            {!! $errors->first('tlf', '<small>:message</small><br>') !!}
            <input type="submit" name="enviar" value="enviar">
        </form>
    </body>
</html>