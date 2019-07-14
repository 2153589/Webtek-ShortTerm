<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "reviewer";
        
        $conn = new mysqli($servername, $username, $password, $db_name);
        
        if($conn->connect_error){
            die("Connection to the database failed");
        }else{
            session_start();
        }

    $categ = $_POST['categ'];
    $question = $_POST['descript'];
    $answer = $_POST['ans'];
    $level = $_POST['level'];

    $sql = $conn->prepare("INSERT INTO questions (level,category,text,correct_answer) VALUES (?,?,?,?)");
    $sql->bind_param("ssss",$level,$categ,$question,$answer);
    if($sql->execute()){
        echo "<script>
            alert('DATA HAS BEEN INSERTED TO THE DATABASE');
              </script>  ";
    }else{
        echo "<script>
        alert('DI PUMASOK');
          </script>";
    }


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
    <h1>UPLOAD DITO</h1>

    <div class="categ">
        <form action="index.php" method="post">
            <h2>Category</h2>
            <br>

            <input type="radio" name="categ" id="www" value="World Wide Web">World Wide Web
            <input type="radio" name="categ" id="http" value="HTTP"> HTTP
            <input type="radio" name="categ" id="css" value="CSS"> CSS
            <input type="radio" name="categ" id="internet" value="Internet"> Internet
            <input type="radio" name="categ" id="html" value="HTML">HTML 
            <input type="radio" name="categ" id="js" value="JavaScript">JavaScript
            <input type="radio" name="categ" id="node" value="Node.js"> Node
            <input type="radio" name="categ" id="php" value="PHP">PHP
            <input type="radio" name="categ" id="jsp" value="Java Servelet">JSP
            <input type="radio" name="categ" id="bts" value="Bootstrap"> Bootstrap

            <br>
            <br>

            <h2>LEVEL</h2>

            <input type="radio" name="level" id="easy" value ="easy">easy
            <input type="radio" name="level" id="medium" value ="medium">medium
            <input type="radio" name="level" id="hard" value ="hard">hard

            <br>
            <br>
            <label for="descript">Questions</label>
            <input type="text" name="descript" id="descript" style = "height:100px; width:400px">
            
            <br>
            <br>

            <label for="ans">Correct answer</label>
            <input type="text" name="ans" id="ans">

            <input type="submit" value="SEND MO DITO">
        </form>
    </div>
</body>
</html>