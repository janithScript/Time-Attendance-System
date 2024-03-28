<?php
include_once './dbc.php';

if (isset($_POST['role']) && isset($_POST['password'])) {
    $role = $_POST['role'];
    $password = $_POST['password'];

    // Fetch user details from users table
    $sql = "SELECT * FROM users WHERE role = '$role'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            // User exists in the users table, check password
            if ($password === $user['pwd']) {
                // Password is correct, proceed with login
                session_start();
                $_SESSION['user'] = $user;

                // Insert login data into login table
                $sqlInsertLogin = "INSERT INTO login (name, role, pwd) VALUES ('$user[division]', '$role', '$password')";
                $resultInsertLogin = mysqli_query($connect, $sqlInsertLogin);

                if ($resultInsertLogin) {
                    header("Location: index.php");
                    exit();
                } else {
                    // Error in inserting login data into login table, redirect with an error
                    header("Location: login.php?error=sql_error");
                    exit();
                }
            } else {
                // Password is incorrect, redirect with an error
                header("Location: login.php?error=password_incorrect");
                exit();
            }
        } else {
            // User not found in the users table, redirect with an error
            header("Location: login.php?error=user_not_found");
            exit();
        }
    } else {
        // Error in the SQL query, redirect with an error
        header("Location: login.php?error=sql_error");
        exit();
    }
} else {
    // Handle the case when 'role' or 'password' keys are not set in $_POST
    header("Location: login.php?error=missing_credentials");
    exit();
}
?>
