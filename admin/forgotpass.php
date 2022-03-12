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
<title>Password Recovery</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
        
		<?php 
		
			if(isset($_POST['submit'])){
				$userid =$username=$dbemail = '';
				$email = $formateObj->validation( $_POST['email']);
				$name = mysqli_real_escape_string($dbCon->link,$email);
                if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo 'Please Enter valide email';
                }else{

                    $query = "SELECT * FROM user where email='$email' ";
                    $result = $dbCon->select($query);
                    while($value = $result->fetch_assoc()){
                        $userid   = $value['id'];
                        session::set("id",$value["id"]);
                        $username = $value['userName'];
                        $dbemail  = $value['email'];
                    }
                    if($email == $dbemail){
                        echo "<script> window.location = 'setpass.php'; </script>";
                        // $txt =substr($email,0,3);
                        // $rand = rand(10000,99999);
                        // $newpass = "$txt$rand";
                        // $password = md5($newpass);
                        // $updatequery = "UPDATE  user SET password = '$password' where id ='$userid'";
                        // $update = $dbCon->update($updatequery);
                        // $to = '$email';
                        // $from = 'tuhenmd28@gmail.con';
                        // $subject = 'Your password ';
                        // $headers = "From:$from\n";
                        // $headers .= "MIME-Version:1.0";
                        // $headers .= "content-type:text/html;charser=iso-8859-1"."\r\n";
                        // $message ="Your username is ".$username." and Passwoed ". $newpass." ";
                        // $sendmail = mail($to,$subject,$message,$headers);
                        // if($sendmail){
                        //     echo 'pleace check your email';
                        // }else{
                        //     echo 'email not send';
                        // }
                    
                    }else{
                        echo "<span style='color:red; font-size:20px;'> Email not exits </span>";
                    }
                }
			}
		
		?>
		<form action="" method="post">
			<h1>Password Recovery </h1>
			
			<div>
				<input type="text" placeholder="Enter your email" required="" name="email"/>
			</div>
        
			<div>
				<input type="submit" name="submit" value="send " />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="login.php">Login </a>
		</div><!-- button -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>