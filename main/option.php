<?php
   namespace Main;
   class Option
   {
      public function show($obj_var, $obj_text)
      {
         include $_SERVER['DOCUMENT_ROOT'] .'/lib/pattern/form_option.php';

         if (preg_match("/(disabled|lable|selected|value)/", $obj_var))
         {
           unset($obj_var, $obj_text);
           return;
           exit();

         } else {

           echo "option not ok";

           unset($obj_var, $obj_text);
           return false;
           exit();
         }
      }
   }

 ?>
