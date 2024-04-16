<?php
session_start();
$score = $_SESSION['score'] ?? 0;
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="result-container">
        <h1>Quiz Result</h1>
        <p>Your score: <?php echo $score; ?></p>
    </div>
</body>
</html>