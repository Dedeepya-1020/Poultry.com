<?php

$phone = $_POST['Phone'];
$avail= $_POST['req'];

if (!empty($phone)) {
    //save to database
    //$user_id = random_num(20);
    $query = "update traders set requirement = '$avail' where phone = '$phone';";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "poultries";
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    mysqli_query($con, $query);

    header("Location: traderindex.php");
    die;
} else {
    echo "Please enter some valid information!";
}
?>