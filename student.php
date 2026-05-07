<?php
header('Content-Type: application/json');

$student = array(
    "name" => "Fahad Al Noor",
    "id" => "23-52272-2",
    "department" => "Computer Science and Engineering",
    "cgpa" => "3.81"
);

echo json_encode($student);
?>