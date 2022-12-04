<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{asset('css/adminUser.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <x-header></x-header>

    <main>
      <h3 class="menu_title">Gestionar Biblioteca Virtual</h3>

      <a href="/registerLibrary">
        <button class="menu_new-user">Agregar</button>
      </a>
  
      <div>
        <table class="custom-table">
            <thead>
              <th>Codigo</th>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Pdf</th>
              <th></th>
            </thead>
            <tr>
              <th>123</th>
              <th>La culpa es de la vaca</th>
              <th>Jaime Lopera</th>
              <th>Culpa.pdf</th>
              <th>Edit</th>
            </tr>
            <tr>
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
            </tr>          <tr>
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
            </tr>

        </table>
      </div>
    </main>
    <x-footer></x-footer>
  </body>
</html>
