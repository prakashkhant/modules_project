<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Hub</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login" id="login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
           
               
            <form action="#" method="post">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="uname" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" name="pass" required>
                    <label>Password</label>
                    <i class='bx bxs-lock'></i>
                </div>
                <button type="submit" name="log-in" class="btn animation" style="--i:3; --j:24;">Login
                </button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>

            </form>
        </div>
        <div class="info-text login">
            
            <h2 class="animation" style="--i:0; --j:20;"> 
            <a href="index.php">
                <img src="images/logo.png" alt="" srcset="" width="70px" height="70px" >
                </a>
                Welcome Back To Nexus Hub</h2>
        </div>


        <div class="form-box register" >
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
            <form action="#" method="post">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name="username" required>
                    <label>UserName</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="text" name="email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope-open'></i>
                </div>

                <div class="input-box animation" style="--i:20; --j:3;">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:21; --j:4;" name="sign-up">Sign Up
                </button>
                <div class="logreg-link animation" style="--i:22; --j:5;">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>


            </form>
        </div>
        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;"> 
            <a href="index.php">
                <img src="images/logo.png" alt="" srcset="" width="70px" height="70px" >
            </a>
            Welcome To Nexus Hub
        </h2>

        </div>
    </div>
    <script src="js/login_script.js"></script>
</body>

</html>

<?php

if (isset($_POST['sign-up'])) {

    include 'db_conn.php';


    $uname = $_POST["username"];
    $email = $_POST["email"];

    $pass = $_POST["password"];


    // echo " .$fname .$uname. $email . $phone .$pass . $cpass.$gender";

    $sql = "INSERT INTO userdetails (username,password,email) VALUES('$uname','$pass','$email')";
    //echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "successfull";
        header("Location: login_regs.php");

        exit();
    } else {
        echo "error deteced";
    }
}
?>

<?php
if (isset($_POST['log-in'])) {
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['pass']))
{
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $uname= validate($_POST['uname']);
    $pass=validate($_POST['pass']);

    
  
        $sql="SELECT * FROM userdetails WHERE username='$uname' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===1)
        {
            $row = mysqli_fetch_assoc($result);
           
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	// $_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                
                header("Location: dashboard.php");
                
                exit();
            }
            else{
                echo '<script type="text/JavaScript">alert("username or password incorrect"); 
                </script>';
                exit();
            }
        }
        else{
            echo '<script type="text/JavaScript">alert("username or password incorrect");window.location = "login_regs.php";</script>';
            // header("Location:login_regs.php");
            exit();
        }
    
}

else{
    header("Location:login_regs.php");
    exit();
}
}
?>
