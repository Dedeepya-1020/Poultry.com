<?php 

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $ish=0;
		$phone = $_POST['Phone'];
		$password = $_POST['Password'];
		if(!empty($phone) && !empty($password))
		{
			//read from database
			$query = "select * from farmers where PhoneNumber = '$phone'";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] !== $password)
					{

						//$_SESSION['user_id'] = $user_data['user_id'];
                        $ish=1;
						
						echo '<script>alert("wrong username or password")</script>';
                        header("Location: login.php");
					}
				}
			}
			
			
		}else
		{
			echo "wrong username or password!";
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
    
    <?php  $query = "select * from farmers where PhoneNumber = '$phone'";
			$result = mysqli_query($con, $query); ?>
    <?php $res=$result->fetch_assoc() ?>
        <div class="box1">
        <div class="image">
        <?php 
$image=$res['image'];
print"<img src=\"$image\" width=\"300px\" height=\"300px\"\/>";
?></div>
</div>
		<div class="box">
            <h2>
                <p style="font-family:'Times New Roman', Times, serif;font-size:40px">Details</p><br>
    Name : <?php echo $res['Name'];?>
    <br>Poultry Name: <?php echo $res['PoultryName'];?>
                <br>Address : <?php echo $res['PoultryAddress'];?>
                <br>Phone Number : <?php echo $res['PhoneNumber'];?><br>
                <form action="update.php" method="post">
    <div>
        <br>
                    <p ><label style="font-family:'Times New Roman', Times, serif" for="Phone">Phone Number</label></p>
                    <input type="text" id="text" name="Phone" required>
                </div>
            <div>
                    <p><label style="font-family:'Times New Roman', Times, serif" for="avail">Availability of hens:</label></p>
                    <input type="text" id="text" name="avail" required>
                </div>
                <input id="button" type="submit" value="Update">
    </form>
</h2>
</div>
        
</body>
</html>