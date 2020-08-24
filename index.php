<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WGC CANTEEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bikkieday.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">WGC Canteen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="order.php">Order</a>
            <a class="nav-item nav-link" href="studentsignup.php">Get a student ID</a>
            <a class="nav-item nav-link" href="nutrition.php">Nutritional information</a>
            <a class="nav-item nav-link" href="admin.php">Admin</a>
            <a class="nav-item nav-link" href="loginpage.php">Log in</a>
            <a class="nav-item nav-link" href="process_logout.php">Logout</a>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">WGC Canteen</h1>
        <p class="lead">Welcome!</p>
    </div>
</div>
<div class="container py-5">

    <div class="row">
        <div class="col-lg-11 mx-auto">
            <!-- FIRST EXAMPLE ===================================-->
            <div class="row py-5">
                <div class="col-lg-4">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="https://i.ibb.co/BfS2CKr/christian-bolt-Uf0a-Vyl5-C70-unsplash.jpg" alt="joyce-panda-lpsb-MRRq-MQw-unsplash" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                            <h2 class="h5 font-weight-bold mb-2 font-italic">Hot Food</h2>
                            <p class="mb-0 text-small text-muted font-italic">View our orders page to view our delicious selection of hot food!</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="https://i.ibb.co/vVBTv8c/miguel-andrade-p99-OIgwz-Bu4-unsplash.jpg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                            <h2 class="h5 font-weight-bold mb-2 font-italic">Cold Food</h2>
                            <p class="mb-0 text-small text-muted font-italic">We also have a wonderful selection of cold food for those hot summer days</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="https://i.ibb.co/p1Mw99S/nathan-dumlao-d-H67n-Su-Fkv8-unsplash.jpg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                            <h2 class="h5 font-weight-bold mb-2 font-italic">Drinks</h2>
                            <p class="mb-0 text-small text-muted font-italic">Feeling thirsty? Feel free to browse our drinks range</p>
                        </figcaption>
                    </figure>
                </div>
            </div>


            <div class="separator my-3"></div>


            <!-- SECOND EXAMPLE ===================================-->
            <div class="row my-5">
                <div class="col-lg-4">
                    <!-- item -->
                    <figure class="rounded caption-1">
                        <img src="https://i.ibb.co/89Y6npr/jessica-da-rosa-w-XJVi-Xx-HP44-unsplash.jpg" alt="" class="w-100 card-img-top border border-white border-md">
                        <figcaption class="px-5 py-4 text-right text-light">
                            <h2 class="h5 font-weight-bold mb-0">Image caption</h2>
                            <p class="text-small">By Jason Doe</p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-4">
                    <!-- item -->
                    <figure class="rounded caption-1">
                        <img src="https://i.ibb.co/8xBWp8w/kayleigh-harrington-yhn4okt6ci0-unsplash.jpg" alt="" class="w-100 card-img-top border border-white border-md">
                        <figcaption class="px-5 py-4 text-right text-light">
                            <h2 class="h5 font-weight-bold mb-0">Image caption</h2>
                            <p class="text-small">By Jason Doe</p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-4">
                    <!-- item -->
                    <figure class="rounded caption-1">
                        <img src="https://i.ibb.co/K0gsttG/kristina-bratko-n-P11-Tkjx-J7s-unsplash.jpg" alt="" class="w-100 card-img-top border border-white border-md">
                        <figcaption class="px-5 py-4 text-right text-light">
                            <h2 class="h5 font-weight-bold mb-0">Image caption</h2>
                            <p class="text-small">By Jason Doe</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="separator my-2"></div>


            <!-- BIG EXAMPLE =================================== -->

            <div class="py-5">
                <h2 class="h4 font-italic mb-4">The Wellington Girl's Canteen</h2>
                <div class="row">
                    <div class="col-lg-5">
                        <img src="https://i.ibb.co/5sQ8KDd/wgc-canteen.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
                    </div>
                    <div class="col-lg-7">
                        <p class="font-italic text-muted"> Having a tough day at school? Place an order at the WGC Canteen for some delicious food that will be sure to make your day just a little bit better.</p>
                        <p class="font-italic text-muted"> There's no need to go to New World when we have everything here- drinks and food alike. Students say that our hot chips are better than the ones from down the road, but you'll have to come try out yourself.</p>
                        <p class="font-italic text-muted"> Concerned about health? Pop on over to the nutritional info page to select each item and view its nutrional information- we've got plenty of healthy items for you too, like fruit smoothies and paninins.</p>
                    </div>
                </div>
                <p class="font-italic text-muted mb-0">So what are you waiting for? Have a browse round the site- we have a page for you to order, a sign up page to get your unique student ID given to you, a nutrition page, and for the admins- a place we you can carry out all of your admin secrets.</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="drinks.php"><i class="fa fa-angle-double-right"></i>Order</a></li>
                    <li><a href="orders.php;"><i class="fa fa-angle-double-right"></i>Admin</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/RNZFB/" aria-label="Link to Blind Foundation Facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/blindnz?lang=en" aria-label="Link to Blind Foundation Twitter"><i
                                    class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/blindfoundation/?hl=en" aria-label="Link to Blind Foundation Instagram"><i
                                    class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>