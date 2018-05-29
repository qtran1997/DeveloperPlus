<?php
    session_start();
    include 'dbh.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];


    if($pwd1 != $pwd2) {
        header("Location: ../signup.php?failureP=1");
    }
    else {
        $pwd = $pwd1;
    }

    
    
    $salt = "How1Did12You123Get1234Here!!@#420XD102_";
    $pwd = hash('sha256', $salt . $pwd); 
    

    $sql = "SELECT * FROM aclickerlogin WHERE email='$email' ";

    

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo 'MySQL Error: ' . mysqli_error($conn);
        exit;
    }

    if(!$row = mysqli_fetch_assoc($result)) {
        $sql = "INSERT INTO aclickerlogin (fname, lname, email, pwd, pb) 
        VALUES ('$fname','$lname','$email', '$pwd', '0')";
        $result = mysqli_query($conn, $sql);
        
        $_SESSION['id'] = $row['id'];
        header("Location: ../index.php");
    }
    else {
        header("Location: ../signup.php?failureE=1");
    }
?>