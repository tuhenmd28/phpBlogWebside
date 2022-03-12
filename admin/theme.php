<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Theme</h2>
               <div class="block copyblock"> 
                        <?php
                           
                            if(isset($_POST['submit'])){
                                $name = $_POST['theme'];
                                $name = mysqli_real_escape_string($dbCon->link,$_POST['theme']);
                                $query = "UPDATE themes SET theme ='$name' where id =1 ";
                                $result = $dbCon->update($query);
                                
                                if($result){
                                    echo "<h4 style='color:green;'>Theme update  successfully</h4>";
                                    // echo "<script>window.location='catlist.php'</script>";
                                    
                                }
                        }
                        
                        ?>					
                 <form method="post" action="">
                     <?php 
                     $sql = "SELECT * FROM themes where id = 1";
                     $themeRes = $dbCon->select($sql);
                     if($themeRes){
                         foreach($themeRes as $val){

                    
                     ?>
                    <table class="form">
                        <tr>
                         
                            <td>
                                <input <?php if($val['theme'] == 'default'){
                                    echo 'checked';
                                } ?> type="radio" name="theme" value="default">Default
                            </td>
                           
                        </tr>
                        <tr>
                         
                            <td>
                                <input <?php if($val['theme'] == 'green'){
                                    echo 'checked';
                                } ?> type="radio" name="theme" value="green">Green
                            </td>
                           
                        </tr>
                        <tr>
                         
                            <td>
                                <input <?php if($val['theme'] == 'red'){
                                    echo 'checked';
                                } ?> type="radio" name="theme" value="red">Red
                            </td>
                           
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Change" />
                            </td>
                        </tr>
                    </table>
                    <?php }} ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>
