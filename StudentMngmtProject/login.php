<?php include('includes/register-form.php') ?>

<html lang="en-gb">
    <head>
        <title>CASARA SIS Portal</title>
        <link rel="stylesheet" href="login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;700&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/favicon.ico">
    </head>
    <body>
        <div class="main-flex-container">
            <div class="login-half half-width">
                <div class="login-flex-container">
                    <div class="login-flex-item">
                        <div class="profile-pic"></div>
                        <img class="main-title" src="assets/casara-logo-black-selfmade.png">
                        <h2 class="sub-title">Log in to your account</h2>
                        <p class="sub-text">Please login to continue to your account</p>
                        <form action="login.php" method="post">
                            <?php include('includes/form-errors.php'); ?>
                            <div class="form-input">
                                <label for="username" class="form-label">Username</label>
                                <input name="username" class="form-input-label" type="email" placeholder="email@example.com" required>
                            </div>
                            <div class="form-input">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" class="form-input-label" type="password" placeholder="Your Password" required>
                            </div>
                            <div class="login-small-flex-container">
                                <label class="remember-checkbox">
                                    <span class="remember-text">Remember Me</span>
                                    <input type="checkbox" checked>
                                </label>
                                <span class="forgot-password">
                                    <a class="forgot-password-link" href="index.php">Forgot Password?</a>
                                </span>
                            </div>
                            <input class="login-button" type="submit" name="login_user" value="Log In">
                            <div class="spacer"></div>
                            <p class="register-text">Don't have an account? <a class="forgot-password-link" href="register.php">Register Here</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="image-half half-width">
            </div>
        </div>
    </body>
</html>
