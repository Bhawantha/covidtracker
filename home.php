<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid 19 Tracker Sri Lanka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet"/>
  <link href="css/card.css" rel="stylesheet" />

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 style="color:white"; class="logo">Covid 19 Tracker Sri Lanka</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="https://www.facebook.com/bhawanthathedesigner">The Designer</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>STAY SAFE !</h1>
          <h2>This Web Application Shows the Tracking of COVID-19 in Sri Lanka. All the data is Realtime, Collected from Health Promotion Bureau.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Show Tracking</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

      <br>
        <div class="container">
            <h2 style="text-align:center">COVID-19 Live Data in <span id="country"></span></h2>  
        </div>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
            <div class="profile-card-2"><img src="Images/mask.jpg" class="img img-responsive">
                <div class="profile-name">Active Cases</div>
                <div class="profile-username"><b><span id="active"></span></b></div>
        
            </div>
        </div>

		<div class="col-md-4">
            <div class="profile-card-2"><img src="Images/mask1.jpg" class="img img-responsive">
                <div class="profile-name">Total Cases</div>
                <div class="profile-username"><span id="cases"></span></div>
        
            </div>
        </div>

        <div class="col-md-4">
            <div class="profile-card-2"><img src="Images/mask2.jpg" class="img img-responsive">
                <div class="profile-name">Total Deaths</div>
                <div class="profile-username"><span id="death"></span></div>
        
            </div>
        </div>

        <div class="col-md-4">
            <div class="profile-card-2"><img src="Images/mask3.jpg" class="img img-responsive">
                <div class="profile-name">Recovered Cases</div>
                <div class="profile-username"><span id="recovered"></span></div>
        
            </div>
        </div>

        <div class="col-md-4">
            <div class="profile-card-2"><img src="Images/mask4.jpg" class="img img-responsive">
                <div class="profile-name">Critical Cases</div>
                <div class="profile-username"><span id="critical"></span></div>
        
            </div>
        </div>

        <div class="col-md-4">
            <div class="profile-card-2"><img src="Images/mask5.jpg" class="img img-responsive">
                <div class="profile-name">Total Test Done</div>
                <div class="profile-username"><span id="tests"></span></div>
        
            </div>
        </div>
    </div>   
</div>    

      </div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>We Do Web Developing, Desktop Applications, Projects, UI Designing, Any Kind of Graphic Designing and Branding.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>The Designer</h3>
              <p>We make it Simple, But Significant !</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>bhawanthathedesigner@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+94 767 412 222</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>The Designer</h3>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/bhawanthathedesigner">UI Designing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/bhawanthathedesigner">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/bhawanthathedesigner">Branding</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/bhawanthathedesigner">Projects</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/bhawanthathedesigner">Graphic Design</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">   

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy;  <strong><span>The Designer</span></strong>. All Rights Reserved 2021.
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="https://www.facebook.com/bhawanthathedesigner" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/bhawanthathedesigner" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script type="text/javascript">
    fetch('https://corona.lmao.ninja/v2/countries/Sri Lanka')
    .then((Response)=>{
        return Response.json();
    })

    .then((data)=>{

        document.getElementById("country").innerHTML = data.country.toLocaleString();

        document.getElementById("active").innerHTML = data.active.toLocaleString();
        document.getElementById("cases").innerHTML = data.cases.toLocaleString();
        document.getElementById("critical").innerHTML = data.critical.toLocaleString();
        document.getElementById("death").innerHTML = data.deaths.toLocaleString();
        document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
        document.getElementById("tests").innerHTML = data.tests.toLocaleString();
    })

</script>