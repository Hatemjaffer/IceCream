<?php 
 
$host="localhost";
$user="root";
$password="";
$db="demo";
 

$dc = mysqli_connect($host,$user,$password) or die ("لم استطع الاتصال بالسيرفر");
//للاتصال بالقاعدة
mysqli_select_db($dc,$db)or die ("لم استطع استخراج القاعدة");
 
if(isset($_POST['username'])&& $_POST['password']){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."'
     limit 1";
    
    $result=mysql_query($dc,$sql);
    
    if(mysql_num_rows($result)==2){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
mysqli_close($dc);
?>

<!-- /*   html */ -->

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form method="POST" action="login.php">
		<div class="form-input">
		<input type="text" name="username" placeholder="Enter the User Name"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/>
		</div>
		<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>