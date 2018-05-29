<?php
session_start();
?>
<html lang="en">
    <meta charset="UTF-8">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="index.css">

        <title>Change Password</title>
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


        <div class="account-profile">
            <div class="heading">
                <i class="fas fa-sign-in-alt"></i> Change Password
            </div>
            <hr class="w-100 clearfix">

            <p>Enter your email address so that we can help reset your password:</p>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <label for="email">Email Address</label>
                </div>


                <div class="col-lg-4 col-md-4">
                    <input type="email "for="email" placeholder="testemail@gmail.com" required>
                </div>

                <div class="col-lg-4 col-md-4">
                   <a href="mailto:mustafahayeri@yahoo.com?subject=Click Clack Reset Password&body=Here is your reset code: 456353"><button class="btn btn-primary">Send Code</button></a>
                </div>
                <hr class="w-100 clearfix">


            </div>


        </div>



    </body>

</html>