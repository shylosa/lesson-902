<?php
namespace serhii;

class Student extends User
{
    private $stipend;
    private $course;

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course): void
    {
        $this->course = $course;
    }

    /**
     * @return float
     */
    public function getStipend(): float
    {
        return $this->stipend;
    }

    /**
     * @param float $stipend
     */
    public function setStipend(float $stipend): void
    {
        $this->stipend = $stipend;
    }

    public function __construct(string $name = null, float $age = null, float $stipend = null, int $course = null)
    {
        parent::__construct($name, $age);

        $this->stipend = $stipend;
        $this->course = $course;
    }

}