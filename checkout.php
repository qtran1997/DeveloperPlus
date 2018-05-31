<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css"> 
        <title>Checkout!</title>
    </head>

    <body>

        <div class="nav-wrapper">
            <?php  
            if(isset($_SESSION['id'])) {
                include 'navloggedin.php';
            }
            else {
                include 'navloggedout.php';
            }
            ?>
        </div>

        <div class="grid" id="checkout">
            <div class="bundle">
                <h4>Bundle Package</h4>
                <div class="bundle-info">
                    <div class="row items">
                        <!--

<div class="col-lg-6 col-md-6">
<img src="Images/card.png" alt="">
<img src="Images/expiration.png" alt="">
<img src="Images/cvv.jpg" alt="">
</div>
-->

                    </div>
                    <div class="row cart">
                        <div class="col-lg-4">
                            <img src="Images/card.png" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 1</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>FREE!</h5>
                        </div>
                    </div>
                    <div class="row cart">
                        <div class="col-lg-4">
                            <img src="Images/expiration.png" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 2</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>Sign up for free access!</h5>
                        </div>
                    </div>
                    <div class="row cart">
                        <div class="col-lg-4">
                            <img src="Images/cvv.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 3</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>$0.10</h5>
                        </div>
                    </div>
                    <div class="row cart">
                        <div class="col-lg-4">
                            <img src="Images/cvv.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 4</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>$0.20</h5>
                        </div>
                    </div>
                    <div class="row cart">
                        <div class="col-lg-4">
                            <img src="Images/cvv.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 5</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>$0.20</h5>
                        </div>
                    </div>
                    <hr class="w-100 clearfix">

                    <div class="row cart">
                        <div class="offset-lg-4 col-lg-4">
                            <h5>Total:</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>$0.50</h5>
                        </div>
                    </div>
                </div>     
            </div>
            <!--
<div class="billing">
<h4>Billing Information:</h4>
<div class="billing-info">
<form action="stripesystem/onsitecheckout.php" method="POST">
<div class="row">
<div class="col-lg-6 col-md-6">
<input name="cnumber" type="text" required placeholder="Credit Card Number">
</div>
<div class="col-lg-6 col-md-6">
<img src="Images/card.png" alt="">
<img src="Images/expiration.png" alt="">
<img src="Images/cvv.jpg" alt="">
</div>    
</div>
<div class="row">
<div class="col-lg-3 col-md-3">
<input name="ccvc" type="password" required placeholder="CVC">
</div>
<div class="col-lg-5 col-md-5">
<input name="cmonth" type="text" required placeholder="Month">
</div>
<div class="col-lg-4 col-md-4">
<input name="cyear" type="text" required placeholder="Year">
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<input name="cpostalcode" type="text" required placeholder="Postal Code">
</div>
<div class="col-lg-6 col-md-6">
<input name="ccountry" type="text" required placeholder="Country">
</div>
</div>
</form>
<button>Checkout</button>
</div>
-->
            <div class="billing">

                <h4>Billing:</h4>
                <form style="display:inline-block; margin-right:12%" action="stripesystem/stripe.php" method="POST">
                    <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_Zpooc1w4cUlZMOMsrHrs85V9"
                            data-amount="50"
                            data-name="AmazonClicker.com"
                            data-description="Amazon Clicker Charge"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-zip-code="true"
                            data-email="<?php echo $_SESSION['email'] ?>">
                    </script>
                </form>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <h5>Pay with Paypal!</h5>
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="G8K5YCE684SRW">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>


            </div>

        </div>

        <!--        </div>-->

        <!--
<section class="footer">
<?php  
include 'footer.php';
?>
</section>
-->

    </body>

</html>