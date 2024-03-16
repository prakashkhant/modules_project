<?php

    include './database/db.php';
    $db = new DB();
    $db->connect_DB();
    session_start();

    if(isset($_POST["review"]) && $_POST["review"] == "like"){
        $itemid = $_POST["item"];
        $uid = $_POST["user"];
        
        $res = mysqli_query($db->conn, "INSERT INTO review(comment, liked, item_id, uid) VALUES(NULL, 1, $itemid, $uid)");
    }

    if(isset($_POST["review"]) && $_POST["review"] == "unlike"){
        $itemid = $_POST["item"];
        $uid = $_POST["user"];

        $res = mysqli_query($db->conn, "UPDATE review SET liked = 0 WHERE item_id = $itemid AND uid = $uid");
    }
    
    if(isset($_POST["review"]) && $_POST["review"] == "comment"){
        $itemid = $_POST["item"];
        $comment = $_POST["comment"];

        $uid = 0;
        if(isset($_SESSION["id"])){
            $uid = $_SESSION["id"];
        }

        $res1 = mysqli_query($db->conn, "SELECT COUNT(flc_id) FROM review WHERE item_id = $itemid AND ((liked = 1 OR liked = 0) AND (uid = $uid) AND (comment IS NULL))");
        
        if(mysqli_fetch_array(mysqli_query($db->conn, "SELECT COUNT(flc_id) FROM review WHERE item_id = $itemid AND ((liked = 1 OR liked = 0) AND (uid = $uid) AND (comment IS NULL))"))[0] > 0)
        {
            echo "comment is Null BUT Like is 1 or 0";
            mysqli_query($db->conn, "UPDATE review SET comment = '$comment' WHERE item_id = $itemid AND uid = $uid");
            echo "UPDATE review SET comment = '$comment' WHERE item_id = $itemid AND uid = $uid";
        }
        else if(mysqli_fetch_array(mysqli_query($db->conn, "SELECT COUNT(flc_id) FROM review WHERE ((item_id = $itemid AND uid = $uid) AND comment IS NOT NULL)"))[0] > 0){
            echo "comment is NOT Null";
            $sql = mysqli_query($db->conn, "SELECT comment FROM review WHERE ((item_id = $itemid AND uid = $uid) AND comment IS NOT NULL)");
            $oldComments = [];
            while($r = mysqli_fetch_array($sql)){
                array_push($oldComments, $r);
            }

            $NewComments = [];
            foreach($oldComments as $commentStr){
                echo "\nComment : ".$commentStr["comment"];
                explode(",", $commentStr["comment"]);
                print_r("\nComment Array : ".$commentStr["comment"]);
                array_push($NewComments, $commentStr[0]);
            }
            array_push($NewComments, $comment);
            print_r($NewComments);
            $str = implode(",", $NewComments);
            echo $str;
            mysqli_query($db->conn, "UPDATE review SET comment = '$str' WHERE item_id = $itemid AND uid = $uid");
            echo "UPDATE review SET comment = '$comment' WHERE item_id = $itemid AND uid = $uid";
        }
        else{
            echo "comment is Null AND Like is NULL";
            mysqli_query($db->conn, "INSERT INTO review(comment, liked, item_id, uid) VALUES('$comment', 0, $itemid, $uid)");
            echo "INSERT INTO review(comment, liked, item_id, uid) VALUES('$comment', 0, $itemid, $uid)";
        }
    }

    if(isset($_GET["review"]) && $_GET["review"] == "comments"){
        $itemid = $_GET["item"];

        $uid = 0;
        if(isset($_SESSION["id"])){
            $uid = $_SESSION["id"];
        }

        $res = mysqli_query($db->conn, "SELECT * FROM review NATURAL JOIN userdetails WHERE item_id = $itemid AND comment IS NOT NULL");
        $comments = [];
        while($r = mysqli_fetch_array($res)){
            array_push($comments, $r);
        }
        $data = "";

        $data .= "<div class='comments-list'>
        <span class='cross' onclick='hideComments()'><i class='fa-regular fa-circle-xmark'></i></span>";
        if(sizeof($comments)>0){
            foreach($comments as $dt){
                $commentsarr = explode(",", $dt["comment"]);

                foreach($commentsarr as $cmt){
                    $data .= "<div class='row'>
                    <div class='col-md-1'>
                        <img src='images/author.png' class='commentor-pic' />
                    </div>
                    <div class='col-md-9'>
                        <p class='commentor-name'>".$dt["fullname"]."</p>
                        <p class='comment'>".$cmt."</p>
                    </div>
                </div>";
                }
        }
        }else{
            $data .= "<h3 class='no-comments'>No Comments Found!!<h3>";
        }
        $data .= "</div>
        <div class='comment-box'>
            <div class='col-md-9'>
                <input type='text' class='comment-input' id='comment$itemid' placeholder='comment here...' />
            </div>
            <div class='col-md-1'>
                <button type='button' class='comment-send' onclick='commentPost($itemid)'><i class='fa-regular fa-paper-plane'></i></button>
            </div>
        </div>";

        echo $data;
    }
?>