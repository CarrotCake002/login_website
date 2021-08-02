<?php
require_once 'includes/header.php';

    if (isset($_SESSION['sessionId'])) {
        echo "You are logged in !";
    } else {
        echo "You are not logged in...";
    }

require_once 'includes/footer.php';