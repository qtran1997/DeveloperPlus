<nav class="navbar navbar-expand-md">

    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">
        <a href="index.php" class="navbar-brand"><img src="Images/sheeklogo.jpg" alt=""></a>

        <ul class="navbar-nav">    
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="videos.php">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="accountpage.php"><?php echo ' Hello, ' . $_SESSION['fname'] ?></a>
            </li>
            
            <li class="nav-item">
                <form action="loginsystem/logoutsubmit.php" method="POST">
                    <button class="nav-link">Log Out</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

