<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: quiz.php'); // Redirect to quiz if already logged in
    exit;
}

// Check if the form is submitted for login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    // Simulate user authentication (you can replace this with your actual authentication logic)
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    $_SESSION['start_time'] = time(); // Store the start time of the session
    $_SESSION['duration'] = 600; // Session duration in seconds (10 minutes)

    header('Location: quiz.php'); // Redirect to quiz after login
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Perform authentication (replace this with your actual authentication logic)
    $userid =$_POST['userid'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example authentication logic (replace with your actual logic)
    if ($userid === 'abcd' && $username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        header('location: quiz.php'); // Redirect to the quiz page after successful login
        exit;
    } else {
        echo 'Invalid userid, username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Login</button>
    </form>
    <p>New User? <a href="register.php">Register Here</a></p>
</body>
</html>
