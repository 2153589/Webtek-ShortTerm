<?php
include('includes/config.php');

$answer = $conn->real_escape_string($_POST['ans']);
$level = $_SESSION['level'];
$id = $_SESSION['id'];

$sql = $conn->prepare("INSERT INTO users (`user_answer`,`q_id`) VALUES (?,?)");
$sql->bind_param("si",$answer,$id);

if($sql->execute()){
    echo "PUMASOK";
}
?>