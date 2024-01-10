<?php
require_once("Student.php");
class Group 
{
    private array $students;

    public function __construct(Student $student)
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }
}