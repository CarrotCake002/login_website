<?php
    require_once 'includes/header.php';
?>

<div>
    <h1>Logout</h1>
    <p>Want to login again? <a href="login.php">Login here!</a></p>

    <form action="includes/logout-inc.php" method="post">
        <h4>Are you sure you want to logout?</h4>
        <button type="submit" name="submit">YES</button>
    </form>
</div>

<?php
    require_once 'includes/footer.php';
?>