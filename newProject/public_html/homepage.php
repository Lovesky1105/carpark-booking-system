
<html>
    <head>
        <title> Home Page </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="font.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <!--end vendor css-->
        
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        
        <style>
            
            .rbox{
      border: 1px solid;
      padding: 10px;
      box-shadow: 5px 10px;
      box-sizing: border-box;
      background-color:#ff9999;
      margin-top: 50px;
      margin-left:  10px;
      margin-right: 10px;
  }

  .wbox{
      border: 1px solid;
      padding: 10px;
      box-shadow: 5px 10px;
      box-sizing: border-box;
      background-color:#ffffff;
      margin-top: 50px;
      margin-left:  10px;
      margin-right: 10px;
  }
  
  .buttons{
    width:180px;
    height:30px;
    font-size: 10px;
  }
        </style>
        
    </head>
    <body class="body">
       <!--header start-->
        
                
        <?php
        include 'userHeader.html';
        include 'userHeader.html';
        ?>
        
            <!--header end-->
            
            
            <!--body start-->
            
            <!-- ======= Hero Section ======= -->
        <section id="hero">
          <div class="hero-container"  data-aos="fade-up">
            <h1>Inti booking carpark system</h1>
           <h2>Welcome to Inti collage carpark booking system. To place your booking, click on booking button.</h2>
          </div>
        </section><!-- End Hero -->
            
        
    <section id="about" class="about">    
        <div class="container">
        <div class="wbox" style="margin-top: 50px;">
           <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <img class="img" src="assets/projectIMG/basketball.jpg" alt="basketball court"/><br>
            <button class="buttons" onclick="myFunction()">Click me to keep up description</button>
            
            <div id="bball">
            In Inti international collage Penang we also have basketball court to let student play basketball and relax.
            </div>
           </div>
        </div>
            
        <div class="rbox" >
             <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <img class="img" src="assets/projectIMG/biolab.jpg" alt="Biology Lab"/><br>
            <button class="buttons" onclick="myFunction2()">Click me to keep up description</button>

            <div id="biolab">
                In Inti international collage Penang we also have Bio lab to let student do their experiment.
                </div>
            </div>
        </div>
  
        <div class="wbox">
          
            <img class="img" src="assets/projectIMG/masscom.jpg" alt="masscom"/><br>
            <button class="buttons" onclick="myFunction3()">Click me to keep up description</button>
            <div id="masscom">
            In Inti international collage Penang we also have mass com room to let student learning and do their research.
            </div>
           
        </div>
        </div>
    </section>
            
          <!--footer-->
       <div class="header" style="margin-top: 10px;">
            <div class="box" id="outer">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/" class="inner"><i class="fa fa-facebook"></i>Facebook</a>
                <a href="https://twitter.com/login" class="inner"><i class="fa fa-twitter fa-lg"></i>Twitter</a>
                <a href="https://www.instagram.com/" class="inner"><i class="fa fa-instagram"></i>Instagram</a>
            </div>
       </div>  
        
       
       
       <!--footer end-->
        <!--body end-->
        <script>
            function myFunction() {
              var x = document.getElementById("bball");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            
            function myFunction2() {
              var x = document.getElementById("biolab");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            
            function myFunction3() {
              var x = document.getElementById("masscom");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            
        </script>
        
        <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
        
    </body>
</html>
