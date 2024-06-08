<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibraryAdmin</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="assets/icons/favicon.ico">
    <script src="js/scripts.js" defer></script>
</head>

<body>
    <header>
        <img src="assets/images/logo.png" alt="LibraryAdmin Logo" class="logo">
        <h1>LibraryAdmin</h1>
        <nav>
            <a href="index.php">Dashboard</a>
            <a href="books.php">Books</a>
            <a href="members.php">Members</a>
            <a href="loans.php">Loans</a>
            <a href="reports.php">Reports</a>
            <a href="settings.php">Settings</a>
            <a href="auth/logout.php">Logout</a>
        </nav>
    </header>
    <main>