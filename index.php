<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function ($class){
    require_once(str_replace('\\','/',$class . '.php'));
});

$form = new Wesley\Forms\Form();
$validator = new \Wesley\Validador\Validator();
$input = new Wesley\Campos\Input($validator);


$form->createField($input->newFieldSet());

$form->createField($input->newLabel('Nome'));
$form->createField($input->newInput('text'));

$form->createField($input->newLabel('Endereco'));

$form->addElement($input->newInput('text'));
$form->addElement($input->newInput('submit'));

$form->render();
