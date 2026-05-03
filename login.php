<?php
session_start();
include 'db.php';

$saved_email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($pass, $user['password'])) {
       
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        
        setcookie("user_email", $email, time() + (86400 * 30), "/");
        
        
        $last_login = date("Y-m-d H:i:s");
        setcookie("last_login", $last_login, time() + (86400 * 30), "/");
        
        $conn->prepare("UPDATE users SET last_login = ? WHERE id = ?")->execute([$last_login, $user['id']]);

        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials.";
    }
}
?>

<form method="POST">
    <input type="email" name="email" value="<?php echo $saved_email; ?>" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>