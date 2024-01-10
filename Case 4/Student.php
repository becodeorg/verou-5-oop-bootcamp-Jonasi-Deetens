<?php
class Student
{
    private string $name;
    private int $grade;

    public function __construct(string $name, int $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrade()
    {
        return $this->grade;
    }
}