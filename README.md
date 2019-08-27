# Fast-form-lib

That lib will help you to faster use html form tags

## Installation

To install my library you need to install composer

link: [getcomposer](https://getcomposer.org/) After that type request in bash(or cmd)

    composer require mar4elkin/fast-form-lib @dev

![Disabled Device Example](https://image.ibb.co/jzTJfo/composer.png)   

## Using
at first you need to connect your main file using autoloader, for example in my library it is "form_mas.php".
When your done that you can use library.

### Examples


    $obj_var= 'target="name of window"';

    $obj_text = 'some text';

    echo $form->show($obj_var);

    $obj_var = 'type ="submit" value="send"';

    echo $input->show($obj_var, $obj_text);

    $obj_var = 'rows="10" cols="45" name="text"';

    echo $textarea->show($obj_var, $obj_text);

    $obj_var = 'type ="submit" value="send"';

    $obj_text = "sfhkj";

    echo $input->show($obj_var, $obj_text);

    $obj_var = 'cols="2323245" name="text"';

    echo $textarea->show($obj_var, $obj_text);

    echo $form->show_end();

## contacts
marktamarov2001@gmail.com

### last one but not least
I am still working on the library, soon I will update readme. I want to add more examples...
And of course fix bugs. Also I'd like to test all html tags in library...


#### dead
