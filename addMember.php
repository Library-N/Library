<?php
include './controllers/addMember.php';
include './includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link rel="stylesheet" href="./css/members.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php
    include 'includes/navbar.php';
    ?>
    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <img src="assets/icons/pepicons-pop_menu.svg" alt="menu">
            </div>
        </div>
        <div class="add-form">
            <h2>Add Member</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="phone">Phone:</label><br>
                <input type="text" id="phone" name="phone" required><br><br>
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" required><br><br>
                <button type="submit">Add Member</button>
            </form>
        </div>
    </div>
    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>
</body>

</html>