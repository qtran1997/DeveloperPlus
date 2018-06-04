<nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="index.php">Developer+</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="videolessons.php">Video Lessons</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>        
        </ul>   
        <ul class="navbar-nav ml-auto user-icon">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-center" href="accountpage.php">
                        Hello, <?php echo $_SESSION['fname'] ?></a>
                    <a class="dropdown-item" href="#"><?php echo $_SESSION['email'] ?> </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="loginsystem/logoutsubmit.php">Logout</a>
                </div>
            </li> 
        </ul>     
    </div>
</nav>
