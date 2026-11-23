<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Learn</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1><a href="index.php" style="color: white; text-decoration: none;">e-learn</a></h1>
    <nav>
        <a href="help.php">Help</a>
        <a href="about.php">About Us</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="my_courses.php">My Favourites</a>
            <a href="logout.php">Logout</a>
        <?php elseif (isset($_SESSION['admin_logged_in'])): ?>
            <a href="admin_panel.php">Admin Panel</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login / Signup</a>
            <a href="admin_login.php">Admin Login</a>
        <?php endif; ?>
    </nav>
</header>
