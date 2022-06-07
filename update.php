<?php

$phone = $_POST['Phone'];
$avail= $_POST['avail'];

if (!empty($phone)) {
    //save to database
    //$user_id = random_num(20);
    $query = "update farmers set availability = '$avail' where PhoneNumber = '$phone';";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "poultries";
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    mysqli_query($con, $query);

    header("Location: index.php");
    die;
} else {
    echo "Please enter some valid information!";
}
?>