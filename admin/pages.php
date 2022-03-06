<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
<?php if(!isset($_GET['pageid']) or $_GET['pageid']==null){
            echo "<script>window.location='index.php'</script>";
        }else{
            $id = $_GET['pageid'];
         ?>
<div class="grid_10">		
  <div class="box round first grid">
    <h2> page</h2>
    <div class="block">               

        <form action="addpage.php" method="POST" >
        <table class="form">
        <?php  
			$query = "SELECT * FROM addpage where id ='$id'";
			$result = $dbCon->select($query);
			if($result){
				foreach($result as $val){
					
			?>
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input  type="text" name="name" value="<?php echo $val['name'] ?>" class="medium" />
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea  name="body" class="tinymce"><?php echo $val['body'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Update" />
                </td>
            </tr>
            <?php } }?>
        </table>
        </form>
        
    </div>
  </div>
</div>
<?php } ?>
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