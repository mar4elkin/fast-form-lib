<?php
   namespace Main;
   class Lable
   {
      public function show($obj_var="", $obj_text="", $obj_css="")
      {

         if (preg_match("/(accesskey|for)/",$obj_var))
         {
           include MAIN .'/pattern/form_lable.php';

           unset($obj_var, $obj_text, $obj_css);
           return;
           exit();

         } else {

           echo "lable not ok";

           unset($obj_var, $obj_text, $obj_css);
           return false;
           exit();
         }

      }
      public function blank() {

        $obj_var = "";
    
        $obj_css = "";
        
        $obj_text = "";
        
        include MAIN .'/pattern/form_lable.php';
    
        return;
    
        exit();
    
    
       }
   }

 ?>
