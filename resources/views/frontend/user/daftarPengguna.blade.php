<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>User Dashboard</title>


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


      @include('frontend.include.headeradmin')

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" style="margin-top:-5.8rem">

        <!-- <div class="container">
          <div class="row">
            <div class="card card-span bg-secondary">
              <div class="card-body">
                <div class="row flex-center gx-0">
                  <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="{{ asset('assets/img/gallery/funfacts.png') }}" width="170" alt="..." /></div>
                  <div class="col-lg-8 col-xl-4">
                    <h1 class="text-light fs-lg-4 fs-xl-5">Upcoming Our <span class="text-primary">Basic in Python </span>Course!</h1>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <h1 class="display-1 text-light text-center text-xl-end">11 : 02 : 45 : 21</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
      <div class="container">
          <div class="row">
            <h2 class="text-center mb-5">Daftar Pengguna</h2>
            <div class="col-md-4 mb-4">
              <a href="{{ route('userRegistration') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                class="p-6 bg-white border-b border-gray-200" href="userRegistration" role="button">Registrasi Pengguna</a>
            </div>
          </div>
        </div>
      </section>
                    <table class = "w-full table table-striped table-hover" id="datatable">
                        <thead>
                        <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Opsi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#datatable').DataTable({
            ajax:'{{ url("getAllUsers")}}',
            serverSide: false,
            processing: true,
            deferRender: true,
            type: 'GET',
            destroy: true,
            columns:[
                {data:'id',name:'id'},
                {data:'name',name:'name'},
                {data:'email',name:'email'},

                {data:'action',name:'action', orderable: false, serchable: false},
            ]
        });
    });
</script>
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