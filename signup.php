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
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Sign-Up</title>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu h4').click(function() {
                    $("nav ul").toggleClass("active");
                })
            })
        </script>
    </head>
    <body id="formscreen">

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

        <div class="container-form" id="signup-form">
            <div class="wrapper">
                <div class="header">Signup for Exclusive Content</div>
                <div class="contact">
                    <form action="loginsystem/signupsubmit.php" method="POST">
                        <?php
                        $failureE = "";
                        if(empty($_GET['failureE']))
                        {

                        }
                        else
                        {
                            $failureE = $_GET['failureE'];
                        }
                        if($failureE == 1)
                        {
                            echo "<p class='error'>Your email or login is already used!</p>";
                        }
                        $failureP = "";
                        if(empty($_GET['failureP']))
                        {

                        }
                        else
                        {
                            $failureP = $_GET['failureP'];
                        }
                        if($failureP == 1 and $failureE != 1)
                        {
                            echo "<p class='error'>Your passwords do not match!</p>";
                        }
                        ?>
                        <p> 
                            <label for="full-name">First Name</label>
                            <input type="text" name="fname" required>
                        </p><p> 
                        <label for="full-name">Last Name</label>
                        <input type="text" name="lname" required>
                        </p>
                        <p> 
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input type="password" name="pwd1" required>
                        </p>
                        <p>
                            <label for="password">Re-Enter Password</label>
                            <input type="password" name="pwd2" required>
                        </p>
                        <p class="full">
                            <button>Sign Up</button>
                        </p>
                        <div class="privacy">
                            By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                        </div>
                    </form>
                </div>
                <div class="footer" id="signin-footer">Already have an account?<a href="login.php" class="link"> Log in</a></div>
            </div>
        </div>

        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>

    </body>
</html>