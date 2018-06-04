<?php
session_start();
include 'cdbh.php';
$prevurl = $_SERVER['HTTP_REFERER'];

$table = $_SESSION['cid'];
if(isset($_SESSION['id'])) {
    $loginid = $_SESSION['id'];
    $sql = "SELECT * FROM $table WHERE loginid='$loginid'"; 
    $result = mysqli_query($conn, $sql);
    if(!$row = mysqli_fetch_assoc($result)) {
        $fname = $_SESSION['fname'];
        $comment = $_POST['comment'];
        $rating = 0;
        $vote = $_POST['upvote'];
        if(isset($vote)) {
            $rating = 1;
        }
        else {
            $rating = 2;
        }


        $sql = "INSERT INTO $table (fname, comment, rating, loginid) 
            VALUES ('$fname','$comment','$rating','$loginid')";
        $result = mysqli_query($conn, $sql);

        header("Location:" . $prevurl);
    }
    else
    {
        if (strpos($a, '?') === false) {
            header("Location:" . $prevurl . "&failure=1");
        }
        else
        {
            header("Location:" . $prevurl . "?failure=1");
        }
        
    }
}
else {
    header("Location: ../login.php");
}

?>