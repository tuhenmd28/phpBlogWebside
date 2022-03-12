<div class="slidersection templete clear">
        <div id="slider">
        <?php  
			$query = "SELECT * FROM sliderimage ORDER BY id DESC LIMIT 5";
			$result = $dbCon->select($query);
			if($result){
				foreach($result as $key=>$val){
					
			?>
            
            <a href="#"><img  src="admin/<?php echo $val['image'] ?>" alt="nature 1" title="<?php echo $val['title'] ?>" /></a>


<?php }} ?>


            <!-- <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="This is slider three Title or Description" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="This is slider four Title or Description" /></a> -->
        </div>

</div>