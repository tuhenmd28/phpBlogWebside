<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>

<?php 
$msg = '';
// item send seen box
if(isset($_GET['seenid'])){
	$seenid = $_GET['seenid'];
	$query = "UPDATE contact SET status=1 where id ='$seenid'";
	$res = $dbCon->update($query);
	if($res){
		$msg =  "<h4 style='color:green;'>Message send in the seen box</h4>";
	 }else{
		$msg =  "<h4 style='color:red;'>Something wrong</h4>";

	}
}
?>
<?php 
// item send seen inbox
if(isset($_GET['unseenid'])){
	$unseenid = $_GET['unseenid'];
	$query = "UPDATE contact SET status=0 where id ='$unseenid'";
	$res = $dbCon->update($query);
	if($res){
		$msg = "<h4 style='color:green;'>Message send in the inbox</h4>";
	 }else{
		$msg =  "<h4 style='color:red;'>Something wrong</h4>";

	}
}
?>
<?php 
// delete seen box  message
if(isset($_GET['delid'])){
	$delid = $_GET['delid'];
	$query = "DELETE FROM contact where id ='$delid'";
	$res = $dbCon->delete($query);
	if($res){
		$msg =  "<h4 style='color:green;'>Message deleted</h4>";
	 }else{
		$msg =  "<h4 style='color:red;'>Something wrong</h4>";

	}
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
				<h3 >	<?php 
				if(isset($msg)){
					echo $msg;
				}
				?>
			</h3>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
                    $query = "SELECT * FROM contact where status=0 order by id desc";
                    $result = $dbCon->select($query);
                    if($result){
                        foreach($result as $key=>$value){
                
                ?>
						<tr class="odd gradeX">
							<td><?php echo ++$key?></td>
							<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td><?php echo $formateObj->textshorten($value['body'],40 ) ?></td>
							<td><?php echo $formateObj->Fdate($value['date'] ) ?></td>
							<td>
								<a href="viewmsg.php?msgid=<?php echo $value['id'] ?>">View</a> |
								<a href="replymsg.php?msgid=<?php echo $value['id'] ?>">Reply</a> |
								<a onclick="return confirm('Are you sure move the message in the seen box')" href="?seenid=<?php echo $value['id'] ?>">Seen</a> 
							</td>
						</tr>
					
						<?php } } ?>
					
					
					</tbody>
				</table>
               </div>
            </div>


            <div class="box round first grid">
                <h2>seen message</h2>
                <div class="block">        
				<table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
                    $query = "SELECT * FROM contact where status=1 order by id desc";
                    $result = $dbCon->select($query);
                    if($result){
                        foreach($result as $key=>$value){
                
                ?>
						<tr class="odd gradeX">
							<td><?php echo ++$key?></td>
							<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td><?php echo $formateObj->textshorten($value['body'],40 ) ?></td>
							<td><?php echo $formateObj->Fdate($value['date'] ) ?></td>
							<td>
							<a href="viewmsg.php?msgid=<?php echo $value['id'] ?>">View</a> |
								<a href="?unseenid=<?php echo $value['id'] ?>">unseen</a> |
								<a onclick="return confirm('Are you sure to delete')" href="?delid=<?php echo $value['id'] ?>">Delete</a> 
							</td>
						</tr>
					
						<?php } } ?>
					
					
					</tbody>
				</table>
               </div>
            </div>

		<script type="text/javascript">
			$(document).ready(function () {
				setupLeftMenu();
				$('.datatable').dataTable();
				setSidebarHeight();
			});
		</script>
        </div><?php include 'inc/footer.php' ?>
