<?php
class student{
    public $name="Osman";
    public $surname;
    public $age;
}

$a= new student;

$a->surname="Can";
$a->age=13;


echo "Student Name: ". $a->name." ".$a->surname." </br> Student Age:".$a-> age;
?>  