<?php
namespace serhii;

class Worker2
{
    private $name;
    private $age;
    private $salary;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getAge(): float
    {
        return $this->age;
    }

    /**
     * @param float $age
     */
    public function setAge(float $age): void
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

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
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    private function checkAge($age)
    {
        if ($age < 100) {
            return true;
        } else {
            return false;
        }
    }

}