<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="homepage"><img src="{{asset ('assets/img/favicons/logoMogrammer.png')}}" height="45" alt="logo"/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="homepage">Beranda</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="tutorial">Tutorial</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="forum">Forum</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="kuis">Kuis</a></li>
            </ul>
            @if(!Auth::check())
              <a class="btn btn-primary order-1 order-lg-0" href="{{route('register')}}">Daftar</a>
            @else
            <div class="dropdown">
              <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="card-img-top" style="width: 40px;" src="{{ asset('assets/img/gallery/profile.png')}}" alt="courses" />  
              </button>
              <ul class="dropdown-menu">
                <li>
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-outline-dark" type="submit" class="btn ">Keluar</button>
                  </form> 
                </li>
              </ul>
            </div>
            @endif
          </div>
        </div>
      </nav>