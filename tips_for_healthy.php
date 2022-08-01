<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/tips_page.css"> -->
    <style>
        body {
            margin: 0%;
            padding: 0%;
            background-image: url('imageonline-co-blurimage.png');
            background-size: cover;
            background-position: center;
        }

        html {
            font-size: 90%;
        }

        header {

            background-color: rgb(16, 4, 61);
            color: aliceblue;
            display: flex;
            flex-direction: row;

        }

        .heading {
            /* margin-left: 2rem;
    text-align: center; */
            margin: 0 auto;
            color: red;
            text-align: center;
            text-decoration: underline;
            text-decoration-color: black;
        }

        .Logo {
            width: 8rem;
            height: 8rem;
            margin-top: 1rem;
        }

        .admin_button {
            background-color: red;
            color: white;
            font-weight: bold;
            border-radius: 0.4rem;
            margin-bottom: 1rem;
            padding: 0.3rem 0.5rem;

        }

        .admin_button a {
            text-decoration: none;
        }

        .admin_button a:hover {
            background-color: yellow;
            color: red;
            padding: 0.5rem 1rem;
        }

        a {
            color: yellow;
        }

        article {
            background-color: rgb(240, 204, 150);
            margin-left: 5rem;
            margin-right: 5rem;
            padding: 1rem;

        }
        .logo {
    width: 4rem;
    height: 4rem;
    margin-top: 0rem;
    margin-right: 1rem;
}

        article h1 {
            text-align: center;
            color: red;
        }

        .tips {
            display: grid;
            grid-template-columns: auto auto;
            margin-left: 8rem;



        }

        .block {
            border: 2px solid black;
            width: 15rem;
            background-color: blanchedalmond;
            margin-top: 1rem;
            border-radius: 1rem 2rem;
            padding: 0.5rem;
            display: flex;
            flex-direction: row;
        }

        .block_img {
            width: 5rem;
            height: 5rem;
            margin-top: 1rem;
            margin-right: 1rem;
        }

        .footer {
            background-color: #343a40;
            height: 4rem;
            margin-top: 2.7rem;
        }

        .footer h4 {
            color: white;
            position: relative;
            top: 1rem;
            text-align: center;
          
        }
        .block:hover{
            border: 5px solid navy;
        }
        @media(max-width:350px) {
            .block_data h1{
                font-size: 1.5rem;
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



    <div class="container">
        <h1 class="container p-2 my-3 heading">Tips for Healthy Life</h1>
        <p style="font-weight:bold;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptates et nemo eius consequuntur eaque vel suscipit similique reprehenderit, cum quibusdam tenetur quod doloremque exercitationem illo soluta consequatur a! Quisquam doloremque sunt adipisci velit neque, dicta in praesentium eum quis dolore soluta fugiat voluptate impedit non voluptatum natus. Voluptatem ducimus vel perspiciatis expedita non voluptates deleniti iste quisquam cum eveniet voluptatum officia eius, eligendi, iure nemo quibusdam recusandae, culpa iusto tenetur voluptatibus alias suscipit dicta quis provident! Ipsam nesciunt exercitationem quisquam, non optio repellat asperiores aliquam excepturi, tempora consequatur eius rerum maxime, deleniti cupiditate minus voluptate impedit. Molestiae, soluta doloribus.</p>
        <div class="row">
            <div class="col-md-5  block">
                <img src="images/touch.png" alt="" class="block_img">
                <div class="block_data">
                    <h1>Don't Touch</h1>
                    <p>Keep your hands off any possible grems-infected surface</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 block">

                <img src="images/wash.jpg" alt="" class="block_img">
                <div class="block_data">
                    <h1>Wash Up</h1>
                    <p>Proper Hand washing is important to prevent from any germs</p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-5 block">
                <img src="images/meditation.jpg" alt="" class="block_img">
                <div class="block_data">
                    <h1>Stop Stressing</h1>
                    <p>Stress not only negatively affect your mental health but physical health too.</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 block">

                <img src="images/water.jpg" alt="" class="block_img">
                <div class="block_data">
                    <h1>Fundamental Fluids</h1>
                    <p>Drink up! Downing 8-ounce glasses of water</p>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-5 block">
                <img src="images/eatwell.png" alt="" class="block_img">
                <div class="block_data">
                    <h1>Eat Well</h1>
                    <p>Your Food choice impact your immune system</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 block">

                <img src="images/antioxidant.jpg" alt="" class="block_img">
                <div class="block_data">
                    <h1>Antioxidants</h1>
                    <p>Keeping you healthy are vitamin A,C and E</p>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-5 block">
                <img src="images/exercise.jpg" alt="" class="block_img">
                <div class="block_data">
                    <h1>Get Fit</h1>
                    <p>People Who Exercise regularly are less likely to get sick</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 block">

                <img src="images/sleep.jpg" alt="" class="block_img">
                <div class="block_data">
                    <h1>Sound Sleep</h1>
                    <p>Get the Eight Hours of Sleep at night</p>
                </div>

            </div>
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