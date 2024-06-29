<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="./css/style.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const successMessage = document.getElementById("success-message");
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 3000);
            }
        });
    </script>
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

        <div>
            <?php
            session_start();
            if (!isset($_SESSION['user_id'])) {
                header("Location: ./auth/login.php");
                exit();
            }

            $success_message = '';
            if (isset($_SESSION['success_message'])) {
                $success_message = $_SESSION['success_message'];
                unset($_SESSION['success_message']);
            }
            ?>
            <?php if ($success_message) : ?>
                <div id="success-message" class="success">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- =========== Scripts =========  -->
        <script src="js/main.js"></script>
</body>

</html>