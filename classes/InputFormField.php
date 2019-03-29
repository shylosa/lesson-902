<?php

class InputFormField extends FormField
{
    private $type = 'text';

    public function render() : string
    {
        return sprintf('<input type = "%s" name = "%s" value="%s">', $this->type, $this->name, $this->value);

    }
}