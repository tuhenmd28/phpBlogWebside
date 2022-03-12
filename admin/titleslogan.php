<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
<div class="grid_10">	
<?php 
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $permited = ['png'];
            $logoName = $_FILES['name']['name'];
            $logoSize = $_FILES['name']['size'];
            $logoTem = $_FILES['name']['tmp_name'];
            $div = explode('.',$logoName);
            $getExt = end($div);
            $msg = '';
            if($getExt){
                $sameImg = 'logo'.'.'.$getExt;
            }else{
                $sameImg = 'logo'.'.'.'png';
            }
            $uplodeImg = 'uploade/'.$sameImg;
            move_uploaded_file($logoTem,$uplodeImg);
            
            $title =mysqli_real_escape_string($dbCon->link,$_POST['title']) ;
            $des =mysqli_real_escape_string($dbCon->link,$_POST['slogan']) ;

            if(empty($title) || empty($des) ){
               $msg = "<span style='color:red;'>feild can not be empty </span>";
            }else{
         if(!empty($logoName)){
            if($logoSize>100024) {
               $msg = "<span style='color:red;'>size less then 1kB </span>";
            }elseif(in_array($getExt,$permited) == false){  
               $msg = "<span style='color:red;'>You can upload only:-"
                .implode(', ', $permited)."</span>";
            }else{
                $query = "UPDATE logotitle SET  title='$title', description='$des' WHERE id=7 ";
                $insertLogo = $dbCon->update($query);
                if($insertLogo){
                   $msg = "<span style='color:green;'> Update successful </span>";
                }else{
                   $msg = "<span style='red:green;'> Update faild </span>";
                }
                }
            }
            else{
                $query = "UPDATE logotitle SET logo='$uplodeImg', title='$title', description='$des' WHERE id=7 ";
                $insertLogo = $dbCon->update($query);
                if($insertLogo){
                   $msg = "<span style='color:green;'> Update successful </span>";
                }else{
                   $msg = "<span style='red:green;'> Update faild </span>";
                }
            }
            }
        }
     
            ?>
 <div class="box round first grid">
     <?php 
     
     $sql = "SELECT * FROM logotitle WHERE id=7";
     $result = $dbCon->select($sql);
     if($result){
         foreach($result as $val){
     ?>
  <h2>Update Site Title and Description</h2>
    <div class="block sloginblock">               
      <form action="" method="POST" enctype="multipart/form-data">
      <h3>
          <?php
          if(isset($msg)){
              echo $msg;
          }
          ?>
      </h3>
        <table class="form">					
            <tr>
                <td>
                    <label>Website Title</label>
                </td>
                <td>
                    <input type="text" value="<?php echo $val['title']?>"  name="title" class="medium" />
                </td>
            </tr>
                <tr>
                <td>
                    <label>Website Logo</label>
                </td>
                <td>
                    <img src="<?php echo $val['logo']?>" width="150" height="90" alt=""> <br>
                    <input type="file"  name="name" class="medium" />
                </td>
            </tr>
                <tr>
                <td>
                    <label>Website Slogan</label>
                </td>
                <td>
                    <input type="text" value="<?php echo $val['description']?>" name="slogan" class="medium" />
                </td>
            </tr>
                
            
                <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="submit" Value="Update" />
                </td>
            </tr>
        </table>
    </form>
</div>
<?php }} ?>
    </div>
 




</div>
<?php include 'inc/footer.php' ?>
