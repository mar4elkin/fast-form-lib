<?php
namespace Main;

 class Input extends Debug
 {

   public function show($obj_var="", $obj_text="", $obj_css="")
   {

     if (preg_match("/(accept|accesskey|align|alt|autocomplete|autofocus|border|cheched|disabled|form|formaction|formenctype|formmethod|formnovalidate|formtarget|list|max|maxlenght|min|multiple|name|pattern|placeholder|readonly|required|size|src|step|tabindex|type|value)/", $obj_var))
     {
       include MAIN .'/pattern/form_input.php';
       unset($obj_var, $obj_text, $obj_css);
       return;
       exit();


     }else {
      
       $debug = new Debug;
       $debug_arr = $debug->debug_arr_status();

       if ($debug_arr[1] == 'T') {
          $debug->form_error('Input');
       }

       unset($obj_var, $obj_text, $obj_css);
       return false;
       exit();
     }
   }

   public function blank() {

    $obj_var = "";

    $obj_css = "width:90%;margin:auto;margin-top:5px;margin-bottom:5px;";
    
    $obj_text = "";
    
    include MAIN .'/pattern/form_input.php';

    return;

    exit();


   }
}
?>
