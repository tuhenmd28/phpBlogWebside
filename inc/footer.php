
	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <?php 
     $sql = "SELECT * FROM copyrightfooter WHERE id=1";
     $res = $dbCon->select($sql);
     if($res){
     foreach($res as $value){
 ?>
	  <p>&copy;<?php echo $value['text'] ; echo date('Y'); ?></p>
	  <?php }} ?>	  
	</div>
	<div class="fixedicon clear">
<?php 
     $sql = "SELECT * FROM socialMedia WHERE id=1";
     $result = $dbCon->select($sql);
     if($result){
     foreach($result as $val){
 ?>
		<a href="<?php echo $val['facebook'] ?>"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="<?php echo $val['twitter'] ?>"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="<?php echo $val['linkedin'] ?>"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="<?php echo $val['googleplus'] ?>"><img src="images/gl.png" alt="GooglePlus"/></a>
<?php }} ?>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>