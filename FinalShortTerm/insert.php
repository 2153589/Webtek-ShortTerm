<?php
include('includes/config.php');

$answer = $conn->real_escape_string($_POST['ans']);
$level = $_SESSION['level'];
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$upper = strtoupper($answer);

$sql = $conn->prepare("INSERT INTO users (`username`,`user_answer`,`q_id`) VALUES (?,?,?)");
$sql->bind_param("ssi",$name,$upper,$id);

if($sql->execute()){
  header('location:question.php');
}else{
    echo '<script> 
    alert("An error has occured please try again");
    </script>';
}


?>