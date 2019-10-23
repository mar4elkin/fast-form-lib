<?php
   namespace Main;
   class Optgroup
   {
      public function show($obj_var="", $obj_css="")
      {

         if (preg_match("/(disabled|lable)/", $obj_var))
          {
            include MAIN .'/pattern/form_optgroup.php';

            unset($obj_var, $obj_css);
            return;
            exit();

          } else {

            $debug = new Debug;
            $debug_arr = $debug->debug_arr_status();
     
            if ($debug_arr[6] == 'T') {
               $debug->form_error('Optgroup');
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
      public function show_end()
      {
        include MAIN .'/pattern/form_optgroup_end.php';
      }
   }

 ?>
