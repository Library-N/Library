<?php include('./includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loans</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/loans.css">
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
            <h2>Loans</h2>
            <div class="tambahbtn">
                <a href="addMember.php"><i class="fa fa-plus"></i><b> Add Loans</b></a>
            </div>
        </div>
        <div class="btnActiveLoans">
            <a href="addMember.php"><b> Active Loans</b></a>
        </div>
        <!-- =========== Scripts =========  -->
        <script src="js/main.js"></script>
    </div>
</body>

</html>