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



        <div class="coursemenu_filter">

            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" id="filter-all" href="#">All Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-css" href="#">CSS3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-html" href="#">HTML5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-bs" href="#">Bootstrap4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-tech" href="#">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-design" href="#">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-business" href="#">Business</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- COURSE SELECTIONS --> 
        <div>

            <div class="container video-lesson mt-1 text-center">
                <div class="card-deck">
                    <div class="card tut-css">
                        <div class="card-body">
                            <a href="tutorials/cssvideos.php"><img src="Images/css_icon.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/lake.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering CSS. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card tut-html">
                        <div class="card-body">
                            <a href="tutorials/htmlvideos.php"><img src="Images/html_icon.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/shore.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering HTML. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card tut-bs">
                        <div class="card-body">
                            <a href="tutorials/bootstrapvideos.php"><img src="Images/bootstrap.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/website.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card tut-css">
                        <div class="card-body">
                            <a href="tutorials/cssvideos.php"><img src="Images/css_icon.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/lake.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering CSS. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card tut-html">
                        <div class="card-body">
                            <a href="tutorials/htmlvideos.php"><img src="Images/html_icon.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/shore.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering HTML. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card tut-bs">
                        <div class="card-body">
                            <a href="tutorials/bootstrapvideos.php"><img src="Images/bootstrap.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/website.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card-deck">
                    <div class="card tut-css">
                        <div class="card-body">
                            <a href="tutorials/cssvideos.php"><img src="Images/css_icon.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/lake.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering CSS. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card tut-html">
                        <div class="card-body">
                            <a href="tutorials/htmlvideos.php"><img src="Images/html_icon.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/shore.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering HTML. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card tut-bs">
                        <div class="card-body">
                            <a href="tutorials/bootstrapvideos.php"><img src="Images/bootstrap.png" alt="" class="img-fluid course-img"></a>
                            <h4 class="card-title mt-2">
                                <h6><img src="Images/website.jpeg" alt="" class="sub-heading-img">
                                    +32,807 Students <i class="far fa-clock"> 1h 10m</i></h6>
                            </h4>
                            <h5 class="card-subtitle"><strong>Mastering Bootstrap. <br> A Brief Introduction</strong></h5>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>

        <script type="application/javascript" src="javascript/videolessons.js"></script>

    </body>
</html>