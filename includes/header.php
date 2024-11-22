<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RedoHerbs</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<style>
    .cusnav{
        display:block !important;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-white p-0 sticy">
        <div class="container-fluid paadd">
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" class='logoimg' alt="logo">
            </a>

            <button class="navbar-toggler border-0 shadow-none">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-cart-shopping shCartmob"></i>
                    </a>
                </li>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gapitem">
                    <li class="nav-item">
                        <div class="input-group mt-2">
                            <input type="text" class="form-control shadow-none py-1" placeholder="Products...."
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <button class='loginbtn'>Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-cart-shopping shCart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                         <button class="navbar-toggler cusnav border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>
                    </li>

                </ul>

            </div>
        </div>

    </nav>

    <!-- mobile view   -->

    <div class="offcanvas offcanvas-end" style='z-index:10000;' tabindex="1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gapitemobile">
                    
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="login.php">
                            <button class='loginbtn w-50 fw-bold'>Login</button>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link fs-6 fw-bold" href="product.php">
                           Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-bold" href="#">
                           Consult a Doctor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-bold" href="#">
                         Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-bold" href="contact.php">
                        Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-bold" href="about.php">
                           About Us
                        </a>
                    </li>
                   
                    

                </ul>
        </div>
    </div>