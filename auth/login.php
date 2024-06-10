<?php
include '../includes/db.php';
session_start();

$error = '';  // Initialize an error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if input is email or username
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        // Input is an email
        $sql = "SELECT * FROM users WHERE email='$username'";
    } else {
        // Input is a username
        $sql = "SELECT * FROM users WHERE username='$username'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: ../index.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LibraryAdmin</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        .input-group label.focused {
            opacity: 0;
        }
        .error {
            color: red;
            margin-bottom: 15px;
            display: none;
        }
    </style>
</head>

<body>
<div class="half left">
    <img src="../assets/images/login-removebg-preview 1.png" alt="">
    <h1>Library-N</h1>
</div>
<div class="half right">
    <h1>Log in</h1>
    <form method="post" action="">
        <div class="input-group">
            <label for="username">Username/Email</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="button" id="togglePassword">Show</button>
        </div>
        <div class="error" id="error">
            <?php if (!empty($error)) : ?>
                <?php echo $error; ?>
            <?php endif; ?>
        </div>
        <br>
        <button type="submit">Login</button>
        <p>Forgot Password? Or <a href="./register.php">Register</a></p>
        <a href="../onboarding.php">Return</a>
        <!-- <button type="submit">Register</button> -->
    </form>
</div>
<script src="../js/login.js"></script>
</body>

</html>