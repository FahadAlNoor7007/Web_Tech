<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
<p>You are successfully logged in.</p>

<?php if (isset($_COOKIE['last_login'])): ?>
    <p>Your last login was on: <?php echo $_COOKIE['last_login']; ?></p>
<?php endif; ?>

<a href="logout.php">Logout</a>