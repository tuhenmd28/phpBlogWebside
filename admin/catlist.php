<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php 
					$sql = "SELECT * FROM categories where valid = 1";
					$result = $dbCon->select($sql);
					foreach($result as $key=>$value){
						
					?>
						<tr class="odd gradeX">
							<td><?php echo ++$key ?></td>
							<td><?php echo $value['name'] ?></td>
							<td><a href="editcat.php?id=<?php echo $value['id'] ?>">Edit</a> || <a onclick=" return confirm('Are you sure');" href="delete.php?id=<?php echo $value['id'] ?>">Delete</a></td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>