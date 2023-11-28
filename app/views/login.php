<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login | Online Catering System</title>
    <link rel="stylesheet" href="public/CRS/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/CRS/assets/toolkit/css/toolkit.min.css">
    <link rel="stylesheet" href="public/CRS/assets/css/Inter.css">
    <link rel="shortcut icon" href="public/catering.png">
  <link rel="apple-touch-icon" href="public/catering.png">
  <link rel="icon" href="public/favicon.ico" type="image/x-icon">
</head>
<body>
    <style>
        .transparent-form-container {
        background-color: rgba(255, 255, 255, 0.100); 
        padding: 20px; 
        border-radius: 20px; 
        width: 350px;
        margin: auto;
    }
    </style>

<section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Login</p>
                    <h2 class="fw-bold">Welcome back</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                                <div class="transparent-form-container">
                            <!-- flashmessage -->
                            <?php if(isset($_SESSION['msg'])): ?>
                            <div class="fadeIn first">
                            <h2 class='msg'><?= $_SESSION['msg'];?></h2>
                            <div>
                            <?php endif; ?>


                            <!-- formvalidation errors -->
                            <?php if(isset($errors)): ?>
                            <div class="fadeIn first">
                            <h2 class='msg'><?= $errors; ?></h2>
                            <div>
                            <?php endif; ?>
                            <form action="/signin" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="username_log" placeholder="Username"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password_log" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit" name="submit">Log in</button></div>
                                <p class="text-muted">Don't have an account yet?&nbsp;<a href="/signup">Signup</a></p>
                            </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include('include/footer.php')
?>