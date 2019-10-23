<?php
namespace Main;

 class Head extends Debug
 {

   public function show()
   {
       include MAIN .'/pattern/html_head.php';
       //unset($obj_var, $obj_text, $obj_css);
       return;
       exit();

   }
}
?>
