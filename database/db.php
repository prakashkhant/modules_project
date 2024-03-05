<?php

class DB
{
    public $sname = "localhost";
    public $uname = "root";
    public $password = "";
    public $db_name = "nexushub";
    public $conn;
    // checking session if not present not access any pages
    function session_check()
    {
        session_start();
        if (empty($_SESSION['username']) || $_SESSION['username'] == '') {
            header("Location: login_regs.php");
            die();
        }
    }
    // login button :checking session for dashboard redirect
    function login_dashboard()
    {

        if (empty($_SESSION["username"]) || $_SESSION["username"] == '') {
            echo " <button class='btn btn-primary'><a href='login_regs.php'>Join Me !</a></button>";
        } else if ($_SESSION["username"]=="admin"){
            echo " <button class='btn btn-primary'><a href='admin_dashboard.php'>" . $_SESSION["username"] . "!</a> </button>";
        }
        else {

            echo " <button class='btn btn-primary'><a href='dashboard.php'>" . $_SESSION["username"] . "!</a> </button>";
        }
    }
    function connect_DB()
    {
        $this->conn = mysqli_connect($this->sname, $this->uname, $this->password, $this->db_name);
        if (!$this->conn) {
            echo "connection failed !";
            return false;
        }
        return true;
    }
    function fetchData($query)
    {

        $result = mysqli_query($this->conn, $query);
        $ldata = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($ldata, $row);
        }
        return $ldata;
    }
    function fetch_items_by_module($mid)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` WHERE `module_id`=$mid ORDER BY `id` DESC";

            return $this->fetchData($query);
        }
    }
    function fetch_random_items_by_module($mid)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` WHERE `module_id`=$mid ORDER BY RAND()
            LIMIT 99";

            return $this->fetchData($query);
        }
    }

    function populate_item_content($pid)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` WHERE `id`= " . $pid;
            // return $query;
            return $this->fetchData($query);
        }
    }
    function find_category_name($cid)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `category` WHERE `cat_id`= " . $cid;

            return $this->fetchData($query);
        }
    }
    function find_module_name_byId($mid)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `modules` WHERE `mid`= " . $mid;

            return $this->fetchData($query);
        }
    }

    function fetch_items_list($cid)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` WHERE `category`= " . $cid;

            return $this->fetchData($query);
        }
    }

    function fetch_category_list($id)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `category` WHERE `mid`= " . $id;
            return $this->fetchData($query);
        }
    }

    function fetch_modules_list()
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `modules`";
            return $this->fetchData($query);
        }
    }


    function fetch_all_user_items($uname)
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` WHERE `publish_by`='$uname' ORDER BY `id` desc";
            return $this->fetchData($query);
        }
    }
    function fetch_all_items()
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` ORDER BY `id` desc";
            return $this->fetchData($query);
        }
    }
    function count_rows_table($tb_name)
    {
        if ($this->connect_DB()) {
            $query = "SELECT count(*) FROM `$tb_name`";
            return $this->fetchData($query);
        }
    }
    // login function
    function login_user()
    {

        if ($this->connect_DB()) 
        {
            try{
            if (isset($_POST['uname']) && isset($_POST['pass'])) {
                function validate($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $uname = validate($_POST['uname']);
                $pass = validate($_POST['pass']);
                if($uname=="admin" && $pass=="xt9"){
                    $_SESSION['username'] ="admin";
                        // $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = 0;

                        header("Location: admin_dashboard.php");

                        exit();
                }


                $sql = "SELECT * FROM userdetails WHERE username='$uname' AND password='$pass'";
                $result = mysqli_query($this->conn, $sql);
                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);

                    if ($row['username'] === $uname && $row['password'] === $pass) {
                        $_SESSION['username'] = $row['username'];
                        // $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['uid'];

                        header("Location: index.php");

                        exit();
                    } else {
                        echo '<script type="text/JavaScript">alert("username or password incorrect"); 
                    </script>';
                        exit();
                    }
                } else {
                    echo '<script type="text/JavaScript">alert("username or password incorrect");window.location = "login_regs.php";</script>';
                    // header("Location:login_regs.php");
                    exit();
                }
            } else {
                header("Location:login_regs.php");
                exit();
            }

        }catch(Exception $et){
            echo "<script type='text/JavaScript'>alert(".$et.");window.location = 'login_regs.php';</script>";
        }
    }}
    function sign_up()
    {
        if ($this->connect_DB()) {

            if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
             {
            $uname = $_POST["username"];
            $email = $_POST["email"];
            $pass = $_POST["password"];
           
            $sl = "SELECT * FROM userdetails WHERE username='$uname' AND password='$pass'";
            $result = mysqli_query($this->conn, $sl);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($row['username'] === $uname){
                    echo "<script type='text/JavaScript'>alert('user already exit')</script>";
                    exit;

                }}
            $sql = "INSERT INTO userdetails (username,password,email) VALUES('$uname','$pass','$email')";
            //echo $sql;
            if (mysqli_query($this->conn, $sql)) {
                echo "<script type='text/JavaScript'>alert('successfull')</script>";
                // header("Location: login_regs.php");

                exit();
            } else {
                echo "error detected";
            }
        } else {
            echo "error detected";
        }}
    }

    // database actions    

    function add_item()
    {
        if ($this->connect_DB()) {
            $title = $_POST["tbTitle"];
            $desc = $_POST["tdDescription"];
            $mod_id = $_POST["module-name"];
            $cat_id = $_POST["cat-name"];
            $content = $_POST["tdContentArea"];
            $pub_by = $_POST["tbPublishBy"];
            $pub_date = date("Y-m-d");
            $photo = $_POST["photopath"];
            $video = $_POST["tbvideopath"];
            $test_link = $_POST["tbTestLink"];
            $keywords = $_POST["tbKeywords"];
            $time_dur = $_POST["hours"] . ":" . $_POST["minutes"] . ":" . $_POST["seconds"];

            $sql = "INSERT INTO `item` (title,description,content,photopath,videopath,test_link,publish_by,publish_date,module_id,category,keywords,time)
     VALUES ('$title','$desc','$content','$photo','$video','$test_link','$pub_by','$pub_date',$mod_id,$cat_id,'$keywords','$time_dur')";


            if (mysqli_query($this->conn, $sql)) {
                $s= "successfull";
                
                return true;

                exit();
            } else {
                echo "error detected";
                return false;
            }
        }
    }
    // $title,$desc,$content,$photo,$video,$test_link,$pub_by,$pub_date,$mod_id,$cat_id,$keywords,$time_dur
    function delete_item($id)
    {
        if ($this->connect_DB()) {
            $sql = "DELETE FROM `item` WHERE id=" . $id;
            // return $sql;
            if (mysqli_query($this->conn, $sql)) {
                echo "Record deleted successfully";
                header("Location: dashboard.php");
            } else {
                echo "Error deleting record: " . mysqli_error($this->conn);
            }
        }
    }
   
    //review table : like comment : 
    function review_lcs(){
        if ($this->connect_DB()) {
            if(isset($_POST["review"]) && $_POST["review"] == "like"){
                $itemid = $_POST["item"];
                $uid = $_POST["user"];
                
                $res = mysqli_query($this->conn, "INSERT INTO review(comment, liked, item_id, uid) VALUES('', 1, $itemid, $uid)");
            }
        
            if(isset($_POST["review"]) && $_POST["review"] == "unlike"){
                $itemid = $_POST["item"];
                $uid = $_POST["user"];
        
                $res = mysqli_query($this->conn, "UPDATE review SET liked = 0 WHERE item_id = $itemid AND uid = $uid");
            }
            
            if(isset($_POST["review"]) && $_POST["review"] == "comment"){
        
            }
        }
    }
}
