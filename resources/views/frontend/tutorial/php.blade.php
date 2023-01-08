

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MOgrammer</title>


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
        <div class="header">
            <h1><b><font size="10">Belajar HTML Dari Dasar: Pengenalan Dasar HTML Untuk Pemula</font></b></h1>
            <hr size="3px" width="100%" >
            <br/>
            <br/>
            <p><font size="6">HTML memang bahasa yang wajib dipelajari, bagi yang mau menjadi web developer. Karena
            HTML merupakan bahasa dasar untuk membangun sebuah web.
            kalian pasti sudah pernah mendengar kata HTML sebelumnya, Tapi tidak ada salahnya membaca kebali artikel ini.</font></p>
            <p><font size="6" >Pada tutorial kali ini, kita benar-benar akan membahas dari nol hingga kamu bisa membuat halaman HTML sendiri.
            Baiklah Mari kita mulai!</font></p>
            <br/><br/><br/><a href="https://news.detik.com/berita/d-6067765/cara-baru-baca-artikel-18-pindahkan-dulu-akun-detikid-jadi-mpc-ya" target="_blank">
            <img src="assets/img/gallery/detikcom.jpeg" alt="Banner Iklan detik.com" width="800" height="400" style="block; margin:auto;" /></a>
            <br/><br/><br/><br/>
            <h4><b><font size="6">Apa Itu HTML?</font></b></h4>
            <br/><p><font size="6">HTML adalah bahasa yang digunakan untuk membuat halaman web. 
            Bagi yang berkecimpung di dunia perangkat gadget dan ilmu komputer, pasti sudah tidak asing lagi dengan berbagai kode di dalamnya. 
            HTML adalah kependekan dari Hypertext Markup Language.</font></p>


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
