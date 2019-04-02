<?php
namespace serhii;

class Driver extends Worker4
{
    private $experience;
    private $category;

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function __construct(
        string $name = null,
        float $age = null,
        float $salary = null,
        float $experience = null,
        string $category = 'A'
    )
    {
        parent::__construct($name, $age, $salary);

        $this->experience = $experience;
        $this->category = $category;
    }

}