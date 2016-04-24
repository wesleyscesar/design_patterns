<?php

namespace Wesley\Campos;

use Wesley\Validador\Validator;

class Input implements InterfaceInputs
{
    private $validator;

    function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    function newInput($type,$name)
    {
        $val = $this->validator->validar($type);
        if($val) return "<input type='{$type}' name='{$name}'/>";
    }

    function newLabel($name)
    {
        return "<label for='{$name}'>{$name}:</label>";
    }

    function newFieldSet()
    {
        return "<fieldset>";
    }
}
