<?php

namespace Wesley\Forms;

class Form implements InterfaceForms
{
    private $element = [];
    private $field;

    function addElement($input)
    {
       $this->element[] = $input;
    }

    function createField($input)
    {
        echo $input;
    }

    function render()
    {
        foreach($this->element as $element) {
            echo $element;
        }
    }
}

?>