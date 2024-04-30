<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Perform authentication (replace this with your actual authentication logic)
    $userid =$_POST['userid'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example authentication logic (replace with your actual logic)
    if ($userid === 'abcd' && $username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        header('Location: quiz.php'); // Redirect to the quiz page after successful login
        exit;
    } else {
        echo 'Invalid userid, username or password';
    }
}
?>
