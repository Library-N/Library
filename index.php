<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
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
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/Ellipse 16.svg" alt="logo">
                        </span>
                        <span class="title">Library - N</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/ic_round-home.svg" alt="home_icon">
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/fa_book.svg" alt="book_icon">
                        </span>
                        <span class="title">Books</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/f7_person-2-fill.svg" alt="member_icon">
                        </span>
                        <span class="title">Members</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/lets-icons_date-range-fill.svg" alt="loan_icon">
                        </span>
                        <span class="title">Loans</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/material-symbols_library-books.svg" alt="report_icon">
                        </span>
                        <span class="title">Report</span>
                    </a>
                </li>

                <li>
                    <a href="./auth/logout.php">
                        <span class="icon">
                            <img src="assets/icons/majesticons_logout.svg" alt="logout_icon">
                        </span>
                        <span class="title">Log out</span>
                    </a>
                </li>
                <li class="settings">
                    <a href="#">
                        <span class="icon">
                            <img src="assets/icons/uiw_setting.svg" alt="setting_icon">
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
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
                header("Location: index1.php");
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