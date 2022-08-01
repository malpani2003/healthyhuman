<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Human</title>
    <style>
      .page{
        background-color: blanchedalmond;
      }
    .logo {
    width: 4rem;
    height: 4rem;
    margin-top: 0rem;
    margin-right: 1rem;
}
.heading{
    text-align: center;
    font-family:cursive;
}
.color_box1{
    color: yellow;
    animation: changecolor 3s infinite;

}
.color_box2{
    color: rgb(3, 255, 234);
    animation: changecolor1 3s infinite;
}

@keyframes changecolor1 {
    0%{
        color:rgb(255, 3, 3);
    }
    100%{
        color:rgb(53, 10, 160);
    }
    
}

@keyframes changecolor {
    0%{
        color:rgb(53, 10, 160);
    }
    100%{
        color: rgb(255, 3, 3);
    }
    
}
.footer {
            background-color: #343a40!important;
            height: 4rem;
            margin-top: 2rem;
        }

        .footer h4 {
            color: white;
            position: relative;
            top: 1rem;
            text-align: center;
          
        }
        .main_img{
            width:13rem;
            border-radius:100%;
            height: 13rem;
            position:center;
        }
        
        .main_para{
            /* height:10rem;
            width:25rem; */
            margin-top: 2rem;
        }
        @media(max-width:675px) {

            .main_para{
                margin-top: 2rem;
                margin-bottom: 1rem;
            }
        }
        @media(max-width:430px) {
  .logo{
    display:none;
  }
  
}

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="page">

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
   <!-- <a class="nav-item nav-link" href="admin_login.php">Admin</a> -->
        

      </div>
    </div>
  </nav>
<div class="container my-3 heading">
  
        <h1><span class="color_box1">Healthy</span><span class="color_box2"> Human</span></h1>
        <p style="font-weight:bold ;">Eat Healthy , Live Longer</span></p>
    
</div>

<div class="container my-5">
    <div class="row offset-1">
        <div class="col-md-3">
            <img src="https://images.pexels.com/photos/2597205/pexels-photo-2597205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="main_img" alt="">
            </div>

            <div class="col-md-3 offset-md-1">

            <img src="https://media.istockphoto.com/photos/senior-man-working-out-for-good-health-picture-id1135152361?k=20&m=1135152361&s=612x612&w=0&h=gFms3o8PeNtKpdZAGm70hHACA7ailZolmZATv90rysY=" alt="" class="main_img">
        </div>

        <div class="col-md-3 offset-md-1">

            <img src="https://media.istockphoto.com/photos/healthy-lifestyle-good-life-organic-food-vegetables-close-up-portrait-picture-id1151268627?k=20&m=1151268627&s=612x612&w=0&h=1BuSOkXeDQDCFhx_UndPGq7AuCwx0PQX3_dJ5_U3dzQ=" alt="" class="main_img">
        </div>
     </div>

        <div class="row" style="font-weight: bold; text-align: center;">
            <p class="main_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel at optio facilis a libero, odio amet quae obcaecati illum dignissimos. Quisquam nemo maxime dicta sit voluptatem, dolor nesciunt iusto a, doloremque beatae molestias? Voluptatem possimus eum sint, reiciendis quasi nemo provident, ad maxime amet accusamus eveniet culpa temporibus eius ex. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi voluptates reprehenderit atque voluptatum expedita quaerat perspiciatis dicta explicabo officiis tempore.</p>
           <p>Created By- Pranav Malpani</p>
           
        </div>
    
</div>
<div class="container-fluid footer">
    <h4>@Copyright 2022 by PRANAV MALPANI</h4>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>