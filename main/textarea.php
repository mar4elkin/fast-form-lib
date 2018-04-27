<?php
   namespace Main;
   class Textarea
   {
      public function show($obj_var, $obj_text)
      {
         if (preg_match("/(accesskey|autofocus|cols|disabled|form|maxlenght|name|placeholder|readonly|required|rows|tabindex|wrap)/", $obj_var))
        {
         include $_SERVER['DOCUMENT_ROOT'] .'/lib/pattern/form_textarea.php';
         unset ($obj_var, $obj_text);
         return;
         exit();

           }else {

          echo "textarea not ok";

          unset($obj_var, $obj_text);
          return false;
          exit();
        }

      }
   }

 ?>
