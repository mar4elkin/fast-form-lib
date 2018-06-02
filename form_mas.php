<?php
  use Main\Factory as Factory;

  spl_autoload_register(function($class) {
   $path = __DIR__ . '/' . strtolower(str_replace('\\', '/', $class)) . '.php';
    if (file_exists($path)) {
    require_once $path;
   } else {
  echo $path;
  }
});

define('MAIN', __DIR__);
// описание типов
   $type_form = 'form';
   $type_input = 'input';
   $type_button = 'button';
   $type_lable = 'lable';
   $type_legend = 'legend';
   $type_fieldset = 'fieldset';
   $type_optgroup = 'optgroup';
   $type_option = 'option';
   $type_select = 'select';
   $type_textarea = 'textarea';
//соодение с фермой
   $form = (Factory::getClass($type_form));
   $input = (Factory::getClass($type_input));
   $button = (Factory::getClass($type_button));
   $lable = (Factory::getClass($type_lable));
   $legend = (Factory::getClass($type_legend));
   $fieldset = (Factory::getClass($type_fieldset));
   $optgroup = (Factory::getClass($type_optgroup));
   $option = (Factory::getClass($type_option));
   $select = (Factory::getClass($type_select));
   $textarea = (Factory::getClass($type_textarea));
//test


   $obj_var= 'target="name of window"';
   $obj_text = 'some text';
   echo $form->show($obj_var, $obj_text);
   //echo $input->show('input type="radio"', 'Internet Explorer');
   $obj_var = 'size="7" name="hero';
   echo $select->show($obj_var);
   $obj_var = 'value="t1"';
   $obj_text = 'sdasdasdasd';
   echo $option->show($obj_var, $obj_text);
   echo $option->show($obj_var, $obj_text);
   echo $option->show($obj_var, $obj_text);
    echo $option->show($obj_var, $obj_text);
     echo $option->show($obj_var, $obj_text);
      echo $option->show($obj_var, $obj_text);
       echo $option->show($obj_var, $obj_text);
   echo $select->show_end();
   echo $form->show_end();



 ?>
