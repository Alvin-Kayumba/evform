
<?php
    session_start();
?><!DOCTYPE html>
<html>
<head>
    <title>Return Page</title>
    <style>
        body{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Raleway', sans-serif;	
	background-color: #ffffff;
    	
}
table{
 border: 1px solid black;
    border-collapse:collapse;
  display: flex;
  justify-content: center;
  align-items: center;
  /* height: 100vh; */
   
}
.table{
    background-color: whitesmoke;
    padding: 5px ;
}
th{
    color:#fff;
    background-color: #2e5a78;
    
}
td{
    color:#000;
    background-color:#eee;
   
}
.container{
    /* min-height: 100vh; */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
}
.container .content{
    text-align: center;
}
.container .content h3{
    font-size: 30px;
    color: #333;
}
.container .content h3 span{
    background-color: #2e5a78;
    color: #fff;
    border-radius: 5px;
    padding: 0 15px;
}
.container .content p{
    font-size: 25px;
    margin-bottom: 20px;
}
.container .content .btn{
    display: inline-block;
    padding: 10px 30px;
    font-size: 20px;
    background: #333;
    color: #fff;
    margin: 0 5px;
    text-transform: capitalize;
}
.container .content .btn:hover{
    background: #2e5a78;
}

</style>
</head>
<body>
<div class="container">
    <div class="content">
        <h3>Hi, <span><?=$_SESSION['username'];?> </span></h3>
        <p>Welcome,this is an admin page.The following are the registered applicants</p>

        <footer>
            <a href="adminpage.php" class="btn">Back</a>
            <a href="logout.php" class="btn">Logout</a>
        </footer>
    </div>

</div>
</body>
</html>
<div class="table">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evmak";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed:".$conn->connection_error);
    }
    // session_start();

    echo "<table border='1'>
    <tr>
        <th>NO</th>
        <th>Full name</th>
        <th>Username</th>
        <th>Registration number</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile number</th>
        <th>Degree</th>
        <th>Year </th>
        <th>Gender</th>
        <th>Certificate</th>
    </tr>";

    $sql = "SELECT * from evform";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){ ?>

        <tr>
            <td><?=$row['ID'];?></td>
        <td><?=$row['fullname'];?></td>
        <td><?=$row['username']?></td>
        <td><?=$row['regnumber'];?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['password'];?></td>
        <td><?=$row['mobilenumber'];?></td>
        <td><?=$row['degree'];?></td>
        <td><?=$row['year'];?></td>
        <td><?=$row['gender'];?></td>
        <td><a target="_blank" href="<?= $row['certificate'];?>">Certificate</a></td>
        </tr>
        <?php }; 


    // echo "First Name: " .$row['firstname'] . "<br>";
    // echo "Middle Name: " .$row['middlename'] . "<br>";
    // echo "Last Name: " .$row['surname'] . "<br>";
    // echo "Registration number: " .$row['regnumber'] . "<br>";
    // echo "Email: " .$row['email'] . "<br>";
    // echo "Phone: " .$row['mobilenumber'] . "<br>";
    // echo "Degree Program: " .$row['degree'] . "<br>";
    // echo "Year of study: " .$row['year'] . "<br>";
    // echo "Gender: " .$row['gender'] . "<br>";
    // echo "Certificate: " .$row['certificate'] . "<br>";




    // fi ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $fname = $_POST['firstname'];
        // $targetDir = "Documents/" . $fname . "/";

        // if (file_exists($targetDir)) {
        //     $certificate = array_diff(scandir($targetDir), array(".", ".."));

        //     if (count($uploadedFiles) > 0) {
        //         echo "<h3>Certificate for $fname:</h3>";
        //         echo "<ul>";
        //         foreach ($certificate as $file) {
        //             echo "<li><a href='$targetDir$file' target='_blank'>$file</a></li>";
        //         }
        //         echo "</ul>";
        //     } else {
        //         echo "No files uploaded for $fname.";
        //     }
        // } else {
        //     echo "Applicant $fname not found.";
        // }




    $conn->close();
    ?>
</div>