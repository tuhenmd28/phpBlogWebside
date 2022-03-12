<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
		<?php if(!isset($_GET['id']) or $_GET['id']==null){
            echo "<script>window.location='catlist.php'</script>";
        }else{
            $id = $_GET['id'];
        } ?>
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                        <?php
                           
                            if(isset($_POST['submit'])){
                                $name = $_POST['name'];
                                
                                $query = "UPDATE categories SET name='$name' where id = '$id'";
                                $result = $dbCon->update($query);
                                
                                if($result){
                                    echo "<script>alert('insert successfully')</script>";
                                    echo "<script>window.location='catlist.php'</script>";
                                    
                                }
                        }
                        
                        ?>					
                 <form method="post" action="">
                    <table class="form">
                        <tr>
                            <?php 
                            $sql = "SELECT * FROM categories WHERE id= $id";
                            $res = $dbCon->select($sql);
                            foreach($res as $val){
                            
                            ?>
                            <td>
                                <input value="<?php echo $val['name'] ?>" type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                            <?php } ?>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>
