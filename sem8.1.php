<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true ){
    header("location: index2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" />
    <title>Squad library</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- navbar -->
      <?php include 'nav.php' ?>

      <!-- years -wise Questions -->
      <div class="container">
        <h1 class="explore-heading text-center mb-3">2017-2018</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2017-2018/ANALYSIS-AND-DESIGN-OF-HYDRAULIC-STRUCTURES-NCE052.pdf" class="pdf-link" target="_blank">ANALYSIS-AND-DESIGN-OF-HYDRAULIC-STRUCTURES-NCE052.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2017-2018/DATA-COMPRESSION-NCS085-1.pdf" class="pdf-link" target="_blank">DATA-COMPRESSION-NCS085-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2017-2018/DIGITAL-IMAGE-PROCESSING-NCS801-1.pdf" class="pdf-link" target="_blank">DIGITAL-IMAGE-PROCESSING-NCS801-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2017-2018/EARTHQUAKE-RESISTANT-DESIGN-OF-STRUCTURES-NCE064.pdf" class="pdf-link" target="_blank">EARTHQUAKE-RESISTANT-DESIGN-OF-STRUCTURES-NCE064.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/ELECTRICAL-ELECTRONICS-ENGINEERING-MATERIAL-NEE801.pdf" class="pdf-link" target="_blank">ELECTRICAL-ELECTRONICS-ENGINEERING-MATERIAL-NEE801.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/EMBEDDED-SYSTEMS-NEC803-1.pdf" class="pdf-link" target="_blank">EMBEDDED-SYSTEMS-NEC803-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/MOBILE-COMPUTING-NIT801-1.pdf" class="pdf-link" target="_blank">MOBILE-COMPUTING-NIT801-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/NON-DESTRUCTIVE-TESTING-NME065-1.pdf" class="pdf-link" target="_blank">NON-DESTRUCTIVE-TESTING-NME065-1.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/OPERATIONS-RESEARCH-NME051.pdf" class="pdf-link" target="_blank">OPERATIONS-RESEARCH-NME051.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/OPTICAL-NETWORK-NEC802.pdf" class="pdf-link" target="_blank">OPTICAL-NETWORK-NEC802.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/PATTERN-RECOGNITION-NCS080-1.pdf" class="pdf-link" target="_blank">PATTERN-RECOGNITION-NCS080-1.pdf</a>
            </div>
            <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-8/2017-2018/POWER-PLANT-ENGINEERING-NME801-1.pdf" class="pdf-link" target="_blank">POWER-PLANT-ENGINEERING-NME801-1.pdf</a>
              </div>
          </div> 
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/SATELLITE-AND-RADAR-SYSTEMS-NEC045.pdf" class="pdf-link" target="_blank">SATELLITE-AND-RADAR-SYSTEMS-NEC045.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/SATELLITE-COMMUNICATION-NEN044-1.pdf" class="pdf-link" target="_blank">SATELLITE-COMMUNICATION-NEN044-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2017-2018/TRANSPORTATION-ENGINEERING-II-NCE801-1.pdf" class="pdf-link" target="_blank">TRANSPORTATION-ENGINEERING-II-NCE801-1.pdf</a>
            </div>
            <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-8/2017-2018/WIRELESS-MOBILE-COMMUNICATION-NEC801-1.pdf" class="pdf-link" target="_blank">WIRELESS-MOBILE-COMMUNICATION-NEC801-1.pdf</a>
              </div>
          </div>  
      </div>
    
     
      <!-- Footer -->

      <?php  include 'footer.php' ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
