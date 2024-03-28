<?php  
    include_once './dbc.php';

    $div1 = $_POST['div1'];
    $sec = $_POST['sec'];

    $sql = "INSERT INTO section (division, section_name) VALUES ('$div1', '$sec')";
    
    $result = mysqli_query($connect, $sql);

    header("Location: index.php?signup=success");
    exit();  // Ensure that the script stops execution after redirection
?>
