<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{asset('css/librery.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <x-header></x-header>

    <main>
      <h3 class="menu_title">Historial de préstamos</h3>

      <div>
        <table class="custom-table librery-user">
            <thead>
              <th>Nombre y apellido</th>
              <th>Código Carnet</th>
              <th>Código bibliografía</th>
              <th>Nombre bibliografía</th>
              <th>Fecha de adquisición</th>
            </thead>
            <tr>
              <th>Peralta, Samuel</th>
              <th>#26578</th>
              <th>#56729</th>
              <th>Don Quijote</th>
              <th>2022/11/21</th>
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
