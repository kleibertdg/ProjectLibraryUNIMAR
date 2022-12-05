<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestionar biblioteca</title>
    <link href="{{asset('css/librery.css')}}" rel="stylesheet">
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
              <th>Código</th>
              <th>Título</th>
              <th>Autor</th>
              <th>PDF</th>
              <th></th>
            </thead>
            <tr>
              <th>123</th>
              <th>La culpa es de la vaca</th>
              <th>Jaime Lopera</th>
              <th>culpa.pdf</th>
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
