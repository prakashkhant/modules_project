<?php

class DB{
    public $sname = "localhost";
    public $uname = "root";
    public $password = "";
    public $db_name = "nexushub";
    public $conn;

    function connect_DB(){
        $this->conn = mysqli_connect($this->sname, $this->uname, $this->password, $this->db_name);
        if (!$this->conn) {
           echo "connection failed !";
           return false;
        }
        return true;
    }

    function populate_programming_lang_blogs(){
        if($this->connect_DB()){
            $query = "SELECT * FROM `prog_lang`";
            $result = mysqli_query($this->conn, $query);
            $data = [];
            while ($row = mysqli_fetch_array($result)) {
                array_push($data,$row);
            }
            return $data;
        }
    }

    function populate_programming_lang_desc($pid){
        if($this->connect_DB()){
            $query = "SELECT * FROM `prog_lang` WHERE `prog_id`= ".$pid;
            
            $result = mysqli_query($this->conn, $query);
            $ldata = [];
            while ($row = mysqli_fetch_array($result)) {
                array_push($ldata,$row);
            }
            return $ldata;
        }
    }
}





  

?>