<?php 
include './controllers/editMember.php';
include './includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Members</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="./css/members.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php
    include './navbar.php';
    ?>
    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <img src="assets/icons/pepicons-pop_menu.svg" alt="menu">
            </div>
        </div>
        <div class="edit-form">
            <h2>Edit Member</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?id=' . $id); ?>">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?php echo $member['name']; ?>"><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $member['email']; ?>"><br><br>
                <label for="phone">Phone:</label><br>
                <input type="text" id="phone" name="phone" value="<?php echo $member['phone']; ?>"><br><br>
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" value="<?php echo $member['address']; ?>"><br><br>
                <button type="submit">Update Member</button>
            </form>
        </div>
        <!-- =========== Scripts =========  -->
        <script src="js/main.js"></script>
</body>

</html>