<?php
session_start();

include 'config.php';

if(isset($_POST['submit'])){
    // Retrieve the form data
    // $flname = $_POST['fullname'];
    // $mname = $_POST['middlename'];
    // $lname = $_POST['surname'];
    $uname = $_POST['username'];
    // $regno = $_POST['regnumber'];
    // $aemail = $_POST['email'];
    $pass = md5($_POST['password']);
    // $cpass = md5($_POST['cpassword']);
    // $mnumber = $_POST['mobilenumber'];
    // $degree= $_POST['degree'];
    // $yos = $_POST['year'];
    // $gender = $_POST['gender'];
    // $certificate = $_POST['certificate'];

	$_SESSION['username']=$uname;
	$_SESSION['password']=$pass;
	

    $select = "SELECT * FROM evform WHERE username = '$uname' and password = '$pass'" ;

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_array($result);
       if($row['username']==="ALVINK"){
        header("location:adminpage.php");
       }
       else{
        header("location:applicant.php");
       }
    }else{
		header("location:login_form.php?error=1"); 
	}

}
?>



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Login form</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap');

*{
	font-family: 'poppins' sans-serif;
	margin:0; padding: 0;
	box-sizing: border-box;
	outline: none; border: none;
	text-decoration: none;
}
.container{
	min-height: 100vh;
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
	background: #fc6f41;
	color: #ffff;
	border-radius: 5px;
	padding: 0 15px;
}
.container .content h1{
	font-size: 50px;
	color: #333;
}
.container .content h1 span{
	color:  #fc6f41;

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
	background: #fc6f41;
}
.form-container{
	min-height: 100hv;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;
	background: #eee;
}
.form-container form 
{
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
	background: #fff;
	text-align: center;
	width: 500px;
}
.form-container form h3
{
	font-size: 30px;
	text-transform: uppercase;
	margin-bottom: 10px;
	color: #333;
}
.form-container form input,
.form-container form select
{
	width: 100%;
	padding: 10p 15px;
	font-size: 17px;
	margin:8px 0;
	background: #eee;
	border-radius: 5px;
}
.form-container form select option
{
	background: #fff;
}
.form-container form .form-btn
{
	background: #fbd0d9;
	color: #2f5a78;
	text-transform: capitalize;
	font-size: 20px;
	cursor: pointer;
}

.form-container form .form-btn:hover
{
	background: #2f5a78;
	color:#fff ;
}
.form-container form p 
{
	margin-top: 10px;
	font-size: 20px;
	color: #333;
}
.form-container form p a 
{
	color: crimson;
}
.form-container form .error-msg
{
	margin: 10px 0;
	display: block;
	color: crimson;
	color: #fff;
	border-radius: 5px;
	font-size: 20px;
	padding: 10px;
}

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif; 
    background-color: #ffffff;
    align-items: center;
    justify-content: center;
    
}
a{
    text-decoration: none;
	
}
ul{
    list-style: none;
}
input,button,textarea{
    border: none;
    outline: none;
}
nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    left: 0;
    width: 100%;
    z-index: 1;
}
nav ul{
    display: flex;
}
nav ul li a{
    height: 40px;
    line-height: 43px;
    margin: 3px;
    padding: 0 22px;
    display: flex;
    font-size: 0.8rem;
    text-decoration: uppercase;
    font-weight: 700;
    letter-spacing: 1px;
    border-radius: 3px;
    transition: 0.6s ease-in-out;
    color: #000000;
}
nav ul li a:hover{
    background-color: darkblue;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(4, 0, 252, 0.397);
}
.active{
    background-color: darkblue;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(4, 0, 252, 0.397);
}

.main{
    width: 100%;
    height: 100%;
    position: fixed;
    background-repeat: no-repeat;
    background-size: none;
    background-image: none;
    }
.about-container{
    width: 500px;
    font-size: 13.5px;
    position: relative;
    left: 80%;
    top: 20%;
    transform: translate(-80%,-20%);
}
.about-container h1{
    font-size: 45px;
    margin: 0px;
    letter-spacing: 3px;
    color: #ffff;
}

  /* Styling the container to use flexbox layout */
.horizontal-container {
  display: flex;
  align-items: center; /* Align items vertically in the center */
}

/* Add some spacing between elements */
.horizontal-container label,
.horizontal-container input {
  margin-right: 10px; /* Adjust the spacing as desired */
}  
	</style>
</head>
<body>

	<section class="main">
	<header>
			<img src="logo22.jpg">
		</header>
		<nav>
			
			<ul class="menu">
			<li><a href="home.html" >Home</a></li>
			<li><a href="aboutus.html" >About Us</a></li>
			<li><a href="form.php">Register</a></li>
            <li><a href="login_form.php" class="active">Login</a></li>
			
		</ul>
		</nav>
	<div class="form-container">

		<form  method="post"  enctype="multipart/form-data">
			<h3>Login now</h3>
			<?php
			if(isset($error)){
				foreach($error as $error){
					echo '<span class = "error-msg">'.$error.'</span>';
				}
			}
			?>
			<input type="text" name="username" id="d1" required placeholder="Enter your username">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Login now" class="form-btn">
			<?php
				if(isset($_GET['error']) && $_GET['error']==1){
					echo "<p style='color:red;'>incorrect username/password</p>";
				}
			?>
			
            <p>don't have an account?<a href="form.php" style="color: #2e5a78;">register now</a></p>
        </form>
    </div>
</body>
</html>
			