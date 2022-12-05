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

@extends('layouts.layoutNav')

@section('content')

<main>
    <div class="containerCatalago">
            <div class="card">
                <img src="img/Crear-o-Morir.jpg">
                <h5>Crear o morir</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                <a class="btnlink" href="https://drive.google.com/file/d/1IsM3RCNsDfpzB9oH0GjL0WpnpqiccmJH/view?usp=sharing">Leer pdf</a>
            </div>

            <div class="card">
                <img src="img/el-hombre-mas-rico-de-babilonia.jpg">
                <h5>El hombre mas rico de babilonia</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                <a class="btnlink" href="https://drive.google.com/file/d/1QeWuAKMn_cHl4U2JAPVhtsjWg-F6vMJ8/view?usp=sharing">Leer pdf</a>
            </div>

            <div class="card">
                <img src="img/padre-rico-padre-pobre.jpg">
                <h5>Padre rico, padre pobre</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                <a class="btnlink" href="https://drive.google.com/file/d/11pXomrUayU86jPzVl5riUfrwb4Ncq5jm/view?usp=sharing">Leer pdf</a>
            </div>
    </div>
</main>

@endsection
        <!-- cores js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
