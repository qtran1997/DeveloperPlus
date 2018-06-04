<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:200" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css">

        <title>Developer+</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <div class="nav-wrapper">
            <?php  

            if(isset($_SESSION['id'])){
                include 'navloggedin.php';
            }
            else{
                include 'navloggedout.php';
            }

            ?>    
        </div>


        <header id="cart-header">
            <div class="cart-head-text">
                <p><i class="fas fa-home"></i> / Shopping Cart</p>
                <h1>Shopping Cart</h1>
            </div>
        </header>













        <!--

<div class="container mt-1 text-center">

<div class="card-deck">
<div class="card card1 related">
<div class="card-body">
<img src="Images/css_icon.png" alt="" class="img-fluid course-img">
<h4 class="card-title mt-2">
<h6><img src="Images/lake.jpeg" alt="" class="sub-heading-img">
+32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
</h4>
<h5 class="card-subtitle"><strong>Mastering CSS. <br> A Brief Introduction</strong></h5>
<p class="card-text mt-3"><button>Add to Cart</button></p>
</div>
</div>
<div class="card card2 related">
<div class="card-body">
<img src="Images/html_icon.png" alt="" class="img-fluid course-img">
<h4 class="card-title mt-2">
<h6><img src="Images/shore.jpeg" alt="" class="sub-heading-img">
+32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
</h4>
<h5 class="card-subtitle"><strong>Mastering HTML. <br> A Brief Introduction</strong></h5>
<p class="card-text mt-3"><button>Add to Cart</button></p>
</div>
</div>
<div class="card card3 related">
<div class="card-body">
<img src="Images/bootstrap.png" alt="" class="img-fluid course-img">
<h4 class="card-title mt-2">
<h6><img src="Images/website.jpeg" alt="" class="sub-heading-img">
+32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
</h4>
<h5 class="card-subtitle"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></h5>
<p class="card-text mt-3"><button>Add to Cart</button></p>
</div>
</div>
<div class="card card4 related">
<div class="card-body">
<img src="Images/bootstrap.png" alt="" class="img-fluid course-img">
<h4 class="card-title mt-2">
<h6><img src="Images/website.jpeg" alt="" class="sub-heading-img">
+32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
</h4>
<h5 class="card-subtitle"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></h5>
<p class="card-text mt-3"><button>Add to Cart</button></p>
</div>
</div>
</div>
</div>




-->














        <!--




<section class="footer">
<?php  
include 'footer.php';
?>
</section>
-->






    </body>
</html>