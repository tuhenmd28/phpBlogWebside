<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
 <div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post</h2>
    	<?php if(!isset($_GET['editId']) or $_GET['editId']==null){
            echo "<script>window.location='postlist.php'</script>";
        }else{
            $postid = $_GET['editId'];
         ?>
                <?php  
                if(isset($_POST['submit'])){
                
                $title = mysqli_real_escape_string($dbCon->link, $_POST['title']);
                $cat = mysqli_real_escape_string($dbCon->link, $_POST['cat']);
                $body = mysqli_real_escape_string($dbCon->link, $_POST['body']);
                $tags = mysqli_real_escape_string($dbCon->link, $_POST['tags']);
                $author = mysqli_real_escape_string($dbCon->link, $_POST['author']);
                $userid = mysqli_real_escape_string($dbCon->link, $_POST['userid']);



                $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "uploade/".$unique_image;
                if($title == '' || $cat == '' || $body == '' || $tags == '' || $author == ''  ){
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
                    $upquery = "UPDATE  post  SET  cat ='$cat', title ='$title', body ='$body', image ='$uploaded_image', author ='$author', tags ='$tags' , userid=' $userid'
                    WHERE id = '$postid'";
                    $updated_rows = $dbCon->update($upquery);
                    if ($updated_rows) {
                    echo "<span class='success'>Post Update Successfully.
                    </span>";
                    }else {
                    echo "<span class='error'>Post Not Update !</span>";
                    }
                
                
                
            }
        }else{
            $query = "UPDATE  post  SET  cat ='$cat', title ='$title', body ='$body', author ='$author', tags ='$tags', userid=' $userid'  WHERE id = '$postid'";
            $updated_rows = $dbCon->update($query);
            if ($updated_rows) {
            echo "<span class='success'>Post Update Successfully.
            </span>";
            }else {
            echo "<span class='error'>Post Not Update !</span>";
            }
        }
        } 
    }
                
                ?>
                <!-- update php code -->
        <div class="block">               
                <?php 
                    // $id = $_GET['id'];
                    $query = "SELECT * FROM post WHERE id = '$postid' order by id desc";
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
                        <input  type="text" name="title" value="<?php echo $value['title'] ?>" placeholder="Enter Post Title..." class="medium" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="cat">
                            <option >Select Catagory</option>
                            <?php 
                            $sql = "SELECT * FROM categories";
                            $result = $dbCon->select($sql);
                            if($result){
                                foreach($result as $val){
                                    
                            ?>
                            <option
                            <?php
                                if($value['cat'] == $val['id']){ ?>
                                selected
                            <?php  }
                            ?>
                            value="<?php echo $val['id'] ; ?>"> <?php echo $val['name'] ; ?></option>
                            <?php }} ?>
                        </select>
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
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text"  name="author" value="<?php echo session::get('username') ?>" class="medium" />
                        <input type="hidden"  name="userid"  value="<?php  echo session::get('userid')?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text"  name="tags"value="<?php echo $value['tags'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea  name="body" class="tinymce">
                            <?php echo $value['body'] ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
            <?php }} }?>
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