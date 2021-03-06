<?php
session_start();

$level = $_GET['level'];
$_SESSION['level'] = $level;

$name =  $_SESSION['name'];
$_SESSION['name'] = $name;

//echo strtoupper($level);
?>

<!DOCTYPE html> <html lang="en">

<head>
  <meta charset="utf-8">
  <title>EASY LEVEL</title>
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
            <h3><?php echo $name; ?></h3>
          </div>
          <div class="span8">
            <ul class="breadcrumb notop">
              <li><a href="index.html">Home</a><span class="divider">/</span></li>
              <li class="active"><?php echo strtoupper($level);?>(Instructions)</li>
            </ul>
          </div>
        </div>
      </div>

    </section>

    <section id="maincontent">
      <div class="container">
        <div class="row">

          <div class="span8">
            <!-- start article 1 -->
            <article class="blog-post">
              <div class="post-image">
              </div>
              <div class="post-heading">
                <h3 style="font-weight: bolder;">INSTRUCTIONS</h3>
              </div>
              <div class="row">
                <div class="span5">
                  <p>
                    You'll have 15 seconds to answer each question.
                  </p>
                </div>
              </div>
            </article>
            <!-- end article 1 -->
            



            <div class="pagination">
            </div>
          </div>

          <div class="span4">
            <aside>
              <div class="widget">
                <h4>Number of Questions you want to answer:</h4>
                <form action="question.php" method="get">
                <ul class="cat">
                  <div class="radio">
                    <label><input type="radio" name="optradio" value = "10">10</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio" value = "15">15</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio" value = "20">20</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio" value="25">25</label>
                  </div>
                  <br>
                  <input type="submit" value="Let's Go!" class="btn btn-color btn-rounded">
                </ul>
              </div>
            </form>
            </aside>
          </div>
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

    <!-- Template Custom Javascript File -->
    <script src="assets/js/custom.js"></script>

  </body>

  </html>
