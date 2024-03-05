<?php

    include './database/db.php';
    $db = new DB();
    $db->connect_DB();

    if(isset($_POST["review"]) && $_POST["review"] == "like"){
        $itemid = $_POST["item"];
        $uid = $_POST["user"];
        
        $res = mysqli_query($db->conn, "INSERT INTO review(comment, liked, item_id, uid) VALUES('', 1, $itemid, $uid)");
    }

    if(isset($_POST["review"]) && $_POST["review"] == "unlike"){
        $itemid = $_POST["item"];
        $uid = $_POST["user"];

        $res = mysqli_query($db->conn, "UPDATE review SET liked = 0 WHERE item_id = $itemid AND uid = $uid");
    }
    
    if(isset($_POST["review"]) && $_POST["review"] == "comment"){

    }
?>