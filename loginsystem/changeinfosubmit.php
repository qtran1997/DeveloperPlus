<?php
    session_start();
    include 'dbh.php';

    $email = $_POST['email'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];

    $index = $_SESSION['id'];

    if($email != "") {
        $sql = "UPDATE aclickerlogin SET email= '$email' WHERE id ='$index'";
        $result = mysqli_query($conn, $sql);
    }

    if($pwd1 == "" && $pwd2 == "") {
        echo "EMPTY PASSWORDS";
    }
    else if($pwd1 == $pwd2) {
        $salt = "How1Did12You123Get1234Here!!@#420XD102_";
        $pwd = hash('sha256', $salt . $pwd1); 
        
        $sql = "UPDATE aclickerlogin SET pwd= '$pwd' WHERE id ='$index'";
        $result = mysqli_query($conn, $sql);
    }
    else {
        header("Location: ../accountpage.php?failure=1");
    }

    header("Location: ../accountpage.php?success=1");
    
?>