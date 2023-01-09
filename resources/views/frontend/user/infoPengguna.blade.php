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


<link rel="stylesheet" href= "/css/app.css" >


    <!-- ID  -->
    <div class="mt-4">
        <x-input-label for="id" :value="__('ID')" />

        <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="($user->id)" readonly/>

        <x-input-error :messages="$errors->get('id')" class="mt-2" />
    </div>

    <!-- Name -->
    <div class="mt-4">
        <x-input-label for="name" :value="__('Name')" />

        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="($user->name)" />

        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

        <!-- Email -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />

        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="($user->email)" readonly/>

        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

     <!-- Password -->
     <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Submit -->
                <x-primary-button class="mt-4">
                        {{ __('Ok') }}
                </x-primary-button>
                <!-- Reset -->
                <x-primary-button class="mt-4">
                        {{ __('Reset') }}
                </x-primary-button>
            </form>
        </div>
    </div>
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