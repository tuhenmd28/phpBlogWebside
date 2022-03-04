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

<?php if(!isset($_GET['deleteid']) or $_GET['deleteid']==null){
            echo "<script>window.location='postlist.php'</script>";
        }else{
            $postid = $_GET['deleteid'];
            $query = "SELECT * FROM post WHERE id = $postid";
            $selectR = $dbCon->select($query);
            if($selectR){
                while($deleteImg = $selectR->fetch_assoc()){
                    $delIlnk = $deleteImg['image'];
                    unlink($delIlnk);
                }
            }


            $sql = "DELETE FROM  post WHERE id = '$postid' ";
            $res = $dbCon->delete($sql);
            if($res){
                echo " <script>alert('Data Deleted Successfully')</script>";
                echo " <script>window.location = 'postlist.php'</script>";
            }else{
                echo " <script>alert('Data not Deleted ')</script>";
            }

        }    
         ?>
        