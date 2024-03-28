
<?php
if (isset($_GET['error']) && $_GET['error'] === 'password_incorrect') {
    echo '<p style="color: red;">Incorrect password. Please try again.</p>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="./dist/img/slpa.png" type="image/x-icon">
    <title>Login_form</title>

    <style>

body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;

}
.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
}

.form-box {
    background: #fff;
    padding: 30px;
    height: 50%;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    width: 70%; /* Adjust the width as needed */
}

h2 {
    text-align: center;
    color: #1A6893;
}

form {
    display: flex;
    flex-direction: column;
}

.input-box {
    position: relative;
    margin-bottom: 20px;
}

.icon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #333;
}
select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('./dist/img/down-arrow-png-down-icon-1600.png') no-repeat right center;
            background-size: 20px;
        }
        .input-box input,
        .input-box select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
}
.input-box input:focus , .input-box select:focus{
            border-color: #1A6893; /* Change outline color on focus */
        }
button {
    background-color: #1A6893;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}
.logo img {
            max-width: 5%;
            height: auto;
        }
button:hover{
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.login-register {
    margin-top: 20px;
    text-align: center;
}

a {
    color: #1A6893;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
@media screen and (max-width: 768px) {
        /* Adjust styles for smaller screens */
        .form-box {
            width: 90%;
        }
        .logo img {
            max-width: 8%;
            height: auto;
        }
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <div class="logo">
                <img src="./dist/img/logo.jpg" alt="logo">
            </div>
            <h2>Login</h2>
            <form method="POST" action="./login_action.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <select name="role" id="role" class="form-control" placeholder="User role" required >
                        <option value="Super_Ad">Super Admin </option>
                        <option value="Administration">Administration</option>
                        <option value="Administration_clerk">Administrative Clerk</option>
                        <option value="clerk">Clerk</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?  <a href="./user.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

