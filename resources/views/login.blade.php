<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="{{asset('public')}}/css/styles.css" rel="stylesheet" />
        <link href="{{asset('public')}}/css/stylelogin.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <header class="headerlogin">
        <div>
            <h1>Login</h1>
        </div>
        <div class="buttonskie">
            <input type="submit" value="Sign in" name="login" class="btn btn-info btn-lg text-light my-2 py-3" style="width:20% ; border-radius: 30px; font-weight:600;"/>
        </div>
    </header>

    <body class="Login">

    <section class="vh-100"> 

        <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="{{asset('public')}}/css/Login.jpg" class="img-fluid" height="800px" width="900px">
            <h2>Join us!</h2>
            <h4>Start believing in your dreams again!</h4>
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <div class="formsss">
            <form action="login.php" method="post">
                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login </p>
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Username</label>
                <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your e-mail" style="border-radius:25px ;" />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" />

                </div>


                <!-- Submit button -->
                <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <input type="submit" value="Sign in" name="login" class="btn btn-info btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
                </div>

            </form><br>
            <p align="center">i don't have any account <a href="register.php" class="text-primary" style="font-weight:600;text-decoration:none;">Register Here</a></p>
            </div>
        </div>
        </div>
    </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('public')}}/js/scripts.js"></script>
    </body>
</html>
