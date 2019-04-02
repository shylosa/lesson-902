<?php
namespace serhii;

class Worker4 extends User
{
    protected $salary;

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }


    public function __construct(string $name = null, float $age = null, float $salary = null)
    {
        parent::__construct($name, $age);

        $this->salary = $salary;
    }

}