<?php

interface Forms
{
    function addElement($input);
    function render();
}

class Form implements Forms
{
    private $element;

    function addElement($input)
    {
        $this->element = $input;
    }

    function render()
    {
        echo $this->element;
    }
}

interface Inputs
{
    function newInput($type);
}

class Input implements Inputs
{
    function newInput($type)
    {
        return "<input type='{$type}' />";
    }
}


$form = new Form();
$input = new Input();

$form->addElement($input->newInput('text'));
$form->render();

$form->addElement($input->newInput('submit'));
$form->render();

