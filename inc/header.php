<?php include "lib/Database.php";?>
<?php include "formate/formate.php";?>
<?php 
$dbCon =new Database();
$formateObj = new dateFormate();
define("TITLE", "Blog Webside");

?>
<!DOCTYPE html>
<html>
<head>
<?php 

if(isset($_GET['pageid'])){
	$id = $_GET['pageid'];
	$pageidsql = "SELECT * FROM addpage where id ='$id' ";
	$result = $dbCon->select($pageidsql);
	foreach($result as $value){
?>
     <title><?php echo $value['name'] ?>-<?php echo TITLE; ?></title>
     <?php } }elseif(isset($_GET['id'])){
	$pid = $_GET['id'];
	$postidsql = "SELECT * FROM post where id ='$pid' ";
	$result = $dbCon->select($postidsql);
	foreach($result as $value){
?>
     <title><?php echo $value['title'] ?>-<?php echo TITLE; ?></title>
    <?php	}}elseif(isset($_GET['catid'])){
	$pid = $_GET['catid'];
	$postidsql = "SELECT * FROM categories	where id ='$pid' ";
	$result = $dbCon->select($postidsql);
	foreach($result as $value){
?>
     <title><?php echo $value['name'] ?>-<?php echo TITLE; ?></title>
    <?php	}}
	 else{ ?>
		<title><?php echo $formateObj->title(); ?>-<?php echo TITLE; ?></title>
	<?php } ?>
	
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
	<div class="headersection templete clear">
		<a href="">
			<?php 
			 $sql = "SELECT * FROM logotitle where id=7";
			 $result = $dbCon->select($sql);
			 if($result){
				 foreach($result as $val){
					
				 }}
			?>
			<div class="logo">
				<img src="./admin/<?php echo $val['logo'] ?>" alt="Logo"/>
				<h2><?php echo $val['title'] ?></h2>
				<p><?php echo $val['description'] ?></p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
<?php 

     $sql = "SELECT * FROM socialMedia WHERE id=1";
     $result = $dbCon->select($sql);
     if($result){
     foreach($result as $val){
 ?>
				<a href="<?php echo $val['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $val['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $val['linkedin'] ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $val['googleplus'] ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
<?php }} ?>
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="post">
				<input type="text" name="search" required placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
		<?php $path = $_SERVER['SCRIPT_FILENAME'];
		      $creantpage = basename($path,'.php');
		?>
	<ul>
		<li><a <?php  if( $creantpage == 'index'){echo 'id="active"'; }?> href="index.php">Home</a></li>
		<?php 
			$sql = "SELECT * FROM addpage ";
			$result = $dbCon->select($sql);
			foreach($result as $value){
        ?>
           <li><a
		   <?php 
		   if(isset($_GET['pageid']) && $_GET['pageid'] == $value['id']){
			   echo 'id="active"';
		   }
		   ?>
		   href="page.php?pageid=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a> </li>
          <?php } ?>
		<!-- <li><a href="about.php">About</a></li>	 -->
		<li><a <?php  if( $creantpage == 'contact'){echo 'id="active"'; }?>  href="contact.php">Contact</a></li>
	</ul>
</div>
