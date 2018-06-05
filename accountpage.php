<?php
session_start();

if(isset($_SESSION['id']))
{

}
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

        <title>My Account</title>
    </head>

    <body id="account">

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



        <div class="account-profile">
            <div class="heading">
                <?php
                $purchased = "";
                if(!empty($_GET['purchased'])) {
                    $purchased = $_GET['purchased'];
                }
                if($purchased == 1) {
                    echo "<p class='success'>Thank you so much for purchasing our product!!</p>";
                }
                ?>

            </div>


            <div class="wrap">
                <div class="floatleft">
                    <a href="accountpage.php"><i class="fas fa-user"></i> Edit Profile</a>
                    <a href="#"><i class="fas fa-shopping-cart"></i> Shop</a>
                </div>
                <div class="floatright">
                    <a href="accountpage.php"><i class="fas fa-user"></i> Edit Profile</a>

                    <div class="change-info">
                        <form action="loginsystem/changeinfosubmit.php" method="POST">
                            <?php 
                            $failure = "";
                            if(!empty($_GET['failure'])) {
                                $failure = $_GET['failure'];
                            }
                            if($failure == 1){
                                echo "<p class='error'>Your new passwords do not match!</p>";
                            }
                            $success = "";
                            if(!empty($_GET['success'])) {
                                $success = $_GET['success'];
                            }
                            if($success == 1) {
                                echo "<p class='success'>Success!</p>";
                            }
                            ?>

                            <div class="change-fields">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <label for="name">Full Name</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input name="name" class="passwordchange" type="text" placeholder="<?php echo $_SESSION['fname']; ?>" disabled>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <button type="button" id="namechangebutton">EDIT</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="email">Email Address</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input name="email" id ="emailchange" type="email" placeholder="<?php echo $_SESSION['email']; ?>" disabled>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <button type="button" id="emailchangebutton">EDIT</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <label for="password">Old Password</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input name="pwd1" class="passwordchange" type="password" placeholder="********" disabled>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <button type="button" id="passwordchangebutton">EDIT</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <label for="password">New Password</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input name="pwd1" class="passwordchange" type="password" placeholder="********" disabled>
                                    </div>

                                </div>
                                <div class="row edit-field">
                                    <div class="col-lg-4 col-md-4">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input name="pwd2" class="passwordchange" type="password" placeholder="********" disabled>
                                    </div>

                                </div>
                                <button type="submit" id="save-edits">SAVE CHANGES</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>










        <!--
<section class="footer">
<?php  
include 'footer.php';
?>

</section>
-->


        <script type="application/javascript" src="javascript/accountpage.js"></script>

    </body>

</html>