<?php
namespace serhii;

class Worker
{
    public $name;
    public $age;
    public $salary;

    public function __construct(string $name = null, float $age = null, float $salary = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}