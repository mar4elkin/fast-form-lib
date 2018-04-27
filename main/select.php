<?php
   namespace Main;
   class Select
   {
      public function show($obj_var, $obj_text)
      {
         include_once $_SERVER['DOCUMENT_ROOT'] .'/lib/pattern/form_select.php';
         if (preg_match("/(accesskey|autofocus|disabled|form|multiple|name|required|size|tabindex)/", $obj_var))
         {
           unset($obj_var, $obj_text);
           return;
           exit();

         } else {

           echo "select not ok";

           unset($obj_var, $obj_text);
           return false;
           exit();
         }
      }
   }

 ?>
