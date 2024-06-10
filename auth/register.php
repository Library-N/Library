<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    
    if ($password !== $repassword) {
        echo "Passwords do not match!";
        exit();
    }


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - LibraryAdmin</title>
    <link rel="stylesheet" href="../css/register.css">
    <style>
        .input-group label.focused {
            opacity: 0;
        }
    </style>
</head>

<body>
<div class="half left">
    <img src="../assets/images/login-removebg-preview 1.png" alt="">
    <h1>Library-N</h1>
</div>
<div class="half right">
    <h1>Register</h1>
    <form method="post" action="">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="button" id="togglePassword">Show</button>
        </div>
        <div class="input-group">
            <label for="repassword">Re-Password</label>
            <input type="password" id="repassword" name="repassword" required>
            <button type="button" id="togglerepassword">Show</button>
        </div>
        <br>
        <button type="submit">Register</button>
        <p>Have an account ? <a href="./login.php">Login</a></p>
    </form>
</div>
    <script src="../js/register.js"></script>
</body>

</html>