<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
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

        <title>Contact Us!</title>

    </head>

    <body>

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

        <div class="contact-wrapper">
            <div class="contact-content">
                <h1>Contact Us</h1>
                <hr id="contact-bottom">
                <p>Send us a Message! We'd love to help!</p>
            </div>
            <div class="form">
                <div class="top-form">
                    <div class="inner-form">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    <div class="inner-form">
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="inner-form">
                        <input type="text" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="middle-form">
                    <div class="inner-form">
                        <input type="text" placeholder="Subject" required>
                    </div>
                </div>
                <div class="bottom-form">
                    <div class="inner-form">
                        <textarea placeholder="Your Message" required></textarea>
                    </div>
                </div>
                <div class="btn form-btn">Send</div>
            </div>
        </div>




        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>



    </body>
</html>