<?php
require_once("Student.php");
class Group 
{
    private array $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function changeGroup(Group $group, Student $student)
    {
        $group->addStudent($student);
        $index = array_search($student, $this->students);

        if ($index !== false) {
            unset($this->students[$index]);
        }
    }

    public function getAverageGrade()
    {
        $average = 0;

        foreach ($this->students as $student) {
            if ($student instanceof Student) $average += $student->getGrade();
        }

        $average = $average / count($this->students);

        return $average;
    }
}