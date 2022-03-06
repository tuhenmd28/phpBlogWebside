<?php include 'inc/header.php' ?>
<style>
a.dstyle {
margin-left: 10px;
border: 1px solid #d2c8c8;
background: #f0f0ee;
color: #c91212;
padding: 6px 12px;
border-radius: 0px;
}</style>
<?php include 'inc/sideBar.php' ?>
<?php if(!isset($_GET['pageid']) or $_GET['pageid']==null){
            echo "<script>window.location='index.php'</script>";
        }else{
            $id = $_GET['pageid'];
        } ?>
<div class="grid_10">		
  <div class="box round first grid">
    <h2> page</h2>
     <?php  
            if(isset($_POST['submit'])){
            
            $name = mysqli_real_escape_string($dbCon->link, $_POST['name']);
            $body = mysqli_real_escape_string($dbCon->link, $_POST['body']);
        
            if($name == '' || $body == '' ){
                echo "<span style='color:red;'>field must not be empty</span>";
            }
                
            else{
                $query = "UPDATE addpage SET name='$name', body= '$body' where id = '$id'"; 
                $updaterow = $dbCon->update($query);
                if ($updaterow) {
                echo "<span class='success'>page UPDATE Successfully.
                </span>";
                }else {
                echo "<span class='error'>page Not UPDATE !</span>";
                }
            
            
            
        }
    } 
            
  ?>
    <div class="block">  
    <?php 
            $sql = "SELECT * FROM addpage where id = '$id'";
            $result = $dbCon->select($sql);
            foreach($result as $value){
     ?>             
        <form action="" method="POST" >
        <table class="form">
            
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input  type="text" name="name" value="<?php echo $value['name'] ?>" class="medium" />
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea  name="body" class="tinymce"> <?php echo $value['body'] ?> </textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="UPDATE" />
                    <a class="dstyle" onclick="return confirm('Are you sure to delete this page??')" href="deletePage.php?depaid=<?php echo $value['id'] ?>">DELETE</a>
                </td>
            </tr>
        </table>
        </form>
        <?php } ?>
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