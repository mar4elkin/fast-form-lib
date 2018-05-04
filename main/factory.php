<?php
  namespace Main;

  use Main\Form       as Form;
  use Main\Input      as Input;

  abstract class Factory {
    public static function getClass($class) {
      switch($class) {
        case 'form':
          return new Form();
          break;
        case 'input':
          return new Input();
          break;
        case 'button':
         return new Button();
         break;
        case 'lable':            
          return new Lable();
          break;
        case 'legend':
          return new Legend();
          break;
        case 'fieldset':
          return new Fieldset();
          break;
        case 'optgroup':
          return new Optgroup();
          break;
        case 'option':
          return new Option();
          break;
        case 'select':
          return new Select();
          break;
        case 'textarea':
          return new Textarea();
          break;
      }
    }
  }

?>
