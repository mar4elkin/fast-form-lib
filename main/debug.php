<?php

   namespace Main;
   class Debug {

    public function debug_arr_status() {

        $array = [
            'Form'      => 'TRUE',
            'Input'     => 'TRUE',
            'Button'    => 'TRUE',
            'Lable'     => 'TRUE',
            'Legend'    => 'TRUE',
            'Fieldset'  => 'TRUE',
            'Optgroup'  => 'TRUE',
            'Option'    => 'TRUE',
            'Select'    => 'TRUE',
            'Textarea'  => 'TRUE',
        ];


        $Form       = $array['Form'][0];        
        $Input      = $array['Input'][0];      
        $Button     = $array['Button'][0];     
        $Lable      = $array['Lable'][0];       
        $Legend     = $array['Legend'][0];      
        $Fieldset   = $array['Fieldset'][0];    
        $Optgroup   = $array['Optgroup'][0];    
        $Option     = $array['Option'][0];     
        $Select     = $array['Select'][0];    
        $Textarea   = $array['Textarea'][0];   

        $debug_arr_status_output = array($Form, $Input, $Button, $Lable, $Legend, $Fieldset, $Optgroup, $Option, $Select, $Textarea);
        
        return $debug_arr_status_output;
    }

    public function form_error($type_form){
        if ($type_form == 'Form'){
            echo 'error in $form->show()';
        } 
        if ($type_form == 'Input'){
            echo 'error in $imput->show()';
        } 
        if ($type_form == 'Button'){
            echo 'error in $button->show()';
        } 
        if ($type_form == 'Lable'){
            echo 'error in $lable->show()';
        } 
        if ($type_form == 'Legend'){
            echo 'error in $legend->show()';
        } 
        if ($type_form == 'Fieldset'){
            echo 'error in $fieldset->show()';
        } 
        if ($type_form == 'Optgroup'){
            echo 'error in $optgroup->show()';
        } 
        if ($type_form == 'Option'){
            echo 'error in $option->show()';
        } 
        if ($type_form == 'Select'){
            echo 'error in $select->show()';
        } 
        if ($type_form == 'Textarea'){
            echo 'error in $textarea->show()';
        } 
    }
    // расписать для каждего класса и привизать к settings.php
}

 ?>
