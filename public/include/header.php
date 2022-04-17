<?php
require_once 'include/sessions.php';
$page_name = basename($_SERVER['PHP_SELF']);

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    logout();
    header('Location: index.php');
}
?>
<div class="menu">
    <a href="index.php"><h1>Send Something</h1></a>
    <a class="navlink <?= $page_name == 'index.php' ? 'current' : '' ?>" href="index.php">ABOUT</a>
    <?php if ($logged_in) { ?>
        <a class="navlink <?= $page_name == 'users.php' ? 'current' : '' ?>" href="users.php">ADDRESS BOOK</a>
        <a class="navlink <?= $page_name == 'settings.php' ? 'current' : '' ?>" href="settings.php">SETTINGS</a>
        <a class="navlink" href="<?= $page_name . '?action=logout' ?>">LOG OUT</a>
    <?php } else { ?>
        <a class="navlink <?= $page_name == 'login.php' ? 'current' : '' ?>" href="login.php">LOG IN</a>
    <?php } ?>
</div>
