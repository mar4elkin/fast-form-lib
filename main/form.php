<?php
   namespace Main;
   
   class Form {
    
      public function show($obj_var="", $obj_css="") {
      
            if (preg_match("/(action|autocomplete|enctype|method|name|novalidate|target)/", $obj_var)) {

                  include MAIN .'/pattern/form_shab.php';
            
                  return;
            
                  exit();
                  

            } else {
               
                  $debug = new Debug;
                  $debug_arr = $debug->debug_arr_status();
           
                  if ($debug_arr[0] == 'T') {
                     $debug->form_error('Form');
                  }

                  unset($obj_var, $obj_css);

                  return false;

                  exit();
            }

      }

      public function blank() {

         $obj_var = "";

         $obj_css = "width:350px;margin:auto;border-radius:20px 20px 20px 20px;border:1px solid black;margin-top:20px;";
         
         include MAIN . '/pattern/form_shab.php';

         return;

         exit();

      }

      public function show_end() {

        include MAIN .'/pattern/form_end.php';
      
      }
   }

 ?>
