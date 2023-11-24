<?php
$fname=$_POST["tbfname"];
$lname=$_POST["tblname"];
$password=$_POST["tbpassword"];
//echo " $fname  $lname $password";
$conn=mysqli_connect("localhost","root","","prakash");

$errors=array();
if (empty($fname)) {
    $errors[] = "First name is required.";
}
else{
    if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
        $errors[] = "Only alphabets and whitespace are allowed in first name.";  
    }
}
if (empty($lname)) {
    $errors[] = "Last name is required.";
}
else{
    if (!preg_match ("/^[a-zA-z]*$/", $lname) ) {  
        $errors[] = "Only alphabets and whitespace are allowed in last name.";  
    }
}
if (empty($password)) {
    $errors[] = "Password is required.";
}

if (count($errors) == 0) {
    echo "connected";
    $sql="INSERT INTO student (fname,lname,password) VALUES('$fname','$lname','$password')";
    
    if(mysqli_query($conn,$sql)){
        echo "record inserted";
        header('Location: login.php');
    }
    else{
        echo "not inserted"+ mysqli_error($conn);
    }
} else {

    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

if(!$conn){
    die("not connected to database" +mysqli_connect_error());
}

?>