<?php

namespace Wesley\Validador;

class Validator extends Request implements ValidatorInterface
{
    function validar($campo)
    {
        if($campo == "input" || $campo || "text") return true;
        return false;
    }
}