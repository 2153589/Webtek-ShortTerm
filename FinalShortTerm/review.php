<?php
include('includes/config.php');

//$query = "select user.id, q.correct_answer,user.user_answer from users user join questions q on user.q_id = q.id where username = $name AND user.q_id = $id";
$name = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>RESULTS/REVIEW</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <!-- <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet"> -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
</head>

<body>
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
          <h3>Results or Review</h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="index.html">Home</a><span class="divider">/</span></li>
            <li class="active">Results or Review</li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span6">
          <aside>
            <div class="widget">
              <h4>QUESTIONS</h4>

            <ol>
              <?php
              $query = $conn->query("select user.id, q.text, q.correct_answer,user.user_answer from users user join questions q on user.q_id = q.id where username = '$name'");
              $res = mysqli_num_rows($query);
                  if($res>0){
                    while($row = mysqli_fetch_array($query)){
              ?>
                <li><label><strong><font size="3px;"><?php echo $row['text'];?></strong></label>
                  <p><?php echo $row['correct_answer']; ?></p>
                </li>
                    <?php }
                  }
                  ?>
              </ol>
            </div>
          </aside>
        </div>

        <!--#2-->
        <div class="span4">
          <aside>
            <div class="widget">
              <h4>ANSWERS</h4>
              <ul>
              <?php
                $query = $conn->query("select user.id, q.text, q.correct_answer,user.user_answer from users user join questions q on user.q_id = q.id where username = '$name'");
                $res = mysqli_num_rows($query);
                if($res>0){
                  while($row = mysqli_fetch_array($query)){
              ?>
                <li><label><strong><font color="
                <?php
                  if($row['user_answer']==$row['correct_answer']){
                    echo "green";                   
                  }else{
                    echo "red";
                  }
                ?>" size="3px;">
                <?php echo $row['user_answer'];?></font></strong></label></li>
                <br>

                <?php }
                }
                ?>
              </ul>
              <br>
            </div>
          </aside>
        </div>

        <!--#3-->
        <div class="span2">
          <aside>
            <div class="widget">
              <h4>SCORE</h4>
              <?php
              $sql = $conn->query("select user.id, q.text,SUM(q.score) as 'score', q.correct_answer,user.user_answer from users user join questions q on user.q_id = q.id where username = '$name' AND user.user_answer = q.correct_answer");
              $row  = mysqli_fetch_array($sql);
              
              echo $row['score'];
              ?>
            </div>
            <div class="widget">
              <h4>Try Again?</h4>
              <div id="prevNext">
         <a href="quiz.php" class="previous"> YES</a>
         <a href="exit.php" class="next">NO</a>
       </div>
            </div>
          </aside>
        </div>
    </div>
  </section>
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

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>