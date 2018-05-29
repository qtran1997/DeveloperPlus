<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">




        <link rel="stylesheet" type="text/css" href="index.css"> 

        <title>Sheek Ticker</title>

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

        <!-- 3 SECTIONS FOR LOADING PAGE -->

        <!-- THE TOP SECTION CONSISTING OF THE COVER PHOTO -->
        <section id="cover">
            <div id="cover-caption">
                <div class="container">
                    <div class="col-sm-10 offset-sm-1">
                        <h1 class="display-1">Welcome to CSS</h1>
                        <p>A brief introduction to CSS.</p>
                        <a href="#classes_offered" class="btn btn-outline-secondary btn-sm" role="button" id="down_arrow">&darr;</a>
                    </div>
                </div>
            </div>
        </section>

<!--
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Images/html_icon.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Images/css_icon.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Images/bootstrap.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
-->

        <!-- THE MIDDLE SECTION CONSISTS OF ALL THE CONTENT ON THE PAGE, SPLIT INTO MULTIPLE SUB-SECTIONS -->

        <section class="middle-a">
            <div>
                <hr class="w-100 clearfix d-md-none">
                <h1>Innovation at your Fingertips</h1>
                <hr class="w-100 clearfix d-md-none">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <img src="Images/tapping.jpg" class="img-responsive col-12">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 wrap-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum, dignissimos quos officia quas consequuntur. Delectus rem pariatur dolor perferendis, nemo, praesentium libero eius debitis incidunt qui asperiores officiis similique.</p>
                        <div class="wrap">
                            <button class="btn">CLICK ME</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 wrap-text">
                        <img src="Images/peopletapping.jpeg" class="img-responsive col-12">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 wrap-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum, dignissimos quos officia quas consequuntur. Delectus rem pariatur dolor perferendis, nemo, praesentium libero eius debitis incidunt qui asperiores officiis similique.</p>
                        <div class="wrap">
                            <button class="btn">CLICK ME</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="middle-b">

            <hr class="w-100 clearfix d-md-none">
            <h1 id="section-middle-second-header">Temp Text</h1>
            <hr class="w-100 clearfix d-md-none">
            <div class="ptext">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
            </div>
        </section>

        <section class="middle-c">
            <div class="section-container">
                <div class="left-text">
                    <h2>Left Text</h2>
                    <p class="sub-heading">What You Need to Become Awesome</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur deserunt reprehenderit ab illo itaque iusto obcaecati eveniet repellat incidunt autem.
                    <br>
                    <br>
                    <p> <button class="btn sub-button">HELLO WORLD</button></p>
                </div>
                <div class="right-text">
                    <h2>Right Text</h2>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, non! Odit blanditiis ea exercitationem, neque quos laudantium reprehenderit tempore hic!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, non! Odit blanditiis ea exercitationem, neque quos laudantium reprehenderit tempore hic!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, non! Odit blanditiis ea exercitationem, neque quos laudantium reprehenderit tempore hic!</li>
                    </ul>
                </div>
            </div>
            <div class="photo">
                <img src="Images/peopletapping.jpeg" class="img-responsive" alt="" id="tapping">
            </div>
        </section>

        <section class="middle-d">
            <div class="section-container">
                <div class="left-text">
                    <h2>Left Text</h2>
                    <p class="sub-heading">Outwork the Competition</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur deserunt reprehenderit ab illo itaque iusto obcaecati eveniet repellat incidunt autem.
                    <br>
                    <br>
                    <p> <button class="btn sub-button">HELLO WORLD</button></p>
                </div>
                <div class="right-text">
                    <h2>Right Text</h2>
                    <p>A website is the first essential of any profitable passive income business done online.</p>
                    <p>There are a few free options like Blogger, Tumblr, or WordPress.com. Those are great options for some, but I don’t recommend that path for three important reasons:</p>
                    <ul>
                        <li>When you use a free service, your domain name will almost always be an “extra” extension to the service provider’s own domain. For example, if I created SPI on Tumblr, the web address would be http://smartpassiveincome.tumblr.com instead of https://www.smartpassiveincome.com.</li>
                        <li>You have fewer customization options for design, functionality, and revenue. For example, I know that with free WordPress.com sites, you are limited to using only certain plugins, and you aren’t even allowed to advertise.</li>
                        <li>When you build your business on someone else’s platform, your business is vulnerable to any changes they might make. For example, if Tumblr closed tomorrow, you would lose your business entirely.</li>
                    </ul>
                    <p>These three reasons alone are exactly why I recommend going with a self-hosted website. You have more control, it looks more professional, and you can truly call it your own.</p>
                </div>
            </div>

        </section>

        <section class="middle-e">
            <div class="middle-e-container">
                <div class="middle-e-left">
                    <h2>Temp Text</h2>
                    <br>
                    <p>click clack click</p>
                    <p>purchase today</p>
                    <br>
                    <a href="checkout.php"><button class="btn sub-button">Click to buy</button></a> 
                </div>
                <div class="middle-e-right">
                    <h2> The Number 1 Trusted Product in the Market</h2>
                    <p>I’ve used Bluehost since the beginning and trust them implicitly. I love their customer support and reliability. I’ve even been to their headquarters in Utah just to make sure they were on top of things. [Full Disclosure: As an affiliate, I receive compensation if you purchase through this link.]</p>
                    <p>I hear horror stories all the time from other online entrepreneurs dealing with massive hosting headaches. Thankfully, I never have them with Bluehost. Bluehost just works, which gives me amazing peace of mind!</p>
                    <p>I highly recommend using Bluehost for your first website, and you can get started now at $2.75/month, which is an exclusive deal only available here on SPI! </p>

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