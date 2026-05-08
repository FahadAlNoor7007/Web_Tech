<?php
require_once 'model/BookModel.php';

function handleAddbook($conn) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    return insertBook($conn, $title, $author, $category, $status);

}

function handleFetchBooks($conn) {
    $result = getAllBooks($conn);
    $books =[];
    while($row = mysqli_fetch_assoc($result)){
        $books[]=$row;
    }

    return json_encode($books);
}

?>