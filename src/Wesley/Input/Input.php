<?php

namespace Wesley\Input;

class Input implements InterfaceInputs
{
    function newInput($type)
    {
        return "<input type='{$type}' />";
    }
}
