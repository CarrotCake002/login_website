<?php
require_once 'header.php';

if (isset($_SESSION['sessionUser'])) {
    //Connect to DB
    require 'database.php';

    $username = $_SESSION['sessionUser'];

    $sql = "DELETE FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../register.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    session_destroy();
    header("Location: ../index.php?success=accountdeleted");
    exit();
} else {
    header("Location: ../index.php?error=unexistingaccount");
        exit();
}