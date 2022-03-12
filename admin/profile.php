<?php include 'inc/header.php' ?>
<?php 
    $userid = session::get('userid');
    $userrole = session::get('userrole');
  
?>
<?php include 'inc/sideBar.php' ?>
 <div class="grid_10">
    <div class="box round first grid">
        <h2>User Profile</h2>
                <?php  
                if(isset($_POST['submit'])){
                
                $name = mysqli_real_escape_string($dbCon->link, $_POST['name']);
                $username = mysqli_real_escape_string($dbCon->link, $_POST['username']);
                $email = mysqli_real_escape_string($dbCon->link, $_POST['email']);
                $dettails = mysqli_real_escape_string($dbCon->link, $_POST['details']);
           
        
            $query = "UPDATE  user  SET  name ='$name', userName ='$username', email ='$email', details ='$dettails'  WHERE id = '$userid'";
            $updated_rows = $dbCon->update($query);
            if ($updated_rows) {
            echo "<span class='success'>user data Update Successfully.
            </span>";
            }else {
            echo "<span class='error'>user data Not Update !</span>";
            } 
        }
         
    
            
                ?>
                <!-- update php code -->
        <div class="block">               
                <?php  
                    
                    $query = "SELECT * FROM user WHERE id = '$userid' and role = '$userrole' ";
                    $result = $dbCon->select($query);
                    if($result){
                        foreach($result as $value){
                
                ?>
            <form action="" method="POST" enctype="multipart/form-data">
            <table class="form">
                
                
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input  type="text" name="name" value="<?php echo $value['name'] ?>" placeholder="Enter Post Title..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
                        <input  type="text" name="username" value="<?php echo $value['userName'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input  type="text" name="email" value="<?php echo $value['email'] ?>" class="medium" />
                    </td>
                </tr>
        
            
               
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details</label>
                    </td>
                    <td>
                        <textarea  name="details" class="tinymce">
                            <?php echo $value['details'] ?>
                        </textarea>
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
        <script src="js/tiny-mce/jquery.tinymce.js" ></script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
           
        });
    </script>
        <?php include 'inc/footer.php' ?>