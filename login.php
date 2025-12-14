<?php
session_start();

/* Demo credentials */
$validUser = "admin";
$validPassHash = password_hash("123456", PASSWORD_DEFAULT);

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if ($username === $validUser && password_verify($password, $validPassHash)) {
    $_SESSION["user"] = $username;
    header("Location: dashboard.php");
    exit;
}

echo "Login failed";
