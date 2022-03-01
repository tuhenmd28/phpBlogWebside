<?php

use LDAP\Result;

 include "inc/header.php";?>
<?php include "inc/slider.php";?>

	

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

<?php 

$limit = 3;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}
$ofset = ($page-1)* $limit;
$query = "SELECT * FROM post LIMIT {$ofset}, {$limit} ";
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

$query1 = "SELECT * FROM post";
$result1 = $dbCon->select($query1);
$totalRows = mysqli_num_rows($result1);

$Tpage = ceil($totalRows/$limit);
echo '<ul class="pagination">';
if($page>1){
	echo '<li> <a href="index.php?page='.($page - 1).'">Prev</a></li>';
}
for($i=1;$i<=$Tpage; $i++){
	if($page == $i){
		$active = 'active';
	}else{
		$active = "";
	}
	echo "<li> <a class='$active'   href='index.php?page=$i'> $i</a></li>";
}
if($Tpage>$page){
	echo '<li> <a href="index.php?page='.($page + 1).'">Next</a></li>';
}
echo "</ul>";

?>			
<?php
}else{header("location:404.php");}

?>

		</div>
	<?php include 'inc/sideBar.php' ?>
	</div>
<?php include 'inc/footer.php' ?>