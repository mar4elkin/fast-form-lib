<?php
  namespace Main;

  use Main\Form       as Form;
  use Main\Input      as Input;

  abstract class Factory {
    public static function getClass($class) {
      switch($class) {
        case 'color':
          return new Color();
          break;

      }
    }
  }

?>
