<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Library System</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <h2>Library Management System</h2>

    <form id="bookForm">
        <input type="text" id="title" placeholder="Book Title" required>
        <input type="text" id="author" placeholder="Author Name" required>
        <input type="text" id="category" placeholder="Category">
        <select id="status">
            <option value="Available">Available</option>
            <option value="Borrowed">Borrowed</option>
        </select>
        <button type="submit" style="grid-column: span 2;">Add Book</button>
    </form>

    <h2>Book Records</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="bookTableBody">
            </tbody>
    </table>
</div>
<script src="index.js"></script>

</body>
</html>