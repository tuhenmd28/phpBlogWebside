
<?php include "../lib/Database.php";?>
<?php 
$dbCon =new Database();
?><?php

if(!isset($_GET['id']) or $_GET['id']==null){
    echo "<script>window.location='catlist.php'</script>";
}else{
    $id = $_GET['id'];
    $sql = "UPDATE categories SET valid = 0 WHERE id = $id";
    $dbCon->update($sql);
    echo "<script>window.location='catlist.php'</script>";
}

?>