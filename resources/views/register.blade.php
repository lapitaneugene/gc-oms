<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="{{asset('public')}}/css/styles.css" rel="stylesheet" />
        <link href="{{asset('public')}}/css/styleslogin.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
              <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Sign up</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">




                  <form class="mx-1 mx-md-4" action="add.php" method="post">

                 <div class="dropdown">
                    <div class="select">
                        <span class="selected">Department</span>
                        <div class="caret"></div>
                    </div>

                    <ul class="menu">
                        <li>BSIT</li>
                        <li>BSCS</li>
                        <li>BSEMC</li>
                        <li>ACT </li>
                    </ul>

                  </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Your Name</label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="enter your name" style="border-radius:25px ;" />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Your Email</label>
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your username" style="border-radius:25px ;" />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                        <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" />
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="far fa-newspaper fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Department</label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="enter your name" style="border-radius:25px ;" />

                      </div>
                    </div>


                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" value="Register" name="register" class="btn btn-info btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" style="border-radius:25px ;" />

                    </div>


                    

                  </form>
                  <p align="center">i have already account <a href="index.php" class="text-primary" style="font-weight:600; text-decoration:none;">Login</a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="{{asset('public')}}/css/Register.jpg" class="img-fluid" alt="Sample image" height="300px" width="500px">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('public')}}/js/scripts.js"></script>
    </body>
</html>
