<?php
include 'include/sessions.php';

$reset_msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = $_POST['email'];
    $reset_msg = 'A password reset link was sent to the email provided.';
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'include/doc-head.php' ?>
<body>
<div style="overflow:auto">
    <?php include 'include/header.php' ?>
    <div class="main">
        <h2>Reset my password</h2>
        <div class="form">
            <form action="forgot-pass.php" method="post">
                <label for="email">Email</label>
                <input type="text" placeholder="Email" name="email" required>
                <br>
                <?= $reset_msg ? "<p class=\"form-error\">$reset_msg</p>" : '' ?>
                <button type="submit">Submit reset request</button>
            </form>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>
</html>