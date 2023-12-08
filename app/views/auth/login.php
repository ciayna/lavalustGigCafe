<!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="utf-8">
        <title>CaterServ - Catering Services Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="public/CRS1/lib/animate/animate.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="public/CRS1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="public/CRS1/css/style.css" rel="stylesheet">
 
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
</body>

</html>