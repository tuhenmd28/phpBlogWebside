<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
		<table class="data display datatable" id="example">
		<thead>
			<tr>
				<th width="5%">NO.</th>
				<th width="10%">Post Title</th>
				<th width="25%">Description</th>
				<th width="10%">Category</th>
				<th width="10%">Image</th>
				<th width="10%">Author</th>
				<th width="10%">tags</th>
				<th width="10%">Date</th>
				<th width="10%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			$query = "SELECT p.id,p.title,p.body,p.image,p.author,p.tags,p.date,p.userid,c.name FROM post p INNER JOIN categories c ON p.cat = c.id;
			";
			$result = $dbCon->select($query);
			if($result){
				foreach($result as $key=>$val){
					
			?>
			
			<tr class="odd gradeX">
				<td><?php echo ++$key ?></td>
				<td><?php echo $val['title'] ?></td>
				<td><?php echo $formateObj->textshorten( $val['body'],150)?></td>
				<td><?php echo $val['name'] ?></td>
				<td style="padding: 0;"> <img width="100" height="100" src="<?php echo $val['image'] ?>" alt=""></td>
				<td class="center"> <?php echo $val['author'] ?></td>
				<td class="center"> <?php echo $val['tags'] ?></td>
				<td class="center"> <?php echo $formateObj->Fdate( $val['date']); ?></td>

		<td>
			<a href="viewpost.php?viewpostId=<?php echo $val['id'] ?>" >view</a> <br>
		
		<?php 
		if( (session::get('userid') ==  $val['userid']) || session::get('userrole') =='1' ){ ?>

		<a href="editpost.php?editId=<?php echo  $val['id'] ?>" >Edit</a> <br>
		<a onclick=" return confirm('Are you sure');"  href="deletepost.php?deleteid= <?php echo $val['id'] ?>">Delete</a>
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
