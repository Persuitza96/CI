<?php
class calculator extends CI_Controller{
    public function plus($name1=0,$name2=0){
        echo "คำที่1 คือ :" .$name1.'<br>';
        echo "คำที่2 คิอ :" .$name2. '<br>';
        echo "ผลลัพธ์ของผลรวม :" .$name1. "+" .$name2. "คือ".$name1 ;
    }

}
?>