<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
<?php if(!isset($_GET['msgid']) or $_GET['msgid']==null){
            echo "<script>window.location='inbox.php'</script>";
        }else{
            $id = $_GET['msgid'];
        } ?>
<div class="grid_10">		
  <div class="box round first grid">
    <h2>View Message</h2>
    <div class="block">               
     <?php  
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $to   = $formateObj->validation($_POST['toEmail']);
            $from = $formateObj->validation($_POST['FromEmail']);
            $sub  = $formateObj->validation($_POST['subject']);
            $msg  = $formateObj->validation($_POST['message']);
       $sendmail = mail($to,$sub,$msg,$from);
       if($sendmail){
           echo "<h4 style='color:green;'>Mail Send Successfully</h4>";
        }else{
           echo "<h4 style='color:red;'>Mail Send faild</h4>";

       }
    } 
            
  ?>
        <form action="" method="POST" >
    	<?php 
                    $query = "SELECT * FROM contact  where id='$id'";
                    $result = $dbCon->select($query);
                    if($result){
                        foreach($result as $value){
                
                ?>
        <table class="form">
            
            <tr>
                <td>
                    <label>TO</label>
                </td>
                <td>
                    <input  type="text " readonly name="toEmail" value="<?php echo $value['email']?>" class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>From</label>
                </td>
                <td>
                    <input  type="text " name="FromEmail" placeholder="Please Enter Your Email Address" class="medium" />
                </td>
            <tr>
                <td>
                    <label>Subsect</label>
                </td>
                <td>
                    <input  type="text " name="subject" placeholder="Please Enter Subject " class="medium" />
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                        <label>Message</label>
                    </td>
                    <td>
                        <textarea   class="tinymce" name="message">
                            
                        </textarea>
                    </td>
                </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Send" />
                </td>
            </tr>
        </table>
        <?php }}?>
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