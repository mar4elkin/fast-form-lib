<?php
   namespace Main;
   class Fieldset
   {

      public function show($obj_var, $obj_text)
      {
        if (preg_match("/(disabled|form|title)/", $obj_var))
        {
          include $_SERVER['DOCUMENT_ROOT'] .'/lib/pattern/form_fieldset.php';

          unset($obj_var, $obj_text);
          return;
          exit();

        } else {

          echo "fieldset not ok";

          unset($obj_var, $obj_text);
          return false;
          exit();
        }

      }
   }

 ?>
