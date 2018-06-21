<?php
   namespace Main;
   class Option
   {
      public function show($obj_var="", $obj_text="", $obj_css="")
      {
         include MAIN .'/pattern/form_option.php';

         if (preg_match("/(disabled|lable|selected|value)/", $obj_var))
         {
           unset($obj_var, $obj_text, $obj_css);
           return;
           exit();

         } else {

           echo "option not ok";

           unset($obj_var, $obj_text, $obj_css);
           return false;
           exit();
         }
      }
   }

 ?>
