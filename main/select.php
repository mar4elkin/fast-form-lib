<?php
   namespace Main;
   class Select
   {
      public function show($obj_var="", $obj_css="")
      {
         if (preg_match("/(accesskey|autofocus|disabled|form|multiple|name|required|size|tabindex)/", $obj_var))
         {

           include MAIN .'/pattern/form_select.php';
           unset($obj_var, $obj_css);
           return;
           exit();

         } else {

          $debug = new Debug;
          $debug_arr = $debug->debug_arr_status();
   
          if ($debug_arr[8] == 'T') {
             $debug->form_error('Select');
          }

           unset($obj_var, $obj_text, $obj_css);
           return false;
           exit();
         }
      }

      public function blank() {

        $obj_var = "";
    
        $obj_css = "";
    
        
        include MAIN .'/pattern/form_select.php';
    
        return;
    
        exit();
    
    
       }

      public function show_end()
      {
        include MAIN .'/pattern/form_select_end.php';
      }
   }

 ?>
