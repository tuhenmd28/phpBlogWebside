<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">  
		<table class="data display datatable" id="example">
		<thead>
			<tr>
				<th >NO.</th>
				<th >Slider Title</th>
				<th >Slider Image</th>
				<th >Action</th>
			</tr>		
        </thead>
		<tbody>
			<?php  
			$query = "SELECT * FROM sliderimage ";
			$result = $dbCon->select($query);
			if($result){
				foreach($result as $key=>$val){
					
			?>
			
			<tr class="odd gradeX">
				<td><?php echo ++$key ?></td>
				<td><?php echo $val['title'] ?></td>
				<td style="padding: 0;"> <img width="100px"  src="<?php echo $val['image'] ?>" alt=""></td>
				

		<td>
		
		<?php 
		if( session::get('userrole') =='1'){ ?>

		<a href="editslider.php?sliderId=<?php echo  $val['id'] ?>" >Edit</a> <br>
		<a onclick=" return confirm('Are you sure');"  href="delslider.php?sliderId= <?php echo $val['id'] ?>">Delete</a>
	<?php	}?>

			</td>
			</tr>
						<?php }} ?>
			
						
					</tbody>
				</table>
	
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <div id="site_info">
      <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
	   
</body>
</html>
