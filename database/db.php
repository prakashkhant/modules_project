<?php

class DB
{
    public $sname = "localhost";
    public $uname = "root";
    public $password = "";
    public $db_name = "nexushub";
    public $conn;

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
    function populate_programming_lang_blogs()
    {
        if ($this->connect_DB()) {
            $query = "SELECT * FROM `item` WHERE `module_id`=4";

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

    function login_user()
    {

        if ($this->connect_DB()) {

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



                $sql = "SELECT * FROM userdetails WHERE username='$uname' AND password='$pass'";
                $result = mysqli_query($this->conn, $sql);
                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);

                    if ($row['username'] === $uname && $row['password'] === $pass) {
                        $_SESSION['username'] = $row['username'];
                        // $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];

                        header("Location: dashboard.php");

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
        }
    }
    function sign_up()
    {
        if ($this->connect_DB()) {


            $uname = $_POST["username"];
            $email = $_POST["email"];
            $pass = $_POST["password"];
            // echo " .$fname .$uname. $email . $phone .$pass . $cpass.$gender";

            $sql = "INSERT INTO userdetails (username,password,email) VALUES('$uname','$pass','$email')";
            //echo $sql;
            if (mysqli_query($this->conn, $sql)) {
                echo "successfull";
                header("Location: login_regs.php");

                exit();
            } else {
                echo "error detected";
            }
        } else {
            echo "error detected";
        }
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
                echo "successfull";
                header("Location: dashboard.php");

                exit();
            } else {
                echo "error detected";
            }
        }
    }
    // $title,$desc,$content,$photo,$video,$test_link,$pub_by,$pub_date,$mod_id,$cat_id,$keywords,$time_dur
    function delete_item($id){
        if ($this->connect_DB()) {
        $sql="DELETE FROM `item` WHERE id=".$id;
        // return $sql;
        if (mysqli_query($this->conn, $sql)) {
            echo "Record deleted successfully";
            header("Location: dashboard.php");
          } else {
            echo "Error deleting record: " . mysqli_error($this->conn);
          }
    }
}
}
