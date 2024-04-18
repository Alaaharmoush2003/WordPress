<?php
// Set the page's title
$title = "Forgot Password";
custom_get_header();
?>

<div class="container">
    <h1>Forgot Password</h1>
    <form method="post" action="forgot-password.php">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/Account/Login" class="btn btn-light">Go to Sign In</a>
    </form>
</div>

<?php
// Set the page's footer
include 'footer.php';
?>