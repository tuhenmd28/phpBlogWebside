<?php include 'inc/header.php' ?>
<?php 
if(isset($_POST['submit'])){
				
	$fname = $formateObj->validation( $_POST['firstname']);
	$lname = $formateObj->validation( $_POST['lastname']);
	$email = $formateObj->validation( $_POST['email']);
	$body = $formateObj->validation( $_POST['body']);
	$fname = mysqli_real_escape_string($dbCon->link, $fname);
	$lname = mysqli_real_escape_string($dbCon->link, $lname);
	$email = mysqli_real_escape_string($dbCon->link, $email);
	$body = mysqli_real_escape_string($dbCon->link, $body);
	
	$error = '';
	if(empty($fname)){
		$error = "First Name Must not be Empty";
	}elseif(empty($lname)){
		$error = "Last Name Must not be Empty";

	}
	elseif(empty($email)){
		$error = "Email  Must not be Empty";

	}
	elseif(empty($body)){
		$error = "Message  Must not be Empty";

	}else{
	
	$query = "INSERT INTO  contact (  firstname ,  lastname ,  email ,  body  ) VALUES ('$fname','$lname','$email','$body')";
	$insert = $dbCon->insert($query);

	if($insert){
		$mag = 'successful';
	}else{
		echo 'message not send';
	}
	}
}
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
				<?php 
				if(isset($error)){
					echo "<span style='color:red'>$error<span>";
				}if(isset($mag)){
					echo "<span style='color:green'>$mag<span>";
				}
				?>
			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input  type="text" name="firstname" placeholder="Enter first name" />
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input  type="text" name="lastname" placeholder="Enter Last name" />
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input  type="email" name="email" placeholder="Enter Email Address" />
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit"/>
					</td>
				</tr>
		</table>
	<form>				
 </div>

		</div>
		<?php include 'inc/sideBar.php' ?>

	</div>
	<?php include 'inc/footer.php' ?>
