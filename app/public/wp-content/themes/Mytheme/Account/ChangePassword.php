<?php
// Set the page's title
$title = "Change Password";
custom_get_header();

// Set the page's layout
include 'navbar.php';
?>

<div class="container">
    <h1>Change Password</h1>
    <form method="post" action="change-password.php">
        <div class="form-group">
            <label for="old-password">Old Password:</label>
            <input type="password" name="old-password" id="old-password" class="form-control">
        </div>
        <div class="form-group">
            <label for="new-password">New Password:</label>
            <input type="password" name="new-password" id="new-password" class="form-control">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" name="confirm-password" id="confirm-password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
</div>

<?php
// Set the page's footer
include 'footer.php';
?>