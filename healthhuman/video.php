<?php
session_start();
include("conn.php");
if ((isset($_SESSION['id'])) && ($_SESSION['loginin'] == 1)) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Video for Health</title>
        <style>
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
                margin-top: 6.4rem;
            }

            .footer h4 {
                color: white;
                position: relative;
                top: 1rem;
                text-align: center;

            }

            video {
                margin: 0% auto;
                display: block;
                margin-top: 1rem;
                /* border: 5px solid black; */
                padding: 1rem;
                border-radius: 50px;

            }

            .video p {
                background-color: black;
                color: navajowhite;
                width: 350px;
                text-align: center;
                padding: 0.5rem;
                margin: 0% auto;
                margin-top: 1rem;
                font-weight: bold;
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
                    <!-- <a class="nav-item nav-link" href="grid.html">Tips for Healthy Life</a>
                    <a class="nav-item nav-link active" href="book_session.php">Book Appointment<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="contact.html">Contact Us</a> -->
                    <a class="nav-item nav-link" href="logout.php">Logout , <em><u><?php
                                                                                    echo $_SESSION['Name'];
                                                                                    ?></u></em></a>



                </div>
            </div>
        </nav>
        <div class="container my-3">

            <h1 style="text-align: center; text-decoration: underline; color: red;">7 Days Session Video</h1>
            <p style="text-align: center; font-weight: bold;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore. Cum modi quia sint accusamus magnam vel sapiente beatae ipsa molestias culpa incidunt porro at laboriosam aliquid provident dolor totam quo distinctio, inventore odit aliquam quisquam minus quibusdam alias. Quasi culpa molestiae praesentium illum. Eius tenetur vel fuga odit, sed soluta optio velit molestiae quisquam quasi, laborum rem quas illum iusto cum. Sint dolor voluptas fuga adipisci eius unde nemo aliquid repellendus aspernatur illo cupiditate praesentium, doloribus sed esse voluptatibus id vitae, quo quis cumque consequuntur repellat repudiandae vel. Ut a at voluptatem quibusdam voluptates esse ducimus dicta illo enim.</p>

            <p><em>" Healthy Minds,Grow Faster "</em></p>
            <div class="row video">
                <?php
                if ($con) {
                    $sql = "SELECT `Day`, `Folder_name`, `File_name` FROM `session_video`";
                    $result = mysqli_query($con, $sql);
                    // print_r($result);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // print_r($row);
                            // echo 'admin/'$row["Folder_name"] . $row["File_name"];

                ?>


                            <div class="col-md-3 offset-md-2">
                                <p><?php echo $row["Day"] ?></p>
                                <video width="350px" height="240" controls>
                                    <source src="admin/session_video/<?php echo $row['File_name']?>" type="video/mp4">

                                </video>
                            </div>
                            <?php
                        }
                            ?>
                        
                    <?php
                    }
                }


                    ?>

</div>


                    <!-- 
                <div class="col-md-3 offset-md-4">

                    <p>Day-2</p>

                    <video width="350" height="240" controls>
                        <source src="video/4. PHP Syntax.mp4" type="video/mp4">
                    </video>
                </div>


            </div>

            <div class="row video">
                <div class="col-md-3">
                    <p>Day-3</p>
                    <video width="350" height="240" controls>
                        <source src="video/1. PHP Introduction.mp4" type="video/mp4">

                    </video>

                </div>
                <div class="col-md-3 offset-md-4">

                    <p>Day-4</p>

                    <video width="350" height="240" controls>
                        <source src="video/4. PHP Syntax.mp4" type="video/mp4">
                    </video>
                </div>

            </div>

            <div class="row video">
                <div class="col-md-3">
                    <p>Day-5</p>
                    <video width="350" height="240" controls>
                        <source src="video/1. PHP Introduction.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-3 offset-md-4">

                    <p>Day-6</p>

                    <video width="350" height="240" controls>
                        <source src="video/4. PHP Syntax.mp4" type="video/mp4">
                    </video>
                </div>

            </div>

            <div class="row video">
                <div class="col-md-3">
                    <p>Day-7</p>
                    <video width="350" height="240" controls>
                        <source src="video/1. PHP Introduction.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-3 offset-md-4">

                    <p>Day-8</p>

                    <video width="350" height="240" controls>
                        <source src="video/4. PHP Syntax.mp4" type="video/mp4">
                    </video>
                </div>
 -->
            

        </div>

        <div class="container-fluid footer">
            <h4>@Copyright 2022 by PRANAV MALPANI</h4>
        </div>

    </body>

    </html>

<?php
} else {
    header("Location:login_health.php");
}
?>