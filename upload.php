
<?php





$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));




// Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //something was posted
        // include("connection.php");
        $user_name = $_POST['Name'];
        $password = $_POST['Password'];
        $poultry = $_POST['PoultryName'];
        $address = $_POST['Address'];
        $phone = $_POST['Phone'];
        

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            //save to database
            //$user_id = random_num(20);
            $query = "insert into farmers values ('$user_name','$poultry','$address','$phone','$password','$target_file')";
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
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
