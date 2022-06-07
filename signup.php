<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome 5 CDN link to add icones -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Register</title>
    <!-- Linking .css file with HTML page -->
    <link rel="stylesheet" href="style_login.css">
</head>

<body>


    <div>
        <!-- Left section of signup form -->
        <dive  class="bag">
            <h1 style="color:white; text-align:center">REGISTER</h1><br>
            <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="inputBox">
            <div class="box">
                <div>
                <span><label style="font-size:15px" for="Name">UserName</label></span>
                    <input type="text" id="text" name="Name" required autocomplete="off">
                </div>
</div></div>
<div class="inputBox">
            <div class="box">
                <div>
                    <span><label style="font-size:15px" for="PoultryName">Poultry Name</label></span>
                    <input type="text" id="text" name="PoultryName" required autocomplete="off">
                </div></div></div>
                <div class="inputBox">
            <div class="box">
                <div>
                    <span><label style="font-size:15px" for="Address">Poultry Address</label></span>
                    <input type="text" id="text" name="Address" required>
                </div></div></div>
                <div class="inputBox">
            <div class="box">
                <div>
                    <span><label style="font-size:15px" for="Phone">Phone Number</label></span>
                    <input type="text" id="text" name="Phone" required>
                </div></div></div>
                <div class="inputBox">
            <div class="box">
                <div>
                    <span><label style="font-size:15px" for="Password">Create Password</label></span>
                    <input type="password" id="text" name="Password" required>
                </div></div></div>
                <div class="inputBox">
            <div class="box">
                <span style="color:white; font-size:15px;">Select image to upload</span>
                <input style="background-color:white; color:#0e1538"type="file" name="fileToUpload" id="fileToUpload">
                </div></div>
                <input id="button" type="submit" name="submit" value="Register" style="width:100px; height:30px;font-size:16px;"/>
            </form><br>
            <h3>Already a member? <a href="login.php">Log in</a></h3>
            <div></div>
        </dive>
        <!-- Right section of the form containing image -->
    </div>
</body>

</html>