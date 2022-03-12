<?php

	include "../lib/session.php";
	session::checklogin();

?>
<?php include "../lib/Database.php";?>
<?php include "../formate/formate.php";?>
<?php 
$dbCon =new Database();
$formateObj = new dateFormate();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<?php 
		
			if(isset($_POST['submit'])){
				
				$name = $formateObj->validation( $_POST['username']);
				$password = md5($_POST['password']);


				$name = mysqli_real_escape_string($dbCon->link,$name);
				$password = mysqli_real_escape_string($dbCon->link,$password);
				$query = "SELECT * FROM user where userName='$name' and password='$password'";

				$result = $dbCon->select($query);
				// var_dump($result);
				if($result != false){
					$value = mysqli_fetch_array($result);
					$row = mysqli_num_rows($result);
					
					if($row == 1){
						session::set("login",true);
						
						session::set("username",$value['userName']);
						session::set("userid",$value["id"]);
						session::set("userrole",$value["role"]);
						header("location:index.php");
					
					}else{
						echo "<span style='color:red; font-size:20px;'>not result found</span>";
					}
				}else{
					echo "<span style='color:red; font-size:20px;'>User name and password not matched</span>";
				}
			}
		
		?>
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" name="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="forgotpass.php">Forgot password !</a>
		</div><!-- button -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>