<?php

	include "../lib/session.php";
	// var_dump(session::get("login"));
	session::checksession();

?>
<?php include "../lib/Database.php";?>
<?php include "../formate/formate.php";?>
<?php 
$dbCon =new Database();

?>

<?php if(!isset($_GET['sliderId']) or $_GET['sliderId']==null){
            echo "<script>window.location='sliderlist.php'</script>";
        }else{
            $postid = $_GET['sliderId'];
            $query = "SELECT * FROM sliderimage WHERE id = $postid";
            $selectR = $dbCon->select($query);
            if($selectR){
                while($deleteImg = $selectR->fetch_assoc()){
                    $delIlnk = $deleteImg['image'];
                    unlink($delIlnk);
                }
            }


            $sql = "DELETE FROM  sliderimage WHERE id = '$postid' ";
            $res = $dbCon->delete($sql);
            if($res){
                echo " <script>alert('Data Deleted Successfully')</script>";
                echo " <script>window.location = 'sliderlist.php'</script>";
            }else{
                echo " <script>alert('Data not Deleted ')</script>";
            }

        }    
         ?>
        