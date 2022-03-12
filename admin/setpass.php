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
<title>Password Set</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<?php 
		
			if(isset($_POST['submit'])){

				$password = md5($_POST['password']);
				$password = mysqli_real_escape_string($dbCon->link,$password);
                $id = session::get("id");
				$query = "UPDATE user SET  password='$password' where id='$id' ";

				$result = $dbCon->select($query);
                if($result == true){
                    echo 'Password set successfully';
                    echo "<script> window.location = 'login.php'; </script>";
                }else{
                    echo 'password not set';
                }
			
			}
		
		?>
		<form action="" method="post">
			<h1>Password Set</h1>

			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" name="submit" value="Password Set" />
			</div>
		</form><!-- form -->

		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>