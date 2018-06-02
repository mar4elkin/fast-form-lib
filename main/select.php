<?php
   namespace Main;
   class Select
   {
      public function show($obj_var)
      {
         if (preg_match("/(accesskey|autofocus|disabled|form|multiple|name|required|size|tabindex)/", $obj_var))
         {

           include MAIN .'/pattern/form_select.php';
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
      public function show_end()
      {
        include MAIN .'/pattern/form_select_end.php';
      }
   }

 ?>
