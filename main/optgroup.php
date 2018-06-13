<?php
   namespace Main;
   class Optgroup
   {
      public function show($obj_var)
      {

         if (preg_match("/(disabled|lable)/", $obj_var))
          {
            include MAIN .'/pattern/form_optgroup.php';

            unset($obj_var);
            return;
            exit();

          } else {

            echo "optgroup not ok";

            unset($obj_var, $obj_text);
            return false;
            exit();
          }
      }
      public function show_end()
      {
        include MAIN .'/pattern/form_optgroup_end.php';
      }
   }

 ?>
