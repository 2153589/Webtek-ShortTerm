<?php
include('includes/config.php');

$name = $conn->real_escape_string($_POST['fname']);
$_SESSION['name'] = $name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home</title>
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
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet"> -->

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
</head>

  <body>
    <header>
    <!-- Navbar
      ================================================== -->
      <div class=" cbp-af-header">
        <div class="container">
          <div class="row">
            <div class="span4">
              <!-- logo -->
              <a class="logo" href="index.html">
                <div class="title">
                  <h1 style="text-align:center;">Hi <?php echo $name; ?>!</h1>
                </a>
                <!-- end logo -->
              </div>
            </div>
            <!-- end menu -->
          </div>
        </div>
      </header>
  <!-- Subhead
    ================================================== -->
    <section id="subintro">

      <div class="container">

      </div>

    </section>

    <section id="maincontent">
      <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <form action="level.php" method = "get">
          <ul class="portfolio-area da-thumbs">
            <li class="portfolio-item" data-id="id-0" data-type="web">
              <div class="span4">
                <div class="thumbnail">
                  <div class="image-wrapp">
                    <img src="assets/img/easy.jpg" alt="Portfolio name" title="" />
                    <article class="da-animate da-slideFromRight">
                    <input type="submit" value = "easy" name="level">
                       <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                     </a>
                   </article>
                  </div>
                </div>

              </div>
            </li>

            <li class="portfolio-item" data-id="id-0" data-type="brand">
              <div class="span4">
                <div class="thumbnail">
                  <div class="image-wrapp">
                    <img src="assets/img/medium.jpg" alt="Portfolio name" title="" />
                    <article class="da-animate da-slideFromRight">
                    <input type="submit" value = "medium" name="level">
                       <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                     </a>
                   </article>
                  </div>
                </div>
              </div>
            </li>
            <li class="portfolio-item" data-id="id-0" data-type="web">
              <div class="span4">
                <div class="thumbnail">
                  <div class="image-wrapp">
                    <img src="assets/img/hard.jpg" alt="Portfolio name" title="" />
                    <article class="da-animate da-slideFromRight">
                     <input type="submit" value = "hard" name="level">
                       <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                     </a>
                   </article>
                 </div>
               </div>
             </div>
           </li>




         </ul>

       </div>
</form>
     </div>
   </section>
   <br>
   <br>
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

  </body>

  </html>
