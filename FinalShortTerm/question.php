<?php
include('includes/config.php');

$level = $_SESSION['level'];
$num_question = $_GET['optradio'];


$sql = $conn->query("SELECT * FROM questions WHERE level = '$level' ORDER BY RAND() LIMIT $num_question ");

if($sql){
    $row = mysqli_fetch_array($sql);

}
?>

<!DOCTYPE html> <html lang="en">

<head>
  <meta charset="utf-8">
  <title>Questions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="stylesheet" type="text/css" href="../../css/style.css" />

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
    
</head>

<body>
    <style>
/*a{
  float: right;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.next {
  background-color: #44B8E7;
  color: white;
}
        
.previous {
  background-color: #f1f1f1;
  color: black;
}


.round {
  border-radius: 50%;
}*/
#prevNext{
  float: right;
  display: inline;
}

#prevNext a{
  padding: 5px;
  background-color:#f1f1f1;
}

#ans{
  border:1px solid black;
}
    </style>
  <header>
    <!-- Navbar
      ================================================== -->
      <div class=" cbp-af-header">
        <div class=" cbp-af-inner">
          <div class="container">
            <div class="row">

              <div class="span4">
                <!-- logo -->
                <a class="logo" href="index.html">
                  <h1>HANGMAN</h1>
                  <!-- <img src="assets/img/logo.png" alt="" /> -->
                </a>
                <!-- end logo -->
              </div>

              <div class="span8">
                <!-- top menu -->

                <!-- end menu -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </header>
  <!-- Subhead
    ================================================== -->
    <section id="subintro">

      <div class="container">
        <div class="row">
          <div class="span4">
            <h3><?php echo strtoupper($level);?></h3>
          </div>
          <div class="span8">
            <ul class="breadcrumb notop">
              <li><a href="index.html">Home</a><span class="divider">/</span></li>
              <li class="active" id="timer">  </li>
            </ul>
          </div>
        </div>
      </div>

    </section>
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span10">
            <!-- start article 1 -->
            <article class="blog-post">
                <form action="insert.php" method="post">
              <div class="post-image">
              </div>
              <div class="post-heading">
                <h3 style="font-weight: bolder;"><?php echo $row['category'];?>:</h3>
              </div>
              <div class="row">
                <div class="span8">
                  <p>
                      <?php echo $row['text'];
                  $_SESSION['id'] = $row['id'];?><p>
                  <label for ="ans"> Your Answer </label>
                  <input type="text" class="form-control" id="ans" name="ans" autofocus>
                  <input type="submit" value="Enter">
              </div>
</form>
            </article>
         </div>
        </div>
        <div id="prevNext">
         <a href="#" class="previous">&laquo; Previous</a>
         <a href="question.php?optradio=<?php echo $num_question;?>" class="next">Next &raquo;</a>
         <a href="review.php" class="next">Stop Quiz</a>
       </div>
          
      </div>
    </section>
      <!-- end article 1 -->
      <br>
      <br>
  <!-- Footer
   ================================================== -->

   <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span6">
          <p>
            &copy; Web Systems and Technologies - All right reserved
          </p>
        </div>
        <div class="span6">
          <div class="pull-right">
            <div class="credits">
              Designed by <font color="lightblue">Team Mikmik</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/portfolio/jquery.quicksand.js"></script>
    <script src="assets/js/portfolio/setting.js"></script>
    <script src="assets/js/hover/jquery-hover-effect.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/cbpAnimatedHeader.min.js"></script>
    <script src="assets/js/jquery.refineslide.js"></script>
    <script src="assets/js/jquery.ui.totop.js"></script>

    <!-- Template Custom Javascript File -->
    <script src="assets/js/custom.js"></script>
    <?php
    if($level == 'medium'){
    echo '<script>
      var timeleft = 30;
      var downloadTimer = setInterval(function(){
      document.getElementById("timer").innerHTML = timeleft + " seconds remaining";
      timeleft -= 1;
      if(timeleft <= 0){
      clearInterval(downloadTimer);
      window.location.replace("question.php");
    }
}, 1000);
    </script>';
  }else if($level == 'hard'){
      echo '<script>
      var timeleft = 15;
      var downloadTimer = setInterval(function(){
      document.getElementById("timer").innerHTML = timeleft + " seconds remaining";
      timeleft -= 1;
      if(timeleft <= 0){
      clearInterval(downloadTimer);
      window.location.replace("question.php");
    }
}, 1000);
    </script>';
    }
  ?>
  </body>

  </html>

