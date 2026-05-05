<?php
header('Content-Type: application/json');

$student = array(
    "name" => "Abrar Ul Karim",
    "id" => "221-15-5678",
    "department" => "Computer Science and Engineering",
    "cgpa" => "3.85"
);

echo json_encode($student);
?>