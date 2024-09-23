<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .left-box{
            background-color: #E6FEED;
        }

        .right-box{
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
                <form action="signupController.php" class="needs-validation" method="post" novalidate>

                <?php if (isset($_SESSION['signupError'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['signupError']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        unset($_SESSION['signupError']);
                    endif;
                    ?>

                    <div class="form-group mb-3">
                        <label for="username" class="text-secondary">Username</label>
                        <input type="text" class="form-control form-control-lg fs-6" id="username" name="username" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="text-secondary">Email</label>
                        <input type="email" class="form-control form-control-lg fs-6" id="email" name="email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email.
                        </div>
                    </div>

                    <div class="form-group mb-5">
                        <label for="password" class="text-secondary">Password</label>
                        <input type="password" class="form-control form-control-lg fs-6" id="password" name="password" required>
                        <div class="invalid-feedback">
                            Please provide a password.
                        </div>
                    </div>

                    
                    <input class="btn btn-lg btn-dark w-100 fs-6 mb-5" type="submit" name="sign_up" value="Sign up">
                    
                    <div class="form-row w-100 d-flex justify-content-center">
                        <p class="text-secondary">Have an account? <a href="login.php" style="color: green;">Sign in here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="validation.js"></script>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>