<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];
    $user_name = $_POST['user_name'];
    $comment_text = $_POST['comment_text'];

    // Insert the new comment into the database
    $query = "INSERT INTO comments (post_id, user_name, comment_text) VALUES ($post_id, '$user_name', '$comment_text')";
    mysqli_query($connection, $query);

    // Redirect back to the view post page
    header("Location: view_post.php?id=$post_id");
    exit();
}
?>
