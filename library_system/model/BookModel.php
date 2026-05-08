<?php

function getAllBooks($conn){
    $sql ="SELECT * FROM books ORDER BY id DESC ";
    return mysqli_query($conn,$sql);
}

function insertBook($conn, $title, $author, $category, $status) {
    $sql = "INSERT INTO books (title, author, category, status) 
            VALUES ('$title', '$author', '$category', '$status')";
    return mysqli_query($conn, $sql);
}

function deleteBook($conn, $id){
    $sql = "DELETE FROM books WHERE id=$id";  
    return mysqli_query($conn, $sql);
}
?>