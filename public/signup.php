<?php
require_once 'include/account.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    sign_up();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'include/doc-head.php' ?>
<body>
<div style="overflow:auto">
    <?php include_once 'include/header.php' ?>
    <div class="main">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" required>
            <br>
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" required>
            <br>
            <label for="reenter-password">Re-enter password</label>
            <input type="password" placeholder="Password" name="reenter-password" required>
            <br>
            <label for="address">Address</label>
            <textarea name="address" placeholder="Enter your address exactly as it should be written on a letter." rows="4"></textarea>
            <br>
            <label for="bio">Bio</label>
            <textarea name="bio" placeholder="Say something about yourself!" rows="4"></textarea>
            <br>
            <button type="submit">Create Account</button>
            <br>
        </form>
    </div>
</div>
<?php include_once 'include/footer.php' ?>
</body>
</html>