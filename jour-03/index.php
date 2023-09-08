<?php
require('class/Student.php');
require('class/Grade.php');
require('class/Room.php');
require('class/Floor.php');

$object = new Student();
$objectPara = new Student(1,10,'h@gmail.com','john do',new Datetime("1990-01-02") ,'male');

echo $object->id;
echo $object->email;
echo $objectPara->email;
$objectPara->birthdate;

$roomOne = new Room();
echo $roomOne->id;
$roomTwo = new Room(1,1,'Salle RDC',90);
echo $roomTwo->capacity;
echo $roomTwo->name;


?>