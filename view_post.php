<?php
include 'db.php';

// Check if a post ID is provided
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$post_id = $_GET['id'];

// Fetch the blog post and its comments from the database
$query = "SELECT * FROM blog_post WHERE id = $post_id";
$result = mysqli_query($connection, $query);
$post = mysqli_fetch_assoc($result);

if (!$post) {
    // Post not found, redirect to main page
    header("Location: index.php");
    exit();
}

// Fetch comments associated with the post
$query = "SELECT * FROM comments WHERE post_id = $post_id";
$commentsResult = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?= $post['title'] ?></h1>
    <p><?= $post['content'] ?></p>

    <h2>Comments</h2>

    <?php while ($comment = mysqli_fetch_assoc($commentsResult)): ?>
        <div class="comment">
            <p><?= $comment['user_name'] ?>: <?= $comment['comment_text'] ?></p>
        </div>
    <?php endwhile; ?>

    <!-- Add a link/button to return to the main page -->
    <a href="index.php">Return to Main Page</a>

    <!-- Add a form to allow users to submit new comments -->
    <form action="comments.php" method="post">
        <input type="hidden" name="post_id" value="<?= $id ?>">
        <label for="user_name">Your Name:</label>
        <input type="text" name="user_name" required>
        <label for="comment_text">Your Comment:</label>
        <textarea name="comment_text" required></textarea>
        <button type="submit">Submit Comment</button>
    </form>
</body>
</html>
