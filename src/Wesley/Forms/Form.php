<?php

namespace Wesley\Forms;

class Form implements InterfaceForms
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

?>