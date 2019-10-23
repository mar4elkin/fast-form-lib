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
   
// описание типов и соодение с фермой:

   // html types:

      $form      = (Factory::getClass('form'));
      $input     = (Factory::getClass('input'));
      $button    = (Factory::getClass('button'));
      $lable     = (Factory::getClass('lable'));
      $legend    = (Factory::getClass('legend'));
      $fieldset  = (Factory::getClass('fieldset'));
      $optgroup  = (Factory::getClass('optgroup'));
      $option    = (Factory::getClass('option'));
      $select    = (Factory::getClass('select'));
      $textarea  = (Factory::getClass('textarea'));
    
   // init debug:

      $debug     = (Factory::getClass('debug'));      


 ?>
