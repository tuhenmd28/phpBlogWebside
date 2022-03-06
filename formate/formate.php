<?php 

class dateFormate{
    public function Fdate($date){
        $getdate = date("d,F,Y h:i A", strtotime($date));
        return $getdate;
    }

    public function textshorten($text,$limit=420){
        $text = $text.'   ';
        $text = substr($text,0,$limit);
        $text = substr($text,0,strrpos($text," "));

        $text = $text.".....";

      return  $text;
    }
    public function validation($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        return $data;
    }
    public function title(){
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path , '.php');
        $title = str_replace('_',' ',$title);
        if($title == 'index'){
            $title = 'Home';
        }elseif($title == 'contact'){
            $title = 'Contact';
        }
       
        return  $title = ucwords($title);
    }
}