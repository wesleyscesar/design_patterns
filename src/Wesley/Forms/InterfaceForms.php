<?php

namespace Wesley\Forms;

interface InterfaceForms
{
    function addElement($input);
    function createField($input);
    function render();
}
