<nav id="navbar" class="navbar fixed-top navbar-expand bg-dark">
    <div class="container-fluid bg-dark">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

          @auth
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="{{route('home')}}">Benvenut* {{Auth::user()->name}} | </a>
          </li>
          @endauth

          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="{{route('home')}}">Home</a>
          </li>

          @auth              
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('form')}}">Inserisci prodotto</a>
          </li>
          @endauth

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('index')}}">Prodotti</a>
          </li>

          @guest
          
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('register')}}">Registrati</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('login')}}">Accedi</a>
          </li>
              
          @endguest

          @auth
              
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="nav-link text-white" type="submit">Logout</button>
            </form>
          </li>
          
          @endauth
        </ul>
      </div>
    </div>
  </nav>