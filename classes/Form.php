<?php

class Form
{
    /**
     * @var array
     */
    private $fields;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $action;

    public function __construct(string $method, string $action)
    {
        $this->method = $method;
        $this->action = $action;
        $this->fields = [];
    }

    public function render()
    {
        $html = sprintf('<form method="%s" action="%s">', $this->method, $this->$this->action);
        $html .= '</form>';

        return $html;
    }
}