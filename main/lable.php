<?php
   namespace Main;
   class Lable
   {
      public function show($obj_var, $obj_text)
      {

         if (preg_match("/(accesskey|for)/",$obj_var))
         {
           include $_SERVER['DOCUMENT_ROOT'] .'/lib/pattern/form_lable.php';

           unset($obj_var, $obj_text);
           return;
           exit();

         } else {

           echo "lable not ok";

           unset($obj_var, $obj_text);
           return false;
           exit();
         }

      }
   }

 ?>
