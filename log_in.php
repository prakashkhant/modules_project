<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="./images/website_icon.png">
    <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.location("log_in.php") 
        } 
    </script>
</head>
<body>
<div class="bg"></div>
<form action="login_check.php" method="post">
    <h2>Log in</h2>
    <?php
        if(isset($_GET['error']))
        {
            ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
      <?php  }
    ?>
    <label>User name </label>
    <input type="text" name="uname" placeholder="User name"/>
    
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password" />

    <button type="submit">Log in</button>
    <div class="sign-up">
        <p>Are you new user ?<span> <a href="registration.php"> Join me !</a></span></p>
    </div>
</form>
</body>
</html>