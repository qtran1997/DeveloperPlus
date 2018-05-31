<?php
    session_start();
    include '../loginsystem/dbh.php';
    $prevurl = $_SERVER['HTTP_REFERER'];
    if(isset($_SESSION['id'])) {
        $loginid = $_SESSION['id'];
        $sql = "SELECT * FROM commentsystem WHERE loginid='$loginid'"; 
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


            $sql = "INSERT INTO commentsystem (fname, comment, rating) 
            VALUES ('$fname','$comment','$rating')";
            $result = mysqli_query($conn, $sql);
            
            header("Location:" . $prevurl);
        }
        else
        {
            header("Location:" . $prevurl . "?failure=1");
        }
    }
    else {
        header("Location: ../login.php");
    }

?>