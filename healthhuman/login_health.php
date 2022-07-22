<?php
session_start();
include("conn.php");
if (isset($_POST['submit'])) {
    $id = $_POST['userid'];
    $pass = $_POST['pass'];
    $sql = "SELECT * from seat_booked where (id='$id')";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // print_r($row);
            $hash_password = $row['password'];
            $name=$row['Name'];
            // header("Location:video.php");
            // $_SESSION['id'] = $id;
            // $_SESSION['loginin'] = 1;
            
        }
    } else {
        echo "User Doesnot Exist";
        $_SESSION['loginin'] = 0;
        exit(0);
    }


    if (password_verify($pass, $hash_password)) {
        $_SESSION['id'] = $id;
        $_SESSION['password'] = $hash_password;
        $_SESSION['Name']=$name;
        $_SESSION['loginin'] = 1;
        header("Location:video.php");
    } else {
        echo "Invalid Criedntials";
        $_SESSION['loginin'] = 0;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video for Health</title>
    <style>
        body{
            background-image:url("https://images.pexels.com/photos/255501/pexels-photo-255501.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
        }
        .logo {
            width: 4rem;
            height: 4rem;
            margin-top: 0rem;
            margin-right: 1rem;
        }

        form {
            width: 25rem;
            margin: 0% auto;
            margin-top: 3rem;

            width: 35rem;
            border-radius: 10px;  
        }

        .footer {
            background-color: #343a40;
            height: 4rem;
            margin-top: 8.7rem;
        }

        .footer h4 {
            color: white;
            position: relative;
            top: 1rem;
            text-align: center;

        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="images/logo.png" alt="" class="logo">
        <a class="navbar-brand" href="index.php" style="font-size:2rem; font-weight: bold;">Healthy Human</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="tips_for_healthy.php">Tips for Healthy Life</a>
        <a class="nav-item nav-link active" href="book_session.php">Book Appointment<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="login_health.php">Login</a> 
        <a class="nav-item nav-link" href="contact.php">Contact Us</a>

            </div>
        </div>
    </nav>
    <div class="container my-3">
        <!-- <h2 style="text-align: center; text-decoration:underline; color:red;">Online - Session Video</h2>
        <p>Thank you for your interest in our online sessions. In an effort to keep providing support, <a href="index_2.html"><em><u>Healthy Human</u></em></a> are running online sessions on <em><u> How to Remain Healthy & Fit</u></em>. These online sessions are currently limited to 100 participants per session but this may increase as we evaluate the demand. Please see the registration options below to sign up. Online sessions are delivered in a Webinar format meaning your microphone and camera will be disabled throughout, ensuring the protection of your privacy. Please note, these sessions are suitable for those aged 16 and above. If not Register for Session
        <a href="book_session.php">Click Here to Register</a></button>. -->
    </p>
        
    <form action="login_health.php" method="post">
            <h2 style="text-align: center; color:white; text-shadow:2px 2px 2px black;">Login</h2>
            <div class="form-group">
                <label for="userid" style="text-shadow:2px 2px 2px black; color:white;">User-Id:</label>
                <input type="text" class="form-control" name="userid" id="userid" required>
            </div>
            <div class="form-group">
                <label for="pass" style="text-shadow:2px 2px 2px black; color:white;">Password:</label>
                <input type="password" class="form-control" name="pass" id="pass" required>



            </div>
            <br>


            <input type="submit" name="submit" value="Login" class="btn btn-success">
            <input type="reset" name="submit" value="Cancel" class="btn btn-danger">

        </form>
    </div>

    <div class="container-fluid footer">
        <h4>@Copyright 2022 by PRANAV MALPANI</h4>
    </div>

</body>

</html>