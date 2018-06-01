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
                <a class="nav-link" href="videos.php">Video Lessons</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="accountpage.php">Hello, <?php echo $_SESSION['fname'] ?></a>
            </li>                  
            <li class="nav-item">
                <a class="nav-link" href="loginsystem/logoutsubmit.php">LOG OUT</a>
            </li>        
        </ul>        
    </div>
</nav>
