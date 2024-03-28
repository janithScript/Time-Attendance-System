<?php  
    include_once './dbc.php';

    $div2 = $_POST['div2'];
   

    $sql = "INSERT INTO division (div_name) VALUES ('$div2')";

    $result = mysqli_query($connect, $sql);

    header("Location: index.php?signup=success");
    exit();  // Ensure that the script stops execution after redirection
?>
