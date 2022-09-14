<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rahul-Relief Fund</title>
    <link rel="icon" type="text/css" href="img/logocoding.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->



    <!-- Brand & Contact Start -->
    <!-- <div class="container-fluid py-4 px-5 wow fadeIn bg-dark text-white" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h1 class="fw-bold text-primary m-0"><img src="img/logocoding.png"
                            style="width: 50px; height: 50px; margin-right:15px; color:tomato;">JITU-CodingClass</h1>
                    <img src="img/logo.png" alt="Logo">
                </a>
            </div>
        </div>
    </div> -->

    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn navbar-active"
        data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div>
                <a href="./index_new.php" class="nav-item nav-link left active"><span
                        style="color:rgb(255, 154, 21) ; font-weight: bolder; font-size: 50px; ">R</span><span
                        style="color:rgb(255, 255, 255) ; font-weight: bolder; font-size: 50px;">R</span> <span
                        style="color:rgb(122, 253, 0) ; font-weight: bolder; font-size: 50px;">F</span>
                </a>
            </div>
            <div class="navbar-nav me-auto p-3 p-lg-0">

                <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
                <a href="index_new.php" class="nav-item nav-link " target="_blank">Home</a>

                <a href="about.php" class="nav-item nav-link" target="_blank">About Us</a>
                <!-- <a href="donate.html" class="nav-item nav-link ">Donate Online</a> -->


            </div>
            <!-- <a href="registration.php" class="btn btn-sm btn-outline-light" target="_blank">Registration</a>
            <a href="login.php" class="btn btn-sm btn-outline-light" target="_blank">Login</a> -->
            <a id="google_translate_element"></a>

        </div>
    </nav>
    <!-- Navbar End -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class=" navbar-light bg-light   m-4">
                    <h1>
                        Contact Us
                    </h1>
                </div>
                <img src="./systemImage/contact_us.jpg" style="width:100%; height:350px;" autoplay></img>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col-md-10">
            <form method="post" action="insert_contact.php">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="first_name" placeholder="First name"
                            aria-label="First name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="last_name" placeholder="Last name"
                            aria-label="Last name">
                    </div>
                </div>
                <div class="row mt-2 ">
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Email Id"
                            aria-label="Email Id">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="mobile" placeholder="Mobile Number"
                            aria-label="Mobile Number">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-floating">
                        <textarea class="form-control" name="comment" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" name="submit" class=" btn btn-primary text-center">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mb-4"></div>
    <br><br><br>
    <footer>

        <nav class="navbar navbar-expand-lg navbar-dark bg-info te">
            <div class="container-fluid ">
                <p class="text-center " style="font-style:italic ; color:black;">
                    @RRF STABLISHED IN 2022
                </p>
            </div>
        </nav>

    </footer>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'mr'
        }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>