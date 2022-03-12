<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
 <div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post</h2>
    	<?php if(!isset($_GET['sliderId']) or $_GET['sliderId']==null){
            echo "<script>window.location='sliderlist.php'</script>";
        }else{
            $sliderid = $_GET['sliderId'];
        }
         ?>
                <?php  
                if(isset($_POST['submit'])){
                
                $title = mysqli_real_escape_string($dbCon->link, $_POST['title']);

                $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "uploade/".$unique_image;
                if($title == '' ){
                    echo "<span style='color:red;'>field must not be empty</span>";
                }else{

            if(!empty($file_name)){

                if ($file_size >1048567) {
                    echo "<span class='error'>Image Size should be less then 1MB!
                    </span>";
                    } 

                elseif (in_array($file_ext, $permited) === false) {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permited)."</span>";
                    } 
                    
                else{
                    move_uploaded_file($file_temp, $uploaded_image);
                    $upquery = "UPDATE  sliderimage  SET   title ='$title', image ='$uploaded_image'
                    WHERE id = '$sliderid'";
                    $updated_rows = $dbCon->update($upquery);
                    if ($updated_rows) {
                    echo "<span class='success'> Slider Update Successfully.
                    </span>";
                    }else {
                    echo "<span class='error'> Slider Not Update !</span>";
                    }
                
                
                
            }
        }else{
            $query = "UPDATE  sliderimage  SET title ='$title'  WHERE id = '$sliderid'";
            $updated_rows = $dbCon->update($query);
            if ($updated_rows) {
            echo "<span class='success'>Title Update Successfully.
            </span>";
            }else {
            echo "<span class='error'>Title Not Update !</span>";
            }
        }
        } 
    }
                
                ?>
                <!-- update php code -->
        <div class="block">               
                <?php 
                    // $id = $_GET['id'];
                    $query = "SELECT * FROM sliderimage WHERE id = '$sliderid' ";
                    $result = $dbCon->select($query);
                    if($result){
                        foreach($result as $value){
                
                ?>
            <form action="" method="POST" enctype="multipart/form-data">
            <table class="form">
                
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input  type="text" name="title" value="<?php echo $value['title'] ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $value['image'] ?>" width="220"  height="100" alt=""> <br>
                        <input  name="image" type="file" />
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

        <?php include 'inc/footer.php' ?>