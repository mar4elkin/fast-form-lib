<?php
namespace Main;
 class Input
 {

   public function show($obj_var="", $obj_text="", $obj_css="")
   {

     if (preg_match("/(accept|accesskey|align|alt|autocomplete|autofocus|border|cheched|disabled|form|formaction|formenctype|formmethod|formnovalidate|formtarget|list|max|maxlenght|min|multiple|name|pattern|placeholder|readonly|required|size|src|step|tabindex|type|value)/", $obj_var))
     {
       include MAIN .'/pattern/input_shab.php';
       unset($obj_var, $obj_text, $obj_css);
       return;
       exit();


     }else {

       echo "input not ok";
       unset($obj_var, $obj_text, $obj_css);
       return false;
       exit();
     }
   }
}
?>
