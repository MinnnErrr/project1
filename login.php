<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .left-box {
            background-color: #E6FEED;
        }

        .right-box {
            background-color: #FAFFFB;
            padding: 40px 80px 40px 80px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <!--left box-->
            <div class="d-none d-md-flex col-md-5 col-lg-6 d-flex left-box justify-content-center align-items-center flex-column">
                <img src="multitasking-concept-illustration.png" class="img-fluid" style="width: 450px;">
                <p class="fs-2 fw-bold">Exam Mastery Hub</p>
                <p class="fs-6 text-secondary text-center" style="width: 300px;">Unleash Your Academic Sucess with Exam Mastery Hub's Exam Excellence Platform</p>
            </div>
            <!--right box-->
            <div class="col-md-7 col-lg-6 d-flex right-box justify-content-center flex-column">
                <div class="d-flex flex-row w-100 justify-content-center mb-5">
                    <h1>LOGO</h1>
                </div>
                <form action="loginController.php" method="post" class="needs-validation" novalidate>
                    <?php if (isset($_SESSION['signupSuccess'])): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['signupSuccess']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        unset($_SESSION['signupSuccess']);
                    endif;
                    ?>


                    <?php if (isset($_SESSION['loginError'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['loginError']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        unset($_SESSION['loginError']);
                    endif;
                    ?>

                    <div class="form-group mb-3">
                        <label for="emailOrName" class="text-secondary">Email or Username</label>
                        <input type="text" class="form-control form-control-lg fs-6" name="emailOrName" id="emailOrName" required>
                        <div class="invalid-feedback">
                            Please enter an email or username.
                        </div>
                    </div>

                    <div class="form-group mb-1">
                        <label for="password" class="text-secondary">Password</label>
                        <input type="password" class="form-control form-control-lg fs-6" name="password" id="password" required>
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-4">
                        <small><a href="#" style="color: green;">Forgot Password?</a></small>
                    </div>
                    
                    <input class="btn btn-lg btn-dark w-100 fs-6 mb-4" type="submit" name="sign_in" value="Sign in">

                    <div class="row mb-4">
                        <div class="col">
                            <hr / class="ms-5">
                        </div>
                        <div class="col-auto text-secondary align-content-center">or</div>
                        <div class="col">
                            <hr / class="me-5">
                        </div>
                    </div>

                    <button class="btn btn-lg text-secondary w-100 fs-6 mb-4"><img src="https://cdn4.iconfinder.com/data/icons/logos-brands-7/512/google_logo-google_icongoogle-512.png" class="me-2 mb-1" style="width: 20px;">Sign in with Google</button>

                    <div class="form-row w-100 d-flex justify-content-center">
                        <p class="text-secondary">Are you new? <a href="signup.php" style="color: green;">Create an Account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="validation.js"></script>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>