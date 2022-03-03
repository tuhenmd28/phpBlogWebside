


            <div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
						<?php 
						$catQuery = "SELECT * FROM categories";
						$catResult = $dbCon->select($catQuery);
						if($catResult){
							foreach($catResult as $value){

						
						?>
						<li><a href="posts.php?id=<?php echo $value['id'] ;?>"><?php echo $value['name']; ?></a></li>
					
						<?php } }else{
							echo '<li> Category Not Found';
						} ?>
						
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>

		<?php 
			$queryp = "SELECT * FROM post limit 4 ";
			$resultp = $dbCon->select($queryp);
			// echo $result;
			if($resultp){
			foreach($resultp as $value ){
				
	    ?>
				<div class="popular clear">
					<h3><a href="post.php?id='<?php echo $value["id"]; ?>'"><?php echo $value["title"]; ?></a></h3>
					<a href="post.php?id='<?php echo $value["id"]; ?>'"><img src="./admin/<?php echo $value["image"]; ?>" alt="post image"/></a>
					<p><?php echo $formateObj->textshorten( $value['body'],130); ?></p>	
				</div>
				<?php } } else{
					header("location:404.php");
				} ?>
			</div>
			
		</div>