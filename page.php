<?php include 'inc/header.php' ?>
<?php if(!isset($_GET['pageid']) or $_GET['pageid']==null){
            echo "<script>window.location='404.php'</script>";
        }else{
            $id = $_GET['pageid'];
        } ?>

<?php 
            $sql = "SELECT * FROM addpage where id = '$id'";
            $result = $dbCon->select($sql);
			if($result){
            foreach($result as $value){
     ?>             
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2><?php echo $value['name'] ?></h2>
				<p><?php echo $value['body'] ?></p>
	</div>

		</div>
		<?php include 'inc/sideBar.php' ?>
	</div>
	<?php } }else{header("location:404.php ");} ?>
	<?php include 'inc/footer.php' ?>
