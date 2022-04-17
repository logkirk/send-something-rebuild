<?php
require_once 'include/sessions.php';
require_login($logged_in);
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'include/doc-head.php' ?>
<body>
<div class="main-content-container">
    <?php include_once 'include/header.php' ?>
    <div class="main">
        <h2>Address Book</h2>
        <div>
            <form action="users.php" method="get">
                <div class="search-bar-container">
                    <div class="search-bar">
                        <div class="flex-item">
                            <input type="text" title="Search" placeholder="Names, addresses, bio info..." name="search" required>
                        </div>
                        <button type="submit">Search</button>
                    </div>
                </div>
                <div class="users-container">
                    <div class="user">
                        <h4 class="name">User 1</h4>
                        <p>This is a short excerpt from my bio...</p>
                    </div>
                    <div class="user">
                        <h4 class="name">User 2</h4>
                        <p>This is a short excerpt from my bio...</p>
                    </div>
                    <div class="user">
                        <h4 class="name">User 3</h4>
                        <p>This is a short excerpt from my bio...</p>
                    </div>
                    <div class="user">
                        <h4 class="name">User 4</h4>
                        <p>This is a short excerpt from my bio...</p>
                    </div>
                </div>
                <div class="page-turn">

                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'include/footer.php' ?>
</body>
</html>