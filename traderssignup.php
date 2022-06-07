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
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <style type="text/css">
        .container {
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            max-width: 650px;
            height: 500px;
            margin-top: 90px;
            background-color: #FBFBFB;
            display: flex;
        }

        .section1 {
            width: 40%;
            padding-left: 50px;
        }

        .section2 {
            width: 50%;
        }

        .section2>img {
            width: 100%;
            height: 100%;
            margin: 10px 0px 0px 8px;
        }

        h5 {
            margin-top: -12px;
        }

        label {
            text-transform: uppercase;
            font-size: 12px;
            color: rgb(48, 48, 48);
        }

        input {
            border: none;
            width: 100%;
            border-bottom: 1px solid lightgray;
            background-color: #FBFBFB;
            position: relative;
            top: -10px;
            padding: 5px;
        }

        input:focus {
            outline: none !important;
            border-bottom: 1px solid red;
            font-size: 14px;
            font-weight: bold;
        }

        #password:focus {
            color: red;
            font-size: 16px;
            font-weight: bold;
        }

        #btn {
            border: none;
            background-color: red;
            border-radius: 20px;
            padding: 10px;
            color: white;
            width: 120px;
            margin-top: 15px;
        }

        p {
            font-size: small;
        }

        .line {
            border-bottom: 1px solid lightgray;
            width: 100%;
            margin-top: 50px;
        }

        .socialIcons {
            display: flex;
            margin-top: 5px;
        }

        .icon {
            margin: 10px 7px;
            position: relative;
            left: 30px;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 2px solid black;
            font-size: 12px;
            line-height: 25px;
        }

        .fab {
            position: relative;
            left: 6px;
        }

        .fb>.fab {
            position: relative;
            left: 8px;
        }

        h6 {
            position: relative;
            top: -8px;
            font-size: 12px;
        }

        .icon:hover,
        #btn:hover {
            box-shadow: 0 0 25px rgba(8, 8, 8, 0.2);
            background-color: rgb(182, 49, 93);
        }
    </style>

    <div>
        <!-- Left section of signup form -->
        <dive>
            <h1>Registration for traders</h1>
            <h2>Welcome to our poultry app</h2>
            <form method="post" action="traderupload.php" enctype="multipart/form-data">
                <div>
                    <p><label for="Name">Your Name</label></p>
                    <input type="text" id="text" name="Name" required autocomplete="off">
                </div>
                <div>
                    <p><label for="Address">Address</label></p>
                    <input type="text" id="text" name="Address" required>
                </div>
                <div>
                    <p><label for="Vehicle">Vehicle Number</label></p>
                    <input type="text" id="text" name="Vehicle" required>
                </div>
                <div>
                    <p><label for="Phone">Phone Number</label></p>
                    <input type="text" id="text" name="Phone" required>
                </div>
                <div>
                    <p><label for="Password">Create Password</label></p>
                    <input type="password" id="text" name="Password" required>
                </div>
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">

                <input id="button" type="submit" name="submit" value="Register" />
            </form>

            <h3>Already a member? <a href="traderslogin.php">Log in</a></h3>
            <div></div>
        </dive>
        <!-- Right section of the form containing image -->
    </div>
</body>

</html>