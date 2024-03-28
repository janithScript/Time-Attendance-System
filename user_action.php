<?php  
include_once './dbc.php';

$div = $_POST['div'];
$role = $_POST['role'];
$password = $_POST['password'];
$confirmPassword = $_POST['re-password'];

if ($password !== $confirmPassword) {
    // Passwords do not match, redirect with an error
    header("Location: user.php?error=password_mismatch");
    exit();
}

$sql = "INSERT INTO users (division, role, pwd) VALUES ('$div', '$role', '$password')";

$result = mysqli_query($connect, $sql);

if ($result) {
    header("Location: index.php?signup=success");
    exit();
} else {
    // Ensure that the script stops execution after redirection
    header("Location: index.php?signup=failed");
    exit();
}
?>
