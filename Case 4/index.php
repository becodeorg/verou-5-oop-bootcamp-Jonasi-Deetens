<?php
require_once("Group.php");
require_once("Student.php");

$group1 = new Group();
$group2 = new Group();

$student1 = new Student("Kilian", 7);
$student2 = new Student("Killian", 8);
$student3 = new Student("Killlian", 8);
$student4 = new Student("Killllian", 8);
$student5 = new Student("Killlllian", 8);
$student6 = new Student("Killllllian", 10);
$student7 = new Student("Killlllllian", 10);
$student8 = new Student("Killllllllian", 10);
$student9 = new Student("Killlllllllian", 10);
$student10 = new Student("Killllllllllian", 10);

$group1->addStudent($student1);
$group1->addStudent($student2);
$group1->addStudent($student3);
$group1->addStudent($student4);
$group1->addStudent($student5);
$group1->addStudent($student6);
$group1->addStudent($student7);
$group1->addStudent($student8);
$group1->addStudent($student9);
$group1->addStudent($student10);

$student11 = new Student("Dantte", 1);
$student12 = new Student("Danttte", 1);
$student13 = new Student("Dantttte", 1);
$student14 = new Student("Danttttte", 1);
$student15 = new Student("Dantttttte", 1);
$student16 = new Student("Danttttttte", 2);
$student17 = new Student("Dantttttttte", 2);
$student18 = new Student("Danttttttttte", 2);
$student19 = new Student("Dantttttttttte", 2);
$student20 = new Student("Danttttttttttte", 3);

$group2->addStudent($student11);
$group2->addStudent($student12);
$group2->addStudent($student13);
$group2->addStudent($student14);
$group2->addStudent($student15);
$group2->addStudent($student16);
$group2->addStudent($student17);
$group2->addStudent($student18);
$group2->addStudent($student19);
$group2->addStudent($student20);

echo $group1->getAverageGrade();
echo "<br>";
echo $group2->getAverageGrade();
echo "<br>";

$group1->changeGroup($group2, $student1);
$group2->changeGroup($group1, $student20);

echo $group1->getAverageGrade();
echo "<br>";
echo $group2->getAverageGrade();
echo "<br>";