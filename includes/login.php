<?php
include "header.php";
?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // TEMP login (no database yet)
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = $_POST['email'];

    // Redirect after login
    if (isset($_SESSION['redirect_after_login'])) {
        $redirect = $_SESSION['redirect_after_login'];
        unset($_SESSION['redirect_after_login']);
        header("Location: $redirect");
    } else {
        header("Location: index.php");
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <button type="submit">Login</button>
</form>

</body>
</html>
