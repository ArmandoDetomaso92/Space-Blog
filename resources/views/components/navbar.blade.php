    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark border-bottom">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-rocket-takeoff-fill viola"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link active fs-4 mx-2 " aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active fs-4 mx-2" href="{{route('sell.index')}}">Space Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active fs-4 mx-2" href="{{route('sell.create')}}">Inserisci articolo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active fs-4 mx-2" href="{{route('trade.index')}}">Galleria</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link active fs-4 mx-2" href="{{route('trade.create')}}">Inserisci asta</a>
            </li> --}}


            </ul>
            <div class="nav-item ">
                <a class="nav-link  text-light  active fs-4 mx-2" aria-current="page" href="{{route('contact_us')}}">Contattaci</a>
            </div>
                    
                    @auth
                    <div class="nav-item dropdown text-light mx-3">
                        <a class="nav-link dropdown-toggle fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{Auth::user()->name}} </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('register')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                        <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                        </ul>
                    </div>

                @else        
                    <div class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle active fs-4 mx-2 text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Guest </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="{{route('register')}}">Registrati</a></li>
                        <li><a class="dropdown-item " href="{{route('login')}}">Accedi</a></li>
                        </ul>
                    </div>
                @endauth                 
        </div>
        </div> 
    </nav>


            {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
            </form> --}}