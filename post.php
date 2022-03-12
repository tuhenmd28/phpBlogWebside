<?php include 'inc/header.php' ?>

<?php 
 
 if(!isset($_GET['id']) || $_GET['id']== null ){
	 header("location:404.php");
 }else{
	$id =$_GET['id'];
}

?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

		<?php 
	
			$query = "SELECT * FROM post WHERE id= $id ";
			$result = $dbCon->select($query);
			if($result){
			foreach($result as $value ){

			
		
		?>
			<div class="about">
				<h2><?php echo $value['title'] ?></h2>
				<h4><?php echo $formateObj->Fdate( $value['date']); ?>,<a href=""><?php echo $value['author'] ?> </a> </h4>
				<img src="./admin/<?php echo $value["image"]; ?>"" alt="MyImage"/>
				<p><?php echo $value['body'] ; $cat = $value['cat'];?></p>
				<?php } // foreach loop end here ?>
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<?php
					$Rquery = "SELECT * FROM post WHERE cat = $cat order by rand() limit 6 ";
					$Rresult = $dbCon->select($Rquery);
			
					if($Rresult){
					foreach($Rresult as $rvalue ){ ?>
					<a href="post.php?id=<?php echo $rvalue['id']; ?>">
					<img src="./admin/<?php echo $rvalue["image"]; ?>" alt="post image"/>
					</a>
				
					<?php }
				}else{echo 'Relative Result Not Founded';} ?>
				</div>
				<?php }else{
					header("location:404.php");
				} ?>
	</div>

		</div>
		<?php include 'inc/sideBar.php' ?>
	</div>
	<?php include 'inc/footer.php' ?>
