{{-- <nav class="navbar navbar-expand-lg bg-navbar bg-light> --}}
<nav class="navbar navbar-expand-lg bg-navbar ">

    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link "  href="{{route('welcome')}}">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="{{route('adventure.index')}}"> -  List adventure </a>
          </li>
         
          <li class="nav-item dropdown">
            @auth
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('adventure.create')}}"> -  Insert Adventure </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('user.profile')}}"> -  Profile </a>
                  </li>
                    
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout</a>
                        <form action="{{route('logout')}}" method="POST" id="logout">
                        @csrf
                        </form>
                    </li>
                </ul>
            @endauth
            @guest
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao Ospite
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                </ul>
            @endguest
            </li>
        </ul>
      </div>
    </div>
  </nav>