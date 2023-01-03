<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>little squirrel | Landing, Responsive &amp; Business Templatee</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    @include('frontend.include.begin')
    <!-- <section> close ============================-->
    <!-- ============================================-->


    @include('frontend.include.header')

    <section class="bg-600">

      <div class="container">
        <div class="row">
          <div class="col">
            <h6 class="font-sans-serif text-primary fw-bold">Our Plans </h6>
            <h1 class="mb-6">Get in Reasonable Price</h1>
          </div>
          <div class="col">
            <div class="d-flex justify-content-end">
              <label class="form-check-label me-2" for="customSwitch1">Monthly</label>
              <div class="form-check form-switch">
                <input class="form-check-input" id="customSwitch1" type="checkbox" checked="checked" />
                <label class="form-check-label align-top" for="customSwitch1">Yearly</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-5 mb-md-0 h-100">
              <div class="text-center mb-5"><span class="badge bg-black fw-normal text-uppercase bg-secondary">Starter</span></div>
              <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                <div class="d-flex justify-content-start text-secondary"><span class="h4 mb-0 mt-2 me-2">$</span><span class="display-3 fw-medium">19.</span><span class="display-4 fw-medium">00</span></div>
                <p class="text-muted mb-2 my-md-3">A private limited is the most popular</p>
                <hr class="border border-1" />
                <ul class="list-unstyled">
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Access to 25 courses</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Course Discussions</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Offline Viewing</li>
                  <li class="mb-3"><i class="fas fa-check text-muted me-2"></i>Certificate after completion</li>
                  <li class="mb-3"><i class="fas fa-check text-muted me-2"></i> Private sessions</li>
                </ul>
                <div class="d-grid"> <a class="btn btn-lg btn-primary" href="#!">Purchase now</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-5 mb-md-0 h-100">
              <div class="text-center mb-5"><span class="badge bg-black fw-normal text-uppercase bg-info">premium</span></div>
              <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                <div class="d-flex justify-content-start text-secondary"><span class="h4 mb-0 mt-2 me-2">$</span><span class="display-3 fw-medium">29.</span><span class="display-4 fw-medium">00</span></div>
                <p class="text-muted mb-2 my-md-3">A private limited is the most popular</p>
                <hr class="border border-1" />
                <ul class="list-unstyled">
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Access to 25 courses</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Course Discussions</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Certificate after completion</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Offline Viewing</li>
                  <li class="mb-3"><i class="fas fa-check text-muted me-2"></i> Private sessions</li>
                </ul>
                <div class="d-grid"><a class="btn btn-lg btn-secondary" href="#!">Purchase now</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-5 mb-md-0 h-100">
              <div class="text-center mb-5"><span class="badge bg-black fw-normal text-uppercase bg-danger">enterprise</span></div>
              <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                <div class="d-flex justify-content-start text-secondary"><span class="h4 mb-0 mt-2 me-2">$</span><span class="display-3 fw-medium">49.</span><span class="display-4 fw-medium">00</span></div>
                <p class="text-muted mb-2 my-md-3">A private limited is the most popular</p>
                <hr class="border border-1" />
                <ul class="list-unstyled">
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Access to 25 courses</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Course Discussions</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Certificate after completion</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i>Offline Viewing</li>
                  <li class="mb-3"><i class="fas fa-check text-info me-2"></i> Private sessions</li>
                </ul>
                <div class="d-grid"> <a class="btn btn-lg btn-primary" href="#!">Purchase now</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    @include('frontend.include.footer')
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
  <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{ asset('vendors/is/is.min.js')}}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
  <script src="{{ asset('assets/js/theme.js')}}"></script>

  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>