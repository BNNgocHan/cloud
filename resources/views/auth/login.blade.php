<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<style>
    /* Made with love by Mutiullah Samim*/

    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,
    body {

        background-image: url('https://cagd.ask.fm/49f/e3da1/f6e2/4fde/ab67/b216ff075735/animated/1360997.gif');

        background-size: cover;

        background-repeat: no-repeat;

        height: 100%;

        font-family: 'Numans', sans-serif;

    }

    .container {

        height: 100%;

        align-content: center;

    }

    .card {

        height: 370px;

        margin-top: auto;

        margin-bottom: auto;

        width: 400px;

        background-color: #fff(0, 0, 0, 0.5) !important;

    }

    .social_icon span {

        font-size: 60px;

        margin-left: 10px;

        color: #af4719;

    }

    .social_icon span:hover {

        color: black;

        cursor: pointer;

    }

    .card-header h3 {

        color: black;

    }

    .social_icon {

        position: absolute;

        right: 20px;

        top: -45px;

    }

    .input-group-prepend span {

        width: 50px;

        background-color: #af4719;

        color: black;

        border: 0 !important;

    }

    input:focus {

        outline: 0 0 0 0 !important;

        box-shadow: 0 0 0 0 !important;

    }

    .remember {

        color: black;

    }

    .remember input {

        width: 20px;

        height: 20px;

        margin-left: 15px;

        margin-right: 5px;

    }

    .login_btn {

        color: black;

        background-color: #af4719;
        ;

        width: 100px;

    }

    .login_btn:hover {

        color: black;

        background-color: white;

    }

    .links {

        color: black;

    }

    .links a {

        margin-left: 4px;

    }
</style>

<!DOCTYPE html>

<html>

<head>

    <title>Login Page</title>

    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->

    <link rel="stylesheet" href='{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') }}'
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->

    <link rel="stylesheet" href='{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}'
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('styles.css') }}">

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                            @if ($errors->has('email'))
                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                            @endif
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        @if (session('error'))
                            <div class="text-danger">{{ session('error') }}</div>
                        @endif
                        <div class="row align-items-center remember">
                            <input type="checkbox" name="remember">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="{{ route('welcome.register') }}" style="color: #af4719">Sign
                            Up</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>