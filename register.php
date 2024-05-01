<?php
// Register new user (you can implement your registration logic here)

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    // Process registration form data
    $username = $_POST['username'];
    // Your registration logic here...
    header('Location: login.php'); // Redirect to login after registration
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        <label for="username">Newuser:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>

