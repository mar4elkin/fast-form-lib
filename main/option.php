<?php
   namespace Main;
   class Option
   {
      public function show($obj_var="", $obj_text="", $obj_css="")
      {
         include MAIN .'/pattern/form_option.php';

         if (preg_match("/(disabled|lable|selected|value)/", $obj_var))
         {
           unset($obj_var, $obj_text, $obj_css);
           return;
           exit();

         } else {

          $debug = new Debug;
          $debug_arr = $debug->debug_arr_status();
   
          if ($debug_arr[7] == 'T') {
             $debug->form_error('Option');
          }


           unset($obj_var, $obj_text, $obj_css);
           return false;
           exit();
         }
      }
      public function blank() {

        $obj_var = "";
    
        $obj_css = "";
        
        $obj_text = "";
        
        include MAIN .'/pattern/form_option.php';
    
        return;
    
        exit();
    
    
       }
   }

 ?>
