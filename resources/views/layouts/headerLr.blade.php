<link rel="stylesheet" href="{!! asset('CSS/main.css') !!}">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-absolute navbar-transparent">
        <div class="container">
          <a class="navbar-brand" href="#">Biblioteca Unimar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Catalagos">Catalago</a>
              </li>
              <li class="nav-item">
                <a href="/RegistroUser" class="nav-link">
                    <i class="fa-regular fa-address-card"></i> Registro
                    </a>
              </li>
              <li class="nav-item">
                <a href="{{route('LoginUser')}}" class="nav-link">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</header>
