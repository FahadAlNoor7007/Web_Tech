<?php
require_once 'db_config.php';
require_once 'controller/BookController.php';

$action = $_POST['action'] ?? $_GET['action'] ?? '';

if($action == 'fetch'){
    echo handleFetchBooks($conn);
}
else if($action == 'add'){
    echo handleAddbook($conn);
}
else if($action == 'delete'){
    $id = $_POST['id'];
    echo deleteBook($conn, $id);
}
?>