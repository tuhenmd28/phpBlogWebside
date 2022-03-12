
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<?php 
	if(isset($_GET['id'])){
		$keywordpid = $_GET['id'];
		$postidsql = "SELECT * FROM post where id ='$keywordpid' ";
		$keyword = $dbCon->select($postidsql);
		if($keyword){
			foreach($keyword as $value){ ?>
	<meta name="keywords" content="<?php echo $value['tags'] ?>">

<?php
		}
	} }else{?>
		<meta name="keywords" content="<?php echo KEYWORDS; ?>">
	
		<?php
	}
	?>
	<meta name="author" content="Delowar">