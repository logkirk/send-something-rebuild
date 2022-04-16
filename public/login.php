<?php
include 'include/sessions.php';

$login_error = '';

if ($logged_in) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    if ($user_email == $dummy_email and $user_password == $dummy_password) {
        login();
        header('Location: users.php');
        exit();
    } else {
        $login_error = 'The email address or password provided was incorrect.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'include/doc-head.php' ?>
<body>
<div style="overflow:auto">
    <?php include 'include/header.php' ?>
    <div class="main">
        <h2>Log in</h2>
        <div class="form">
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="text" placeholder="Email" name="email" required>
                <br>
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" required>
                <br>
                <?= $login_error ? "<p class=\"form-error\">$login_error</p>" : '' ?>
                <button type="submit">Log In</button>
                <br>
                <a href="forgot-pass.php">Forgot password?</a>
            </form>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>
</html>