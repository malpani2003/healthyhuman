<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$database = "healthy_human";

$conn = mysqli_connect($hostname, $username, $password, $database);
if($conn)
{
    $sql="SELECT * FROM seat";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                if($row["number"]==100){
                    $Canbook=0;
                }
                else{
                  $Canbook=1;
                }
            }
        }
      
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form {
      border: 2px solid black;
      border-radius: 10px;
      background-color: blanchedalmond;

    }

    form h1 {
      text-align: center;
    }

    input[type="email"],
    input[type="password"],
    input[type="text"],
    select,
    option {
      font-weight: bold;
      border-radius: 20px;

    }

    .footer {
      background-color: #343a40!important;
      height: 4rem;
      margin-top: 2.7rem;
    }

    .footer h4 {
      color: white;
      position: relative;
      top: 1rem;
      text-align: center;

    }

    .block {
      border: 2px solid black;
      /* background-image: linear-gradient(145deg,navy,black); */
      background-color: blanchedalmond;
      color: rgb(9, 2, 54);
      text-align: center;
      border-radius: 20px;


    }

    .box {
      /* background-image: linear-gradient(145deg,navy,black); */
      background-color: #343a40;
      color: rgb(255, 255, 255);
      text-align: center;
      border-radius: 20px;
    }

    .row h1 {
      
      margin-top: 20px;
      color: red;
      text-align: center;
      text-decoration: underline;
      text-decoration-color: black;
    }
    .logo {
    width: 4rem;
    height: 4rem;
    margin-top: 0rem;
    margin-right: 1rem;
}
.article_img{
  border-radius: 10px 20px;
}
.row div{
  background-color: aquamarine;
  margin-top: 1rem;
  text-align: center;
  border: 2px solid navy;
  
}
@media(max-width:430px) {
  .logo{
    display:none;
  }
  
}
.show_form{
  background-color:blanchedalmond;
  color: black;
  text-shadow: 1px 1px 1px navy;
  text-align: center;
  height: 4rem;
 
}

  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="images/logo.png" alt="" class="logo">
    <a class="navbar-brand" href="index.php" style="font-size:2rem; font-weight: bold;">Healthy Human</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
  <?php

  
  ?>
  <div class="container">
    <div class="row">
      <h1>Book Online Session</h1>
      <p  style=" font-weight: bold;">Thank you for your interest in our online sessions. In an effort to keep providing support, <a href="index_2.html"><em><u>Healthy Human</u></em></a> are running online sessions on <em><u> How to Remain Healthy & Fit</u></em>. These online sessions are currently limited to 100 participants per session but this may increase as we evaluate the demand. Please see the registration options below to sign up. Online sessions are delivered in a Webinar format meaning your microphone and camera will be disabled throughout, ensuring the protection of your privacy. Please note, these sessions are suitable for those aged 16 and above. If not Register for Session
        <a href="#form">Click Here to Register</a></button>.
      <!-- <p style="text-align: center;">Here you can learn all about our online workshops, what you will learn, and how they can help you in your everyday lives
      </p> -->
    </div>
    <h2 style="text-align:center; margin-top: 10px; color:green; text-decoration:underline;">Features of Online Session</h2>
    <!-- <div class="row">
      <ul class="col-md-4 offset-md-2">
        <li>Session will be on ZOOM / Google Meet</li>
        <li>Recording of Session Will be Provided</li>
        <li>Session Will Free</li>
      </ul>
      <ul class="col-md-6">
        <li>Session Will Free</li>
        <li>Recording of Session Will be Provided</li>
        <li>Link will Be Provided Through Email-id</li>

      </ul>
    </div> -->

  </div>


  <!-- <div class="container">
    <div class="row my-5 mx-5">
      <div class="col-md-3 my-2 pt-1 image_box" >
        <img src="images/digitalhealthcare.jpg" class="article_img" alt="" >
      

      </div>
      <div class="col-md-3 offset-md-1 my-2 pt-1 image_box">
        <img src="images/digitalhealthcare.jpg" class="article_img"  alt="" >


      </div>
      <div class="col-md-3 offset-md-1 my-2 pt-1 image_box">
        <img src="images/digitalhealthcare.jpg"  class="article_img"alt="">


      </div>
    </div>
  </div> -->

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-1">
        <h4><i class='fas fa-caret-square-right'></i> How do I download Zoom?</h4>
        <p>You can download zoom ahead of a workshop via the zoom downloads page located here: Download. For mobile & tablet devices, please see your relevant app store.</p>
      </div>

      <div class="col-md-4 offset-md-2">
        <h4><i class='fas fa-caret-square-right'></i> Do I need a camera & a micrphone to join?</h4>
        <p>You can download zoom ahead of a workshop via the zoom downloads page located here: Download. For mobile & tablet devices, please see your relevant app store.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 offset-md-1">
        <h4><i class='fas fa-caret-square-right'></i> Are your workshops free?</h4>
        <p>Yes. Healthy Human is a charity that offers free mindfulness and wellbeing courses .During the Covid-19 outbreak we are currently only delivering online, but plan to return to the community sometime in the future.</p>
      </div>

      <div class="col-md-4 offset-md-2">
        <h4><i class='fas fa-caret-square-right'></i> How do I register for your workshops?</h4>
        <p>All of our upcoming workshops can be viewed on our online-session page. You only need to click the register button on a workshop you are interested in and complete the registration form. Ensure to check your email inbox for an email confirmation after registration.</p>
      </div>
    </div>
  </div>

  

 <?php
   if($Canbook==1){
    echo '<form class="container my-5 p-3" method="post" action="check.php" id="form">


    <div class="container box">
      <h2>Session Will be Onward 4-July-2022 (Monday) to 10-July-2022 (Sunday)</h2>
      <h3>Timing : 10:00 A.M.</h3>

    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputname">Name</label>
        <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
      </div>

    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputid">Id</label>
        <input type="text" class="form-control" id="inputid" name="inputid" placeholder="User-Id">
      </div>


      <div class="form-group col-md-6">
        <label for="inputpass">Password</label>
        <input type="text" class="form-control" id="inputpass" name="inputpass" placeholder="Password">
      </div>


    </div>
    <!-- <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Do You Confirm
        </label>
      </div>
    </div> -->
    <button type="submit" name="submit" class="btn btn-primary">Book Seat</button>
  </form>

    
    ';
  }

  else{
    echo "
    <div class='container my-5 show_form'>
    <h4>Cannot Register of Session , Seats are full</h4>
  </div>";
    
  }
 ?>
  
  <div class="container-fluid footer">
    <h4>@Copyright 2022 by PRANAV MALPANI</h4>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>