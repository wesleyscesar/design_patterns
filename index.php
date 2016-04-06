<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function ($class){
    require_once(str_replace('\\','/',$class . '.php'));
});

$form = new Wesley\Forms\Form();
$input = new Wesley\Input\Input();

$form->addElement($input->newInput('text'));
$form->render();

$form->addElement($input->newInput('submit'));
$form->render();

