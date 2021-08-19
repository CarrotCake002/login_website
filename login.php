<?php
    require_once 'includes/header.php';
?>

<div>
    <h1>Log in</h1>
    <p>No account? <a href="register.php">Register here</a></p>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfzjw8cAAAAADav_mY2QRi-O2-BvIYxhKNNZyNN"></script>

    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfzjw8cAAAAADav_mY2QRi-O2-BvIYxhKNNZyNN', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
                var response = document.getElementById('token_response');
                response.value = token;
            });
        });
    </script>

    <form action="includes/login-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="hidden" id="token_response" name="token_response">
        <button type="submit" name="submit">LOGIN</button>
    </form>
</div>

<?php
    require_once 'includes/footer.php';
?>