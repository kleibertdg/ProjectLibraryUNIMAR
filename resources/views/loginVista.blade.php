<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
        <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- fonst y icon  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0cb0151d7b.js" crossorigin="anonymous"></script>
        <!-- importando archivo css -->
    <link rel="stylesheet" href="{!! asset('CSS/main.css') !!}">
</head>
  <body>

@extends('layouts.layoutLr')

@section('content')

    <img class="bg-img" src="{!! asset('img/wallhaven-login.jpg') !!}" alt="">
    <main>
        <form class="formulario">

            <h1>Login</h1>
             <div class="contenedor">

                 <div class="input-contenedor">
                 <i class="fas fa-envelope icon"></i>
                 <input type="text" placeholder="Correo Electronico">

                 </div>

                 <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                 <input type="password" placeholder="Contraseña">

                 </div>
                 <input type="submit" value="Iniciar sesión" class="button">
                 <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                 <p>¿No tienes una cuenta? <a class="link" href="registrovista.html">Registrate </a></p>
             </div>
            </form>
    </main>

@endsection
        <!-- cores js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
