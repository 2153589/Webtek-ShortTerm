<?php
    include("includes/config.php");
    
    $name = $_SESSION['name'];
    
    $sql = $conn->query("DELETE FROM users WHERE user_name = $name");

    session_destroy();

    header('location:index.html');
?>