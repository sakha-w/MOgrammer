<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <link rel="icon" type="image/png" sizes="" href="{{ asset('assets/img/gallery/logoMogrammer1.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="{{asset ('assets/img/gallery/wave.svg')}}">
    <div style="padding-right: 80px; padding-top: 25px;">
        <a href="/">Home</a>
    </div>
    <div class="container">
        <div class="img">
            <img src="{{asset ('assets/img/gallery/pro.svg')}}">
        </div>
        <div class="login-content">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img src="{{asset ('assets/img/gallery/avatar.png')}}">
                <h3 class="title">Login Here</h3>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" class="input" name="email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <a style="color: #FDC800;" href="register">Daftar Sekarang</a>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset ('assets/js/main2.js')}}"></script>
</body>

</html>