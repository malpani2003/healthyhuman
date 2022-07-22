<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .logo {
            width: 4rem;
            height: 4rem;
            margin-top: 0rem;
            margin-right: 1rem;
        }

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
        textarea {
            font-weight: bold;
            border-radius: 20px;

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

        @media(max-width:430px) {
            .logo {
                display: none;
            }
        }
        @media(max-width:767px) {
            .box{
                margin-top: 1rem;
            }
            
        }
        .box{
            background-color: #343a40;
            color: whitesmoke;
            border-radius: 10px;
            text-align: center;
        }
        .box h6{
            margin-top: 1rem;
            text-decoration:underline;
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
        <div class="row my-5 mx-5">
            <div class="col-md-3 box">
             <h6>Address</h6>
             <p>Healthy Human,Near Shivaji Park,Jaipur-30215</p>
            </div>
            <div class="col-md-3 offset-md-1 box">
                <h6>Phone-No:</h6>
             <p>9602209867 <br>9636328262</p>
            </div>
            <div class="col-md-3 offset-md-1 box">
                <h6>Office Timing</h6>
                <p>10 A.M.-5 P.M <br>(Sunday Off)</p>
            </div>
        </div>
    </div>


        <form class="container my-5 p-3" method="post" action="book.php">

            <h1>Contact us</h1>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputname">Name</label>
                    <input type="text" class="form-control" id="inputname" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="150" rows="4"
                        placeholder="Message"></textarea>
                </div>
            </div>



            <!-- <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div> -->

            <!-- <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputstate">State</label>
        <input type="text" class="form-control" id="inputCity" placeholder="State">
      </div>


      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" placeholder="City">
      </div>


    </div> -->
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Do You Confirm
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>


        <div class="container-fluid footer">
            <h4>@Copyright 2022 by PRANAV MALPANI</h4>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>