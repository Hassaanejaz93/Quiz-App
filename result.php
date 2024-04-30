<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html'); // Redirect to login page if not logged in
    exit;
}

if (!isset($_SESSION['score'])) {
    header('Location: quiz.php'); // Redirect to quiz page if score is not set
    exit;
}

$score = $_SESSION['score'];
session_unset(); // Clear the session data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Quiz Result</h1>
    <p>Your score: <?php echo $score; ?></p>
    <a href="index.html">Back to Home</a>
</body>
</html>