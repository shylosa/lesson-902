<?php
namespace serhii;

class User
{
    protected $name;
    protected $age;

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
        $this->age = $age;
    }


    public function __construct(string $name = null, float $age = null)
    {
        $this->name = $name;
        $this->age = $age;
    }

}