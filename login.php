<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome icones CDN Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style_login.css">
    <!-- Linking css code file -->
</head>


<body>
<div class="container">
<form action="details.php" method="post">
<h3>Log In</h3>
<div class="inputBox">
<span><label for="Phone">Phone Number</label></span>
<div class="box">
<div class="icon"><ion-icon name="person"></ion-icon>	</div>
<input type="text" id="text" name="Phone" required>
</div>
</div>
<div class="inputBox">
<span><label for="Password">Password</label></span>
<div class="box">
<div class="icon"><ion-icon name="lock-closed"></ion-icon></div>
<input type="password" id="text" name="Password" required>
</div>
</div>
<div class="inputBox">
<div class="box">
<div class="icon"></div>
<input id="button" type="submit" value="Login">
</div>
</div>
<div class="inputBox">
<div class="box">
<p style="color:white;">Not a registered User?</p> <a style="color:white;" href="signup.php" class="forget">SignUp</a>
</div></div>
</form>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>