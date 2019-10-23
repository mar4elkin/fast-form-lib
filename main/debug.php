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
            echo '
                <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                    error in $form->show()
                </div>
            ';
        } 
        if ($type_form == 'Input'){
            echo '
                <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                    error in $input->show()
                </div>
            ';
            
        } 
        if ($type_form == 'Button'){
            echo '
                <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                    error in $button->show()
                </div>
            ';
        
        } 
        if ($type_form == 'Lable'){
            echo '
                <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                    error in $lable->show()
                </div>
            ';
        } 
        if ($type_form == 'Legend'){
            echo '
            <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                error in $legend->show()
            </div>
        ';
        } 
        if ($type_form == 'Fieldset'){
            echo '
            <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                error in $fieldset->show()
            </div>
        ';
        } 
        if ($type_form == 'Optgroup'){
            echo '
            <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                error in $optgroup->show()
            </div>
        ';
        } 
        if ($type_form == 'Option'){
            echo '
            <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                error in $option->show()
            </div>
        ';
        } 
        if ($type_form == 'Select'){
            echo '
            <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                error in $select->show()
            </div>
        ';
        } 
        if ($type_form == 'Textarea'){
            echo '
            <div style="position: absolute;bottom: 5px;left: 4px;" class="alert alert-danger" role="alert">
                error in $textarea->show()
            </div>
        ';
        } 
    }
}

 ?>
