<?php
 include "inc/header.php";?>

	

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

<?php 


if(isset($_GET['id'])){
	$id = $_GET['id'];
}else{
	$id = 1;
}
$query = "SELECT * FROM post where cat= $id";
$table = $dbCon->select($query);
if($table){
foreach ($table as  $value) {

?>

			<div class="samepost clear">
				<h2><a href="post.php?id='<?php echo $value["id"]; ?>'"><?php echo $value["title"]; ?></a></h2>
				<h4><?php echo $formateObj->Fdate( $value['date']); ?>, By  <a href="#"><?php echo $value['author']; ?></a></h4>
				 <a href="#"><img src="./admin/uploade/<?php echo $value["image"]; ?>" alt="post image"/></a>
				<p>

				<?php echo $formateObj->textshorten( $value['body']); ?>



				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $value['id']; ?>">Read More</a>
				</div>
			</div>


<?php } // foreach end
?>			
<?php
}else{header("location:404.php");}

?>

		</div>
	<?php include 'inc/sideBar.php' ?>

	</div>
<?php include 'inc/footer.php' ?>