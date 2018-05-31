<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

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

        <!-- THE TOP SECTION CONSISTING OF THE COVER PHOTO -->
        <section id="cover">
            <div class="cover-caption">
                <div class="container">
                    <h1 class="welcome-text">Welcome to CSS</h1>
                    <a href="#classes_offered" class="btn btn-outline-warning btn-sm" role="button" id="down_arrow">&darr;</a>
                </div>
            </div>
        </section>

        <div class="container text-center classes_header" id="classes_offered"> 
            <h1>Our Courses</h1>
            <hr class="course_bottom">
        </div>

        <div class="coursemenu_filter">

            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Courses <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CSS3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">HTML5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bootstrap4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Business</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- COURSE SELECTIONS --> 

        <div class="container text-center courses">
            <div class="row">
                <div class="col-4">
                    <img src="Images/css_icon.png" class="img-fluid" alt="">
                </div>
                <div class="col-4">
                    <img src="Images/html_icon.png" class="img-fluid" alt="">
                </div>
                <div class="col-4">
                    <img src="Images/bootstrap.png" class="img-fluid" alt="">
                </div>
            </div>       
        </div>

        <div class="container text-center courses">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="row">
                    <div class="course">
                        <img src="Images/css_icon.png" alt="" class="img-fluid">
                        +32,807 Students <i class="far fa-clock"> 1h 10m</i>
                    </div>
                    <div class="course">
                        <img src="Images/css_icon.png" alt="" class="img-fluid">
                        +32,807 Students <i class="far fa-clock"> 1h 10m</i>
                    </div>
                    <div class="course">
                        <img src="Images/css_icon.png" alt="" class="img-fluid">
                        +32,807 Students <i class="far fa-clock"> 1h 10m</i>
                    </div>
                </div>
            </div>
        </div>

        <!--
<div class="container text-center description">
<div class="row py-5">
<div class="col-4">
<div class="course-sub-heading">
<img src="Images/lake.jpeg" alt="">
+32,807 Students <i class="far fa-clock"> 1h 10m</i>
</div>
<p class="course-title"><strong>Mastering CSS. <br> A Brief Introduction</strong></p>
<p>Lorem ipsum dolor sit amet.</p>
</div>
<div class="col-4">
<div class="course-sub-heading">
<img src="Images/lake.jpeg" alt="">
+32,807 Students <i class="far fa-clock"> 1h 10m</i>
</div>
<p class="course-title"><strong>Mastering HTML. <br> A Brief Introduction</strong></p>
<p>Lorem ipsum dolor sit amet.</p>
</div>
<div class="col-4">
<div class="course-sub-heading">
<img src="Images/lake.jpeg" alt="">
+32,807 Students <i class="far fa-clock"> 1h 10m</i>
</div>
<p class="course-title"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></p>
<p>Lorem ipsum dolor sit amet.</p>
</div>
</div>
</div>
-->

        <!--
<div class="container text-center pt-2 courses">
<div class="row">
<div class="col-4">
<img src="Images/css_icon.png" class="img-fluid" alt="">
</div>
<div class="col-4">
<img src="Images/html_icon.png" class="img-fluid" alt="">
</div>
<div class="col-4">
<img src="Images/bootstrap.png" class="img-fluid" alt="">
</div>
</div>       
</div>

<div class="container text-center description">
<div class="row py-5">
<div class="col-4">
<div class="course-sub-heading">
<img src="Images/lake.jpeg" alt="">
+32,807 Students <i class="far fa-clock"> 1h 10m</i>
</div>
<p class="course-title"><strong>Mastering CSS. <br> A Brief Introduction</strong></p>
<p>Lorem ipsum dolor sit amet.</p>
</div>
<div class="col-4">
<div class="course-sub-heading">
<img src="Images/shore.jpeg" alt="">
+32,807 Students <i class="far fa-clock"> 1h 10m</i>
</div>
<p class="course-title"><strong>Mastering HTML. <br> A Brief Introduction</strong></p>
<p>Lorem ipsum dolor sit amet.</p>
</div>
<div class="col-4">
<div class="course-sub-heading">
<img src="Images/lake.jpeg" alt="">
+32,807 Students <i class="far fa-clock"> 1h 10m</i>
</div>
<p class="course-title"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></p>
<p>Lorem ipsum dolor sit amet.</p>
</div>
</div>
</div>
-->


        <div class="middle">
            <div>
                <h1>Design Beautiful Websites From Scratch</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="Images/website.jpeg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" id="css-description">
                        <h2 class="text-center">LOREM</h2>
                        <ul>
                            <li>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, modi.</p>
                            </li>
                            <li>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, modi.</p>
                            </li>
                            <li>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, modi.</p>
                            </li>
                        </ul>
                        <div id="wrapper">
                            <button type="button">LETS BEGIN</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- GRAY BACKGROUND-->
        <div class="grey-background">
            <div class="container text-center"> 
                <h1>Why Developer+ ?</h1>
            </div>
            <div class="container text-center content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <i class="fas fa-desktop"></i>
                        <p class="head-text">Design Appealing Websites</p>
                        <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <i class="far fa-smile"></i>
                        <p class="head-text">Produce Happy Customers</p>
                        <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <i class="fas fa-chart-line"></i>
                        <p class="head-text">Expand Your Business</p>
                        <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>       
            </div>
        </div>

        <div id="footer-cover">
            <div class="cover-caption">
                <div class="container">
                    <div class="col-sm-10 offset-sm-1">
                        <h1>Learn on the Go!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate iure, neque, adipisci dicta harum similique consequuntur repellat.</p>
                        <img src="Images/download.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <section id="subscribe-form">
            <div class="container">
                <div class="col-sm-10 offset-sm-1">
                    <h1 class="text-center"><strong>The Online Learning Experience Built Just For You</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, sunt! Dolorum qui dolor maiores aperiam illo nemo voluptates iste magnam.</p></h1>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 subscribe">
                                <input type="email" placeholder="Email Address">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <button type="button" class="subscribe-button">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>