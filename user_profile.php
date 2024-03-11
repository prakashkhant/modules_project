<?php
// include 'layouts/top.php';
include 'database/db.php';
$db = new DB();
// $uid=$_GET['uid'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(images/about-bg.jpg) ;
            background-size: cover;
            background-position: center;
            /* opacity: 0.7; */
            /* filter: blur(10px); */
        }
        

        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 86, 0, 1);
            background-image: url(images/about-bg.jpg);
            background-size: cover;
            background-position: center;
            position: relative;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 7px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        .upload-btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .upload-btn:hover {
            background-color: #0056b3;
        }

        .profile-photo {
            display: block;
            width: 150px;
            height: 150px;
            margin: auto;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .user-img {
            display: block;
            width: 80px;
            height: 80px;
            margin: auto;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Profile</h1>
        <img src="user-animation.gif" alt="User Animation" class="user-img">
        <form>
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" readonly value="johndoe123">
            </div>
            <div class="mb-3">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="tdPassword">Password:</label>
                <input type="text" id="tdPassword" name="tdPassword" readonly value="johndoe123">
            </div>
            <div class="mb-3">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="profilePhoto">Profile Photo:</label>
                <input type="file" id="profilePhoto" name="profilePhoto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger">Delete Account</button>
        </form>
    </div>
</body>

</html>