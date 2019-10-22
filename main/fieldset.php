<?php
   namespace Main;
   class Fieldset
   {

      public function show($obj_var="", $obj_text="", $obj_css="")
      {
        if (preg_match("/(disabled|form|title)/", $obj_var))
        {
          include MAIN .'/pattern/form_fieldset.php';

          unset($obj_var, $obj_text, $obj_css);
          return;
          exit();

        } else {

          echo "fieldset not ok";

          unset($obj_var, $obj_text, $obj_css);
          return false;
          exit();
        }

      }
      public function blank() {

        $obj_var = "";
    
        $obj_css = "";
        
        $obj_text = "";
        
        include MAIN .'/pattern/form_fieldset.php';
    
        return;
    
        exit();
    
    
       }
   }

 ?>
