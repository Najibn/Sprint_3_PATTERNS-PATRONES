<?php
/*
Observer
Imagine that we need to implement a mechanism to notify mentors 
that a new assignment has been submitted to Moodle.
Write a program that implements the Observer pattern 
so that each time a new submission is generated in Moodle, 
it notifies mentors of this submission.
*/
require "Moodle.php";
require "ObserverInterface.php";
require "Mentor.php";
require "Student.php";

$moodle = new Moodle();

//string $name,string $department
$mentor1  = new Mentor("Mrs mcClarren", "INTEGRA");
$mentor2  = new Mentor("Mr Joan","XARXA");

//string $name,string $course
$student1 = new Student("jordi", "PHP");
//$student2 = new Student("jose", "JAVA");

$moodle->attach($mentor1);
$moodle->attach($mentor2);
$moodle->attach($student1);
//$moodle->attach($student2);

$moodle->newSubmission("Sprint3");


?>