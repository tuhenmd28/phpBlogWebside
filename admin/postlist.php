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
						$query = "SELECT p.id,p.title,p.body,p.image,p.author,p.tags,p.date,c.name FROM post p INNER JOIN categories c ON p.cat = c.id;
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
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<?php }} ?>
						<!-- <tr class="even gradeC">
							<td>Trident</td>
							<td>Internet Explorer 5.0</td>
							<td>Win 95+</td>
							<td class="center">5</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="odd gradeA">
							<td>Trident</td>
							<td>Internet Explorer 5.5</td>
							<td>Win 95+</td>
							<td class="center">5.5</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="even gradeA">
							<td>Trident</td>
							<td>Internet Explorer 6</td>
							<td>Win 98+</td>
							<td class="center">6</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="odd gradeA">
							<td>Trident</td>
							<td>Internet Explorer 7</td>
							<td>Win XP SP2+</td>
							<td class="center">7</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="even gradeA">
							<td>Trident</td>
							<td>AOL browser (AOL desktop)</td>
							<td>Win XP</td>
							<td class="center">6</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 1.0</td>
							<td>Win 98+ / OSX.2+</td>
							<td class="center">1.7</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 1.5</td>
							<td>Win 98+ / OSX.2+</td>
							<td class="center">1.8</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 2.0</td>
							<td>Win 98+ / OSX.2+</td>
							<td class="center">1.8</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 3.0</td>
							<td>Win 2k+ / OSX.3+</td>
							<td class="center">1.9</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Camino 1.0</td>
							<td>OSX.2+</td>
							<td class="center">1.8</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						
						<tr class="gradeX">
							<td>Misc</td>
							<td>Dillo 0.8</td>
							<td>Embedded devices</td>
							<td class="center">-</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeX">
							<td>Misc</td>
							<td>Links</td>
							<td>Text only</td>
							<td class="center">-</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeX">
							<td>Misc</td>
							<td>Lynx</td>
							<td>Text only</td>
							<td class="center">-</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeC">
							<td>Misc</td>
							<td>IE Mobile</td>
							<td>Windows Mobile 6</td>
							<td class="center">-</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeC">
							<td>Misc</td>
							<td>PSP browser</td>
							<td>PSP</td>
							<td class="center">-</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="gradeU">
							<td>Other browsers</td>
							<td>All others</td>
							<td>-</td>
							<td class="center">-</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr> -->
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
