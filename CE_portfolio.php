<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignment Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.0.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Student Evaluation System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      
  </header>
  
  <main id="main">
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
     <i class="fa fa-arrow-left"><a href="index.php"></i> Back</a></button>
        <ol>
          <li>Home</li>
          <li>Assignment Details</li>
        </ol>
        <h2>Assignment Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    
    
    <!-- ======= Portfolio Details Section ======= -->

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/CE.jpg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <?php include "./db.php" ?>

          <?php
          $query ="select * from materials";
          $select_user_query = mysqli_query($conection,$query);
          $nums = mysqli_num_rows($select_user_query);
          while($res= mysqli_fetch_array($select_user_query)){

            ?>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Assignment details</h3>
              <ul>
                <li><strong>Subject Name</strong>: <?php echo $res['sub_name']; ?></li>
                <li><strong>Professor Name</strong>: <?php echo $res['prof_name']; ?></li>
                <li><strong>Branch</strong>: <?php echo $res['branch']; ?></li>
                <li><strong>Semester</strong>: <?php echo $res['sem']; ?></li>
                
              
            </div>
            <div class="portfolio-description">
              <h2><?php echo $res['description']; ?></h2>
              
            </div> 
            <a href="assets/<?php echo $res['file'];?>" download rel="noopener noreferrer" target="_self"><button class="btn btn-primary btn-sm m-l-10 waves-effect"><i class="fa fa-download"></i> Download</button></a>
            <div class="forms_buttons">
                                <label for="exampleFormControlFile1">Upload your work :</label></br>
                                <input type="file" name="file" class="form-control-file" id="material">
                                 </div>
          </div>
                         
          <?php
           }
          ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./footer.php" ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>