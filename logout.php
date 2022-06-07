<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;

?>


<?php 
session_start();

	include("connection.php");
$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT * FROM farmers ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Poultries</h1>
        <table>
            <tr>
                <th>Farmer Name</th>
                <th>Poultry Name</th>
                <th>Location</th>
                <th>Phone Number</th>
                <th>Image</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Poultry Name'];?></td>
                <td><?php echo $rows['Poultry Address'];?></td>
                <td><?php echo $rows['Phone Number'];?></td>
                <td><?php 
$image=$rows['image'];
print"<img src=\"$image\" width=\"100px\" height=\"100px\"\/>";
?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
 
</html>