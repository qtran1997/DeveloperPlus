<?php

    session_start();
    include 'dbh.php';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $salt = "How1Did12You123Get1234Here!!@#420XD102_";

    $pwd = hash('sha256', $salt . $pwd); 

    

    $sql = "SELECT * FROM aclickerlogin WHERE email='$email' AND pwd='$pwd'";

    $result = mysqli_query($conn, $sql);
    
    if(!$row = mysqli_fetch_assoc($result)) {
        header("Location: ../login.php?failure=1");      
    }

    else {
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['pb'] = $row['pb'];
    
        header("Location: ../accountpage.php");
//        header("Location: ../index.php");
    }
?>