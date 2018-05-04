<?php
   namespace Main;
   class Form
   {
      public function show($obj_var)
      {
         if (preg_match("/(action|autocomplete|enctype|method|name|novalidate|target)/", $obj_var))
      {
         echo '<pre>';

         print_r($obj_var);

         include MAIN .'/pattern/form_shab.php';
         return;
         exit();

     } else {
        echo "form not ok";

        unset($obj_var);
        return false;
        exit();
      }

      }
      public function show_end()
      {
        include MAIN .'/pattern/form_end.php';
      }
   }

 ?>
