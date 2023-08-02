<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tasks Page</title>
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
  height: 100vh;
   
}
.table{
    background-color: whitesmoke;
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
        <h3>Hi,<?=$_SESSION['username'];?></h3>
        <p>Currently there are no any tasks, they will be updated soon</p>

        <footer>
            <!-- <a href="login_form.php" class="btn">Back</a> -->
            <!-- <a href="tasks.php" class="btn">View tasks</a> -->
            <a href="logout.php" class="btn">Logout</a>
        </footer>
    </div>

</div>
</body>
</html>