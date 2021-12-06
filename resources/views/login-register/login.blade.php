<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản lý thư viện</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css'>
    <link rel="stylesheet" href="{{url('/')}}/style/login_css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/script/login_script/login.js">
</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="overlay">
            <!-- LOGN IN FORM by Omar Dsoky -->
            <form action="{{route('postLogin')}}" method="post">
            @csrf
            <!--   con = Container  for items in the form-->
                <div class="con">
                    <!--     Start  header Content  -->
                    <header class="head-form">
                        <h2>Login</h2>
                        <!--     A welcome message or an explanation of the login-register form -->
                        <p>chào đến với Website quản lý thư viện</p>
                    </header>
                    <!--     End  header Content  -->
                    <br>
                    <div class="field-set">

                        <!--   user name -->
                        <span class="input-item">
                            <i class="fa fa-user-circle"></i>
                         </span>
                        <!--   user name Input-->
                        <input class="form-input" name="email" id="txt-input" type="text" placeholder="@UserName">

                        <br>

                        <!--   Password -->

                        <span class="input-item">
                            <i class="fa fa-key"></i>
                        </span>


                        <!--   Password Input-->
                        <input class="form-input" type="password" placeholder="Password" id="pwd" name="password">

                        <!--      Show/hide password  -->
                        <span>
                             <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
                        </span>


                        <br>
                        <!--        buttons -->
                        <!--      button LogIn -->
                        <button class="log-in" type="submit"> Log In</button>
                    </div>

                    <!--   other buttons -->
                    <div class="other">
                        <!--      Forgot Password button-->
                        <button class="btn submits frgt-pass">Forgot Password</button>
                        <!--     Sign Up button -->
{{--                        <div>--}}
{{--                            <!--         Sign Up font icon -->--}}
{{--                            <i class="fa fa-user-plus" aria-hidden="true"></i>--}}
{{--                            <a href="{{url('/register')}}">Sign Up</a>--}}
{{--                        </div>--}}
{{--                        <button class="btn sign-up" >--}}

{{--                        </button>--}}
                        <!--      End Other the Division -->
                    </div>

                    <!--   End Conrainer  -->
                </div>

                <!-- End Form -->
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>


</html>
