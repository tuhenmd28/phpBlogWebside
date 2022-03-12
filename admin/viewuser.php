<?php include 'inc/header.php' ?>
<?php 
    $userid = session::get('userid');
    $userrole = session::get('userrole');
  
?>
<?php
if(!isset($_GET['veiwid']) or $_GET['veiwid']==null){
    echo "<script>window.location='userlist.php'</script>";
}else{
    $id = $_GET['veiwid'];
 
}
?>

<?php 
if(isset($_POST['submit'])){
    echo "<script>window.location='userlist.php'</script>";

}
?>
<?php include 'inc/sideBar.php' ?>
 <div class="grid_10">
    <div class="box round first grid">
        <h2>User Details</h2>
             
        <div class="block">               
                <?php  
                    
                    $query = "SELECT * FROM user WHERE id = '$id'  ";
                    $result = $dbCon->select($query);
                    if($result){
                        foreach($result as $value){
                
                ?>
            <form action="" method="POST" >
            <table class="form">
                
                
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input readonly  type="text" name="name" value="<?php echo $value['name'] ?>" placeholder="Enter Post Title..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
                        <input readonly  type="text" name="username" value="<?php echo $value['userName'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input readonly  type="text" name="email" value="<?php echo $value['email'] ?>" class="medium" />
                    </td>
                </tr>
        
            
               
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details</label>
                    </td>
                    <td>
                        <textarea readonly name="details" class="tinymce">
                            <?php echo $value['details'] ?>
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