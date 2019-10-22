<?php
   namespace Main;
   class Textarea
   {
      public function show($obj_var="", $obj_text="", $obj_css="")
      {
         if (preg_match("/(accesskey|autofocus|cols|disabled|form|maxlenght|name|placeholder|readonly|required|rows|tabindex|wrap)/", $obj_var))
        {
         include MAIN .'/pattern/form_textarea.php';
         unset ($obj_var, $obj_text, $obj_css);
         return;
         exit();

           }else {

          echo "textarea not ok";

          unset($obj_var, $obj_text, $obj_css);
          return false;
          exit();
        }

      }
      public function blank() {

        $obj_var = "";
    
        $obj_css = "";
        
        $obj_text = "";
        
        include MAIN .'/pattern/form_textarea.php';
    
        return;
    
        exit();
    
    
       }
   }

 ?>
