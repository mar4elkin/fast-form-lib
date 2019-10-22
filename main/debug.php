<?php

   namespace Main;
   class Debug {
    
 
    public function show_debug_messages($array = []){  
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        
    }

    public function form_error(){
        echo "Error";
    }
    // расписать для каждего класса и привизать к settings.php
}
 ?>
