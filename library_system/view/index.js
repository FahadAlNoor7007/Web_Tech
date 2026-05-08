$(document).ready(function() {
    
    fetchBooks();

   
    $("#bookForm").submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: "../handler.php", 
            type: "POST",
            data: {
                action: 'add',
                title: $("#title").val(),
                author: $("#author").val(),
                category: $("#category").val(),
                status: $("#status").val()
            },
            success: function(response) {
                alert("Book is Added Succesfully");
                $("#bookForm")[0].reset();
                fetchBooks(); 
            }
        });
    });

    function fetchBooks() {
        $.ajax({
            url: "../handler.php",
            type: "GET",
            data: { action: 'fetch' },
            success: function(data) {
                let books = JSON.parse(data);
                let rows = "";
                if(books.length === 0) {
                    rows = "<tr><td colspan='5' style='text-align:center;'>No Book is Available</td></tr>";
                } else {
                    books.forEach(book => {
                        rows += `<tr>
                            <td>${book.title}</td>
                            <td>${book.author}</td>
                            <td>${book.category}</td>
                            <td>${book.status}</td>
                            <td><button class="btn-delete" onclick="deleteBook(${book.id})">Delete</button></td>
                        </tr>`;
                    });
                }
                $("#bookTableBody").html(rows);
            }
        });
    }

    window.deleteBook = function(id) {
        if(confirm("Are ou sure?")) {
            $.ajax({
                url: "../handler.php",
                type: "POST",
                data: { action: 'delete', id: id },
                success: function() {
                    fetchBooks(); 
                }
            });
        }
    }
});