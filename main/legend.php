<?php
   namespace Main;
   class Legend
   {
      public function show($obj_var="", $obj_text="", $obj_css="")
      {
         if (preg_match("/(accesskey|align|title)/",$obj_var ))
         {
           include MAIN .'/pattern/form_legend.php';

           unset($obj_var, $obj_text, $obj_css);
           return;
           exit();

         } else {

           echo "legend not ok";

           unset($obj_var, $obj_text, $obj_css);
           return false;
           exit();
         }
      }
   }

 ?>
