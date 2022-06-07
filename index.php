
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
        }
 
        h1 {
            text-align: center;
            color: white;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color:white;
            
        }
 
        th
        {
            font-weight: bold;
            color:white;
            
        }
        
        td {
            color:black;
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
        #abc{
            text-align: right;
        }
        body
        {
            background-color:lightsalmon ;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Poultries</h1>
        <table style="width:50%">
        <tr id="abc"><td style="bgcolor:lightsalmon"><a href="login.php"><input type="button" value="Update Info" style="float: right;"></a></td></tr>
    </table>
        <table style="width:50%" class="table1">
            <tr>
                <th>Poultry Image</th>
                <th>Poultry Details</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
                    <tr>
                        <td><?php 
$image=$rows['image'];
print"<img src=\"$image\" width=\"100px\" height=\"100px\"\/>";
?>
    </td>
                    <td> 
                    Farmer Name : <?php echo $rows['Name'];?>
                <br>Poultry Name: <?php echo $rows['PoultryName'];?>
                <br>Poultry Address : <?php echo $rows['PoultryAddress'];?>
                <br>Contact : <?php echo $rows['PhoneNumber'];?>
                <br>Availability : <?php echo $rows['availability'];?>
                </td>
                    </tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
            <?php
                }
             ?>
        </table>
    </section>
</body>
 
</html>