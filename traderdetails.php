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
			$query = "select * from traders where phone = '$phone'";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] !== $password)
					{

						//$_SESSION['user_id'] = $user_data['user_id'];
                        $ish=1;
						
						echo '<script>alert("wrong username or password")</script>';
                        header("Location: traderslogin.php");
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
    </head>
    <body>
        <h1> Entered Details: </h1>
    <?php  $query = "select * from traders where phone = '$phone'";
			$result = mysqli_query($con, $query); ?>
    <?php $res=$result->fetch_assoc() ?>
    Trader Name : <?php echo $res['TraderName'];?>
                <br>Address : <?php echo $res['TraderAddress'];?>
                <br>Vehicle Number : <?php echo $res['VehicleNumber'];?>
                <br>Phone Number : <?php echo $res['phone'];?>
    <form action="traderupdate.php" method="post">
    <div>
                    <p><label for="Phone">Phone Number</label></p>
                    <input type="text" id="text" name="Phone" required>
                </div>
            <div>
                    <p><label for="req">Requirement needed:</label></p>
                    <input type="text" id="text" name="req" required>
                </div>
                <input id="button" type="submit" value="Update">
    </form>
        
</body>
</html>