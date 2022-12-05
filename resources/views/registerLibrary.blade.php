<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Subida de archivos</title>
    <link href="{{asset('css/registerForms.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <x-header></x-header>

    <main>
      <h3 class="menu_title">Carga de bibliografías</h3>

      <form class="register-form">
        <x-input label="Título" holder="..." type="number" value="" />
        <x-input label="Adjuntar PDF" holder="Nombre" type="file" value="" />
        <x-input label="Autor" holder="..." type="text" value="" />
        <x-input label="Género" holder="..." type="text" value="" />
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
