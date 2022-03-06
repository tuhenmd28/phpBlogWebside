<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
<div class="grid_10">		
  <div class="box round first grid">
    <h2>Add New page</h2>
    <div class="block">               
     <?php  
            if(isset($_POST['submit'])){
            
            $name = mysqli_real_escape_string($dbCon->link, $_POST['name']);
            $body = mysqli_real_escape_string($dbCon->link, $_POST['body']);
        
            if($name == '' || $body == '' ){
                echo "<span style='color:red;'>field must not be empty</span>";
            }
                
            else{
                $query = "INSERT INTO  addpage(name , body ) VALUES ('$name',  '$body')";
                $inserted_rows = $dbCon->insert($query);
                if ($inserted_rows) {
                echo "<span class='success'>page Inserted Successfully.
                </span>";
                }else {
                echo "<span class='error'>page Not Inserted !</span>";
                }
            
            
            
        }
    } 
            
  ?>
        <form action="addpage.php" method="POST" >
        <table class="form">
            
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input  type="text" name="name" placeholder="Enter Post Title..." class="medium" />
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea  name="body" class="tinymce"></textarea>
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