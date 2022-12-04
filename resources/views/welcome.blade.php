<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <x-header></x-header>

    <main>
      <h3 class="menu_title">¡BIENVENIDO, admin</h3>
      
      <section class="menu">
        <a href="/adminUser">
          <div class="menu_option">
            <img class="menu_option-icon" src="{{ asset('assets/icons/users-solid.svg')}}" alt="Users">
            <p  class="menu_option-label">Administrar Usuarios</p>
          </div>
        </a>

        <a href="/library">
          <div class="menu_option">
            <img class="menu_option-icon" src="{{ asset('assets/icons/book-solid.svg')}}" alt="Users">
            <p class="menu_option-label">Gestionar biblioteca virtual</p>
          </div>
        </a>
        <a href="/registerExtra">
          <div class="menu_option">
            <img class="menu_option-icon" src="{{ asset('assets/icons/gear-solid.svg')}}" alt="Users">
            <p class="menu_option-label">Gestión administrador</p>
          </div>
        </a>
      </section>
    </main>
    <x-footer></x-footer>
  </body>
</html>
