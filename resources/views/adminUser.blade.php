<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>
    <link href="{{asset('css/librery.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <x-header></x-header>

    <main>
      <h3 class="menu_title">Solicitantes registrados</h3>

      <a href="/registerUser">
        <button class="menu_new-user">Nuevo</button>
      </a>

      <div>
        <table class="custom-table">
            <thead>
              <th>Código</th>
              <th>Cédula</th>
              <th>Primer nombre</th>
              <th>Segundo nombre</th>
              <th>Apellido</th>
              <th>Segundo apellido</th>
              <th>Carrera</th>
              <th></th>
            </thead>
            <tr>
              <th>123</th>
              <th>28570456</th>
              <th>Manuel</th>
              <th>Jesus</th>
              <th>Pérez</th>
              <th>García</th>
              <th>Ingeniería de sistemas</th>
              <th>Edit</th>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>          <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>          <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>

        </table>
      </div>
    </main>
    <x-footer></x-footer>
  </body>
</html>
