<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$database = "healthy_human";

$conn = mysqli_connect($hostname, $username, $password, $database);
if ($conn) {

    if (isset($_POST["submit"])) {
        $name = $_POST["inputname"];
        $email = $_POST["inputEmail"];
        $id = $_POST["inputid"];
        $pass = $_POST["inputpass"];
        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql4 = "SELECT `Name`, `Emailid` FROM `seat_booked` WHERE ((`Name`='$name')||(`Emailid`='$email'))";
        $result4 = mysqli_query($conn, $sql4);
        if (mysqli_num_rows($result4) == 0) {


            $sql = "INSERT INTO `seat_booked`(`Name`, `Emailid`, `id`, `password`) VALUES ('$name','$email','$id','$hash_pass')";
            $sql2 = "SELECT `number` FROM `seat`";
            $result = mysqli_query($conn, $sql);
            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
                if (mysqli_num_rows($result2) > 0) {
                    while ($row2 = mysqli_fetch_assoc($result2)) {

                        $seats_booked = $row2["number"];
                        $new_seat = $seats_booked + 1;
                    }
                }
            }
            if ($result) {
                $sql3 = "UPDATE `seat` SET `number`='$new_seat'";
                $result3 = mysqli_query($conn, $sql3);
                header("Location:book_session.php");
            }
        }
    }
    else{
        echo "User Already registered";
    }
}
