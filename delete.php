
<?php
    require_once 'includes/header.php';

    if (isset($_SESSION['sessionId'])):
?>
<div>
    <h1>Delete your account</h1>
    <p>Click <a href="index.php">here</a> to go back Home<br><br><br><br><br><br></p>
    <form action="includes/delete-inc.php" method="post">
        <h4>Are you sure you want to delete your account?</h4>
        <button type="submit" name="submit">YES</button>
    </form>
</div>
<?php
    else:
?>
<div>
    <h1>Delete your account</h1>
    <p>Click <a href="index.php">here</a> to go back Home<br><br><br><br><br><br></p>
    <form action="login.php" method="post">
        <h4>You are not logged in!</h4>
        <button type="submit" name="submit">Login</button>
    </form>
</div>
<?php
    endif;
    require_once 'includes/footer.php';
?>
</body>
</html>

<?php