<?php 
include "../commentsystem/cdbh.php";

addcomments(); 

function addcomments() {
    include "../commentsystem/cdbh.php";
    $table = $_SESSION['cid'];
    if(isset($_POST['amount'])) {
        $amount = $_POST['amount'];
    }
    else {
        $amount = 2;
    }
    for ($i = 1; $i <= $amount; $i++) {

        $sql = "SELECT * FROM $table WHERE id='$i'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $comment = $row['comment'];
        $rating = "thumbUp.png";
        $date = substr($row['date'], 0, 10);
        $vote = "upvote";
        if($row['rating'] == 1) {
            $rating = "thumbUp.png";
            $vote = "upvote";
        }
        else {
            $rating = "thumbDown.png";
            $vote = "downvote";
        }

        echo '<div class="comment posted-comment">
                    <p>
                        <label for="comment-box" style="display:inline-block; width:100px;">' . $fname . '<br>' . $date .'</label>
                        <img id="' . $vote . '" src="../Images/' . $rating . '">
                        <textarea name="comment-box" class="comment-box" disabled>' . $comment . '</textarea>
                    </p>    
                </div>';
    }
}


?>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>?comments=1" method="POST">
    <input name="amount" value="
                                <?php
                                $table = $_SESSION['cid'];
                                include "../commentsystem/cdbh.php";
                                $sql = "SELECT id from $table ORDER BY id DESC LIMIT 1";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['id'];
                                ?>
                                " hidden>
    <button class="more-comments" type="submit" <?php $comments = "";
            if(!empty($_GET['comments'])) {
                $comments = $_GET['comments'];
            }
            if($comments == 1) {
                echo "hidden";
            }
            ?>
            >See All Comments</button>
</form>