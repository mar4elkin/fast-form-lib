<?php
   namespace Main;
   class Button
   {

      public function show($obj_var, $obj_text)
      {
         if (preg_match("/(accesskey|autofocus|disabled|form|formaction|formenctype|formmethod|formnovalidate|formtarget|name|type|value)/", $obj_var))
         {
           include $_SERVER['DOCUMENT_ROOT'] .'/lib/pattern/form_button.php';
           return;
           exit();

         }else {

           echo "button not ok";
           unset($obj_var, $obj_text);

           return false;
           exit();
         }
      }
   }

 ?>
