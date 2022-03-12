<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
 <div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post</h2>
    	<?php if(!isset($_GET['viewpostId']) or $_GET['viewpostId']==null){
            echo "<script>window.location='postlist.php'</script>";
        }else{
            $postid = $_GET['viewpostId'];
        }
         ?>
                <?php  
                if(isset($_POST['submit'])){
            echo "<script>window.location='postlist.php'</script>";
                
                
    }
                
                ?>
                <!-- update php code -->
        <div class="block">               
                <?php 
                    // $id = $_GET['id'];
                    $query = "SELECT * FROM post WHERE id = '$postid' ";
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
                        <input   type="text" readonly value="<?php echo $value['title'] ?>" placeholder="Enter Post Title..." class="medium" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" readonly>
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
                        <label> Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $value['image'] ?>" width="220"  height="100" alt=""> <br>
                        <input readonly  name="image" type="file" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input readonly type="text" value="<?php echo session::get('username') ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text"  readonly value="<?php echo $value['tags'] ?>" class="medium" />
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
                        <input type="submit" name="submit" Value="Ok" />
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