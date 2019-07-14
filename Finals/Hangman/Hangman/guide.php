<?php
include('includes/config.php');

$sql = $conn->query("SELECT * FROM questions WHERE level='medium'");
$res = mysqli_num_rows($sql);

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Upload Dito</title>
            <link rel = "icon" type = "img/png" href = "images/Logo.png">
            <link rel="stylesheet" type="text/css" href="css/index.css" />
            <link rel="stylesheet" type="text/css" href="" />
            <link rel="stylesheet" type="text/css" href="" />

        </head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>level</th>
                <th>category</th>
                <th>text</th>
                <th>correct_answer</th>
                <th>user_answer</th>
            </tr>
        </thead>

        <?php
        if($res > 0){
            while($row = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['level'];?></td>
            <td><?php echo $row['category'];?></td>
            <td><?php echo $row['text'];?></td>
            <td><?php echo $row['correct_answer'];?></td>
            <td><?php echo $row['user_answer'];?></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>





