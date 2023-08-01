<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evmak";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

@include 'config.php';


if(isset($_POST['submit'])){
    // Retrieve the form data
    $flname = $_POST['fullname'];
    // $mname = $_POST['middlename'];
    // $lname = $_POST['surname'];
    $uname = $_POST['username'];
    $regno = $_POST['regnumber'];
    $aemail = $_POST['email'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $mnumber = $_POST['mobilenumber'];
    $degree= $_POST['degree'];
    $yos = $_POST['year'];
    $gender = $_POST['gender'];
    $certificate = $_POST['certificate'];


    $select = "SELECT * FROM evform WHERE email = '$aemail' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!';
    }else{
        if($pass != $cpass){
            $error[] = 'password not matched';
        }else{
            $sql =mysqli_query($conn,"INSERT INTO evform(fullname,username,regnumber,email,password,mobilenumber,degree,year,gender,certificate)VALUES ('$flname',  '$uname', '$regno',  '$aemail',  '$pass', '$mnumber',  '$degree', '$yos',  '$gender', '$certificate' )");
        }
    }

    //$certificate = $_POST['certificate'];

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flname = $_POST["fullname"];

        // Create a directory for the applicant (optional, if you want to organize files by applicant)
        $targetDir = "Documents/" . $flname . "/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Check if the file was uploaded without errors
        if (isset($_FILES["certificate"]) && $_FILES["certificate"]["error"] == UPLOAD_ERR_OK) {
            $targetFile = $targetDir . basename($_FILES["certificate"]["name"]);

            // Move the uploaded file to the desired location
            if (move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFile)) {
                // File uploaded successfully
                $certificate = $targetDir.''.basename($_FILES["certificate"]["name"]);
                echo "The file " . basename($_FILES["certificate"]["name"]) . " has been uploaded successfully.";
                // Optionally, you can store information about the uploaded file in a database
                // For example, store the file name, applicant name, upload date, etc.
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        // } else {
        //     echo "Error: " . $_FILES["certificate"]["error"];
        // }
        }


    

        // Prepare and execute the SQL statement to insert the data into the database
        
        $sql =mysqli_query($conn,"INSERT INTO evform(fullname,username,regnumber,email,password,mobilenumber,degree,year,gender,certificate)VALUES ('$flname',  '$uname', '$regno',  '$aemail',  '$pass', '$mnumber',  '$degree', '$yos',  '$gender', '$certificate' )");
        // $query=$conn->query($sql);
        $registrationSuccessful = $sql;
        // if ($conn->query($sql) == TRUE)
        if ($registrationSuccessful) {
            // If registration was successful, output a JavaScript alert
            echo '<script type="text/javascript">
                alert("Registration was successful!");
                window.location = "form.php"; // Redirect to a specific page after showing the alert
            </script>';
        }
    
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    
?>