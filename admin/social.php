<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
		
               
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <div class="block">  
 <?php 
     $sql = "SELECT * FROM socialMedia WHERE id=1";
     $result = $dbCon->select($sql);
     if($result){
     foreach($result as $val){
 ?>             
 <form action="social.php" method="POST">

    <?php 
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $fb = filter_var($_POST['facebook'],FILTER_VALIDATE_URL);
            $tw = filter_var($_POST['twitter'],FILTER_VALIDATE_URL);
            $li = filter_var($_POST['linkedin'],FILTER_VALIDATE_URL);
            $gp = filter_var($_POST['googleplus'],FILTER_VALIDATE_URL);
            if($fb==false || $tw==false || $li==false || $gp==false ){
                echo "<span style='color:red;'> Please Enter valid url </span>";
            }
            else{
            // if(empty($fb) || empty($tw) || empty($li) || empty($gp)){
            //     echo "<span style='color:red;'>field must not be empty </span>";
            // }else{
                $query = "UPDATE  socialmedia  SET   facebook ='$fb', twitter ='$tw', linkedin ='$li', googleplus ='$gp' WHERE id =1 ";
                $update = $dbCon->update($query);
                if($update){
                    echo "<span style='color:green;'> Update successful </span>";
                }else{
                    echo "<span style='red:green;'> Update faild </span>";
                }
            // }
        }
        }
   ?>  
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" value="<?php echo $val['facebook'] ?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" value="<?php echo $val['twitter'] ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="<?php echo $val['linkedin'] ?>"class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="googleplus" value="<?php echo $val['googleplus'] ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php }} ?>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>

