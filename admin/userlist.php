<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
<?php 
if(!isset($_GET['deluserid']) or $_GET['deluserid']==null){
    // echo "<script>window.location='index.php'</script>";
}else{
    $id = $_GET['deluserid'];
    $sql = "DELETE FROM  user WHERE id = $id";
    $delete =$dbCon->delete($sql);
    // echo "<script>window.location='index.php'</script>";
    if ($delete) {
        echo "<span class='success'>user data delete Successfully.
        </span>";
        }else {
        echo "<span class='error'>user data Not delete !</span>";
        } 
}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>user Name</th>
							<th>Email</th>
							<th>Details</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php 
					$sql = "SELECT * FROM user";
					$result = $dbCon->select($sql);
					foreach($result as $key=>$value){
						
					?>
						<tr class="odd gradeX">
							<td><?php echo ++$key ?></td>
							<td><?php echo $value['name'] ?></td>
							<td><?php echo $value['userName'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td><?php echo $formateObj->textshorten( $value['details'],30 )?></td>
							<td><?php
                             if($value['role'] == '1'){
                                 echo 'Admin';
                             }elseif($value['role'] == '2'){
                                 echo 'Author';
                             }elseif($value['role'] == '3'){
                                 echo 'Editor';
                             }else echo 'no role found';
                             ?></td>

							<td><a href="viewuser.php?veiwid=<?php echo $value['id'] ?>">View</a> 
                            <?php if(session::get('userrole') == '1'){?>
                    
                                || <a onclick=" return confirm('Are you sure');" href="?deluserid=<?php echo $value['id'] ?>">Delete</a>
                    <?php } ?>
                        </td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>