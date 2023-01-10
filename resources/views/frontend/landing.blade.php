<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Homepage</title>

  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="icon" type="image/png" sizes="" href="{{ asset('assets/img/gallery/logoMogrammer1.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
  <meta name="theme-color" content="#ffffff">


  <!--Stylesheets-->
  <!--===============================================-->
  <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />

</head>

<body>
  <main class="main" id="top">
    @include('frontend.include.begin')

    @include('frontend.include.header')

    <section class="pt-6 bg-600" id="home" style="height: 800px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{ asset('assets/img/gallery/hero-header.png')}}" width="470" alt="hero-header" /></div>
          <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
            <h3 class="fw-bold font-sans-serif">MOgrammer</h3>
            <h1 class="fs-6 fs-xl-7 mb-2">Kejar mimpimu bersama kami</h1><a class="btn btn-primary me-4" href="#!" role="button">Let's GO!</a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <h1 class="text-center mb-5"> Top Featured Courses</h1>
          <div class="col-md-4 mb-4">
            <div class="card h-100 mb-2"><img class="card-img-top" src="{{ asset('assets/img/gallery/design.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">PHP - Instalasi Laravel</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Sakha Athena</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/psychology.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Buddhism and Modern Psychology</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/philosophy.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Philosophy</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/photographs.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Advance on Seeing Through Photographs</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/arguments.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Think Again I: How to Understand Arguments</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/experience-design.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/user-research.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/critical-thinking.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/art-design.png')}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="pt-0">

      <div class="container">
        <div class="row h-100 align-items-center">
          <div class="col-md-12 col-lg-6 h-100">
            <div class="card card-span text-white h-100"><img class="w-100" src="{{ asset('assets/img/gallery/good-student.jpg')}}" alt="..." />
              <div class="card-body px-xl-5 px-md-3 pt-0">
                <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
                  <h5 class="mt-3 mb-0">Arnold Dominggos Sitompul</h5>
                  <p class="text-muted">Fullstack JavaScript</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 h-100">
            <h1 class="my-4">Successful Student<br /><span class="text-primary">Feedback</span></h1>
            <p>Take courses from the world’s best instructors and universities. Courses include recorded auto-graded and peer-reviewed assignments, video lectures, and community discussion forums. When you complete a course, you’ll be eligible to receive a shareable electronic Course Certificate for a small fee.</p>
            <div class="mt-6">
              <h5 class="font-sans-serif fw-bold mb-3">The courses that Arnold has taken</h5>
              <div class="card card-span bg-600">
                <div class="card-body">
                  <div class="row flex-center gx-0">
                    <div class="col-lg-4 col-xl-3 text-center text-xl-start"><img src="{{ asset('assets/img/gallery/javascript.png')}}" width="120" alt="courses" /></div>
                    <div class="col-lg-8 col-xl-9">
                      <h5 class="font-sans-serif fw-bold">CRUD JavaScript</h5>
                      <p class="text-muted fs--1">JavaScript</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </section>

    @include('frontend.include.footer')
  </main>
  <!--JavaScripts-->
  <!--===============================================-->
  <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
  <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{ asset('vendors/is/is.min.js')}}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
  <script src="{{ asset('assets/js/theme.js')}}"></script>

  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>