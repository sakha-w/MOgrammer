<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="homepage" ><img src="{{asset ('assets/img/favicons/logoMogrammer.png')}}" height="50" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link active" aria-current="page" href="homepageDashboard">Beranda</a></li>
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link active" aria-current="page" href="userDashboard">User</a></li>
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link" aria-current="page" href="kategoriDashboard">Kategori</a></li>
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link" aria-current="page" href="pertanyaanDashboard">Pertanyaan</a></li>
            <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="dropdown d-none d-lg-block">
              <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </ul>
            </div>
          </div>
        </div>
      </nav>