<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>
    <link href="{{asset('css/registerForms.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <x-header></x-header>

    <main>
      <h3 class="menu_title">Registro de solicitantes</h3>

      <form class="register-form">
        <x-input label="Cedula" holder="12345678" type="number" value="" />
        <x-input label="Primer nombre" holder="Nombre" type="text" value="" />
        <x-input label="Segundo nombre" holder="..." type="text" value="" />
        <x-input label="Primer pellido" holder="Apellido" type="text" value="" />
        <x-input label="Segundo apellido" holder="..." type="text" value="" />
        <x-input label="Carrera" holder="Carrera" type="text" value="" />
      </form>

      <div class="menu_button-finish">
        <button>
          <a href="/" clas="menu-route">Nuevo</a>
        </button>
      </div>
    </main>
    <x-footer></x-footer>
  </body>
</html>
