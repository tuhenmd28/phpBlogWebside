<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css">

<?php 
 $sql = "SELECT * FROM themes where id = 1";
 $themeRes = $dbCon->select($sql);

     foreach($themeRes as $val){
        if($val['theme'] == 'default'){?>
      <link rel="stylesheet" href="themes/default.css">
      <?php   }elseif($val['theme'] == 'green'){?>
        
        <link rel="stylesheet" href="themes/green.css">
        <?php }elseif($val['theme'] == 'red'){?>
            <link rel="stylesheet" href="themes/red.css">
            
  <?php }

     }
?>