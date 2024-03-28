
<?php
session_start();

if (!isset($_SESSION['user'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// User is logged in, continue displaying content
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Favicon -->
   <link rel="icon" href="./dist/img/slpa.png" type="image/x-icon">
  <title>Time Attendace</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-left: 5px;
  margin-right: 5px;
  font-size: 12px;
  cursor: pointer;
}
.brand-text{
  text-shadow: #3B73BD 1px 0 10px;
}
td, th {
  border: 1px solid #383737;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #DBD3D3;
}
.device_title {
  margin-left: 10px;
}

.form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
        outline: none;
        transition: border-color 0.3s;
    }

    input:focus {
        border-color: #59B6E8;
    }

</style>

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
