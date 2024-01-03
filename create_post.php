<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not authenticated
    header("Location: login.php");
    exit();
}

include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Blog Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Create a New Blog Post</h1>

    <form action="create_post_process.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="content">Content:</label>
        <textarea name="content" rows="10" required></textarea>

        <button type="submit">Publish Post</button>
    </form>
    <!-- In your navigation or user profile area -->
    <a href="logout.php">Logout</a>

</body>
</html>
