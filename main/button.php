<?php
   namespace Main;
   class Button
   {

      public function show($obj_var="", $obj_text="", $obj_css="")
      {
         if (preg_match("/(accesskey|autofocus|disabled|form|formaction|formenctype|formmethod|formnovalidate|formtarget|name|type|value)/", $obj_var))
         {
           include MAIN .'/pattern/form_button.php';
           return;
           exit();

         }else {

          $debug = new Debug;
          $debug_arr = $debug->debug_arr_status();
   
          if ($debug_arr[2] == 'T') {
             $debug->form_error('Button');
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
        
        include MAIN .'/pattern/form_button.php';
    
        return;
    
        exit();
    
    
       }
   }

 ?>
