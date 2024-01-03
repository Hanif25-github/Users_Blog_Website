<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not authenticated
    header("Location: login.php");
    exit();
}

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id']; // Get the authenticated user ID

    // Insert the new blog post into the 'blog_posts' table
    $query = "INSERT INTO blog_post (title, content) VALUES ('$title', '$content')";
    mysqli_query($connection, $query);

    // Redirect to the home page or display a success message
    header("Location: index.php");
    exit();
}
?>
