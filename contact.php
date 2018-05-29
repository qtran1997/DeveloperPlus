<?php
session_start();
?>
<!DOCTYPE html>
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
        <link href="https://fonts.googleapis.com/css?family=Catamaran:200" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css">

        <title>Contact Us!</title>

    </head>

    <body id="#contact-page">

        <!-- NAVBAR -->
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

        <section class="contact-top">
            <div class="contact-header-text">
                <h2>Get In Touch</h2>
                <hr class="w-75 clearfix d-md-none">
                <p id="small-text">Have any questions? We'd love to help!</p>
            </div>
        </section>

        <div class="contact-container">
            <p>Message Us</p>
            <form action="">
                <div class="user-info">
                    <input type="text" class="input" placeholder="Full name" required>
                    <input type="email" class="input" placeholder="Email address" required>
                </div>

                <div class="message">
                    <textarea name="message" class="area" id="message" required></textarea>
                </div>

                <div class="send-info">
                    <button class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>


    </body>
</html>