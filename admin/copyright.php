<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <div class="block copyblock"> 
                 <form action="copyright.php" method="POST">
 <?php 
     $sql = "SELECT * FROM copyrightfooter WHERE id=1";
     $result = $dbCon->select($sql);
     if($result){
     foreach($result as $val){
 ?>
                    <table class="form">
   <?php 
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $text = $formateObj->validation($_POST['text']);
            if($text == false){
                echo "<span style='color:red;'> feald must not be empty </span>";

            }else{

                $qurey = "UPDATE copyrightfooter SET text = '$text'";
                $result = $dbCon->update($qurey);
                if($result){
                    echo "<span style='color:green;'> Update successful </span>";
                }else{
                    echo "<span style='red:green;'> Update faild </span>";
                }
            }
        }
  ?>					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $val['text']?>" name="text" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
 <?php }} ?>                   
                    </form>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>
