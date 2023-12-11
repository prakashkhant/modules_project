<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="cpassword" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">
          <input type="radio" name="gender" value="none" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="log-in">
          <span>
            Are you already registered ?
          </span>
          <a href="log_in.php"><span>Log in</span></a>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  
  include 'db_conn.php';

  $fname=$_POST["fullname"];
  $uname=$_POST["username"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $pass=$_POST["password"];
  $cpass=$_POST["cpassword"];
  $gender=$_POST["gender"];
  
  // echo " .$fname .$uname. $email . $phone .$pass . $cpass.$gender";

  $sql="INSERT INTO userdetails VALUES('$uname','$fname','$pass','$email',$phone,'$gender')";
  //echo $sql;
  if(mysqli_query($conn,$sql))
  {
    echo "successfull";
    header("Location: index.php");
    exit();
  }
  else{
    echo "error deteced";
  }
}






?>