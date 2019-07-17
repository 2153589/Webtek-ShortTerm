<?php
    include("includes/config.php");

    $name = $_SESSION['name'];

    $sql = "DELETE FROM users WHERE username = $name";

    $url = "quiz.php?fname=$name";

    header("location: $url");
?>   