<?php

abstract class FormField
{
    protected $value;
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function render();

    public function getValue() : string
    {
        return $this->name;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getName() : string
    {
        return $this->name;
    }

}