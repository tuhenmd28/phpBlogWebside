<?php

	include "../lib/session.php";
	// var_dump(session::get("login"));
	session::checksession();

?>
<?php include "../lib/Database.php";?>
<?php 
$dbCon =new Database();

?>

<?php if(!isset($_GET['depaid']) or $_GET['depaid']==null){
            echo "<script>window.location='index.php'</script>";
        }else{
            $id = $_GET['depaid'];
            
            $sql = "DELETE FROM  addpage WHERE id = '$id' ";
            $res = $dbCon->delete($sql);
            if($res){
                echo " <script> alert('page Deleted Successfully');</script>";
                echo " <script>window.location = 'index.php'</script>";
            }else{
                echo " <script>alert('page not Deleted ')</script>";
                echo " <script>window.location = 'index.php'</script>";
            }

        }    
         ?>
        