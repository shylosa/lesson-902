<?php

class InputFormField extends FormField
{
    private $type = 'text';

    public function __construct(string $name, string $label)
    {
        parent ::__construct($name);

        $this->label = $label;


    }

    public function render() : string
    {
        $html = '<div class = "row">';
        $html .= sprintf('<label for = "%s">%s</label>', $this->name, $this->label);
        $html .= sprintf('<input type = "%s" id = "%s" name = "%s" value="%s">',
            $this->type, $this->name, $this->value);
        $html .= '</div>';

        return $html;

    }
}