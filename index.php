<?php
include 'db.php';

// Fetch blog posts from the database
$query = "SELECT * FROM blog_post";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to the Simple Blog</h1>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="post">
            <h2><?= $row['title'] ?></h2>
            <p><?= $row['content'] ?></p>
            <a href="view_post.php?id=<?= $row['id'] ?>">Read more</a>
        </div>
    <?php endwhile; ?>

    <a href="create_post.php">Write a New Blog Post</a>

</body>
</html>
