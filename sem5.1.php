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
            <a href="BTech/Sem-5/2017-2018/ANTENNA-AND-WAVE-PROPAGATION-NEC-504.pdf" class="pdf-link" target="_blank">ANTENNA-AND-WAVE-PROPAGATION-NEC-504.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2017-2018/COMPUTER-ARCHITECTURE-NCS-505.pdf" class="pdf-link" target="_blank">COMPUTER-ARCHITECTURE-NCS-505.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2017-2018/CONTROL-SYSTEM-I-NIC-501.pdf" class="pdf-link" target="_blank">CONTROL-SYSTEM-I-NIC-501.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2017-2018/CONTROL-SYSTEM-NEE-503.pdf" class="pdf-link" target="_blank">CONTROL-SYSTEM-NEE-503.pdff</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/DATABASE-MANAGEMENT-SYSTEM-NCS-502.pdf" class="pdf-link" target="_blank">DATABASE-MANAGEMENT-SYSTEM-NCS-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/DESIGN-AND-ANALYSIS-OF-ALGORITHMS-NCS-501.pdf" class="pdf-link" target="_blank">DESIGN-AND-ANALYSIS-OF-ALGORITHMS-NCS-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/DESIGN-OF-CONCRETE-STRUCTURES-I-NCE-505.pdf" class="pdf-link" target="_blank">DESIGN-OF-CONCRETE-STRUCTURES-I-NCE-505.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/ELEMENTS-OF-POWER-SYSTEM-NEE-501.pdf" class="pdf-link" target="_blank">ELEMENTS-OF-POWER-SYSTEM-NEE-501.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/ENGINEERING-ECONOMICS-NHU-501.pdf" class="pdf-link" target="_blank">ENGINEERING-ECONOMICS-NHU-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/ENVIRONMENTAL-ENGINEERING-1-NCE-503-ECE-503.pdf" class="pdf-link" target="_blank">ENVIRONMENTAL-ENGINEERING-1-NCE-503-ECE-503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/FUNDAMENTALS-OF-ELECTROMAGNETIC-THEORY-NEC-508.pdf" class="pdf-link" target="_blank">FUNDAMENTALS-OF-ELECTROMAGNETIC-THEORY-NEC-508.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/GEOTECHNICAL-ENGINEERING-NCE-501-ECE-501.pdf" class="pdf-link" target="_blank">GEOTECHNICAL-ENGINEERING-NCE-501-ECE-501.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/HEAT-MASS-TRANSFER-NME-504.pdf" class="pdf-link" target="_blank">HEAT-MASS-TRANSFER-NME-504.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/I-C-ENGINES-COMPRESSORS-NME-505.pdf" class="pdf-link" target="_blank">I-C-ENGINES-COMPRESSORS-NME-505.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/INTEGRATED-CIRCUITS-NEC-501.pdf" class="pdf-link" target="_blank">INTEGRATED-CIRCUITS-NEC-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2017-2018/KINEMATICS-OF-MACHINES-NME-502.pdf" class="pdf-link" target="_blank">KINEMATICS-OF-MACHINES-NME-502.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/MACHINE-DESIGN-I-NME-501-EME501.pdf" class="pdf-link" target="_blank">MACHINE-DESIGN-I-NME-501-EME501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/MANAGEMENT-INFORMTION-SYSTEM-NIT-501.pdf" class="pdf-link" target="_blank">MANAGEMENT-INFORMTION-SYSTEM-NIT-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/MANUFACTURING-SCIENCE-AND-TECHNOLOGY-II-NME-503.pdf" class="pdf-link" target="_blank">MANUFACTURING-SCIENCE-AND-TECHNOLOGY-II-NME-503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2017-2018/MICROPROCESSOR-ITS-APPLICATIONS-NEE-504.pdf" class="pdf-link" target="_blank">MICROPROCESSOR-ITS-APPLICATIONS-NEE-504.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/POWER-ELECTRONICS-NEE-502.pdf" class="pdf-link" target="_blank">POWER-ELECTRONICS-NEE-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2017-2018/PRINCIPLES-OF-COMMUNICATION-NEC-502.pdf" class="pdf-link" target="_blank">PRINCIPLES-OF-COMMUNICATION-NEC-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2017-2018/PRINCIPLES-OF-PROGRAMMING-LANGUAGES-NCS-503.pdf" class="pdf-link" target="_blank">PRINCIPLES-OF-PROGRAMMING-LANGUAGES-NCS-503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2017-2018/STRUCTURAL-ANALYSIS-II-NCE-504.pdf" class="pdf-link" target="_blank">STRUCTURAL-ANALYSIS-II-NCE-504.pdf</a>
            </div>
          </div>

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2017-2018/TRANSPORTATION-ENGINEERING-I-NCE-502.pdf" class="pdf-link" target="_blank">TRANSPORTATION-ENGINEERING-I-NCE-502.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2017-2018/WEB-TECHNOLOGY-NCS-504.pdf" class="pdf-link" target="_blank">WEB-TECHNOLOGY-NCS-504.pdf</a>
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
