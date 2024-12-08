
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LexiFunAdventure - Vision Towards Bright Future</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">LexiFunAdventure</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Games</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="gametest2.html">Spell and Repeat</a></li>
              <!-- <li><a href="#">Game 2</a></li>
              <li><a href="#">Game 3</a></li> -->  
            </ul>
        </li>
		<li><a class="active" href="logout.php" >Logout</li>
        <!-- <li><a  href="contact.html">Contact</a></li> -->
		<?php
        session_start();
        if(isset($_SESSION['username'])) {
            echo '<div class="dropdown">';
            echo '<button class="dropbtn">Welcome, '.$_SESSION['username'].
			'<i class="bi bi-chevron-down"></i></button>';
            echo '<div class="dropdown-content">';
            echo '<a href="logout.php">Logout</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
	    <?php
          // session_start();
          // if(isset($_SESSION['username'])) {
            // echo '<div class="dropdown">';
            // echo '<button class="dropbtn">Welcome, '.$_SESSION['username'].' <i class="bi bi-chevron-down"></i></button>';
            // echo '<div class="dropdown-content">';
            // echo '<a href="logout.php">Logout</a>';
            // echo '</div>';
            // echo '</div>';
          // }
        // ?>
    </nav><!-- .navbar -->

    
    </div>
   </header>
   <!-- End Header -->

   <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Learning Today,<br>Leading Tomorrow</h1>
        <h2>Empowering Youth From Dyslexia</h2>
        <a href="#" class="btn-get-started">Games</a>
      </div>
  </section><!-- End Hero -->
    
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <video autoplay width="800px" height="500px">
				<source src="Frustrated Boy - Surprise Math Test.mp4" type="video/mp4"/>
			</video>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>What is Dyslexia?</h3>
            <p class="">
              Dyslexia is a brain disorder that makes it difficult to recognize phonemes, 
              which are the basic sounds of speech. This can make it difficult to connect the 
              sound to the letter symbol for that sound, and to blend sounds into words.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> According to research, 5–20% of people worldwide are Dyslexic.</li>
              <li><i class="bi bi-check-circle"></i> In primary school children in India, 10–15% of Indian children are dyslexic.</li>
              <li><i class="bi bi-check-circle"></i> While there's no cure for dyslexia, most children with dyslexia can succeed in school with tutoring or a specialized education program. Early assessment and intervention can result in the best outcome.</li>
            </ul>
            <p>
              And We provide a little a Help through games to those who are the victims of this disease. 
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5391030" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Games</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Treatments Going on</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Games</h2>
          <p>Popular Games</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="letter-formation.png" class="img-fluid" alt="...">
              <div class="course-content">
                

                <h3><a href="course-details.html">Letter Writing Practice</a></h3>
                <p>The goal of the game is to embark on a letter exploration adventure, where students can practice writing letters while overcoming challenges in a playful environment.</p>
                
                  
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="game.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>

                <h3><a href="course-details.html">Spelling Practice</a></h3>
                <p>Help dyslexia students improve their spelling skills in a fun and interactive way.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="pickatron.png" class="img-fluid" alt="...">
              <div class="course-content">
                

                <h3><a href="course-details.html">Decoding Practice</a></h3>
                <p>Support dyslexia students in improving decoding skills through an interactive and explorative game.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>LexiFunAdventure</h3>
            <p>
              Fergusson College, Shivajinagar <br>
              Pune, 411015<br>
              India <br><br>
              <strong>Phone:</strong> +91 8308304546<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Games</a></li>
           
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Popular Games</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Letter Writing Practice</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spelling Practice</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Decoding Practice</a></li>
            
            </ul>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.137426779889!2d73.83824257393579!3d18.522690869111877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf80982203c7%3A0xba2ba195e24b828a!2sFergusson%20College!5e0!3m2!1sen!2sin!4v1707681071935!5m2!1sen!2sin" width="100" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>LexiFunAdventure</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  
</body>
</html>
