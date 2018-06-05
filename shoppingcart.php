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



        <div class="cart-wrapper">
            <div class="shopleft">
                <h3 id="shop-list-header">Your Selections <span class="price-tab"> Price</span></h3>
                <hr>

                <div class="list-container">
                    <ul class="courses-added">
                        <li>
                            <div class="course-wrapper">
                                <div class="left-img">
                                    <img src="Images/bootstrap.png" alt="">
                                    <p class="course-title">An Introduction to Bootstrap 4 <span class="remove-tab">remove</span><span class="cost-tab">$19.99</span></p>
                                    <hr>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-wrapper">
                                <div class="left-img">
                                    <img src="Images/html_icon.png" alt="">
                                    <p class="course-title">An Introduction to Bootstrap 4 <span class="remove-tab">remove</span><span class="cost-tab">$19.99</span></p>
                                    <hr>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-wrapper">
                                <div class="left-img">
                                    <img src="Images/css_icon.png" alt="">
                                    <p class="course-title">An Introduction to Bootstrap 4 <span class="remove-tab">remove</span><span class="cost-tab">$19.99</span></p>
                                    <hr>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-wrapper">
                                <div class="left-img">
                                    <img src="Images/bootstrap.png" alt="">
                                    <p class="course-title">An Introduction to Bootstrap 4 <span class="remove-tab">remove</span><span class="cost-tab">$19.99</span></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="shopright">
                <div class="checkoutbox">
                    <div class="checkout-header">
                        <h3 class="text-center">Summary</h3>
                        <hr>
                    </div>
                    <div class="checkout-body">
                        <h5>Total: <span class="checkout-tab">$79.96</span></h5>
                        <hr>
                        <div class="checkout-submit">
                            <div style="text-align:center;">
                                <button type="button" data-toggle="modal" data-target="#exampleModalCenter">Checkout Now</button>
                            </div>
                            <p class="text-center"><strong>or</strong></p>
                            <div style="text-align:center;">
                                <img src="Images/stripelogo.png" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>



        <!-- STRIPE PAYMENT-->
        <form style="display:inline-block; margin-right:12%" action="stripesystem/stripe.php" method="POST">
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_Zpooc1w4cUlZMOMsrHrs85V9"
                    data-amount="500"
                    data-name="SheekMedia.com/DeveloperPlus"
                    data-description="Video Courses"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-zip-code="true"
                    data-email="<?php echo $_SESSION['email'] ?>">
            </script>
        </form>
        
        
        <!-- CREDIT CARD MODAL -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


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