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
        <h1 class="explore-heading text-center mb-3">2018-2019</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2018-2019/ANTENNA-AND-WAVE-PROPAGATION-REC-051.pdf" class="pdf-link" target="_blank">ANTENNA-AND-WAVE-PROPAGATION-REC-051.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2018-2019/CONCRETE-TECHNOLOGY-RCE-052.pdf" class="pdf-link" target="_blank">CONCRETE-TECHNOLOGY-RCE-052.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2018-2019/CYBER-SECURITY-RUC-501.pdf" class="pdf-link" target="_blank">CYBER-SECURITY-RUC-501.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2018-2019/DATA-BASE-MANAGEMENT-SYSTEM-RCS-501.pdf" class="pdf-link" target="_blank">DATA-BASE-MANAGEMENT-SYSTEM-RCS-501.pdf"</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/DESIGN-ANALYSIS-OF-ALGORITHMS-RCS-502.pdf" class="pdf-link" target="_blank">DESIGN-ANALYSIS-OF-ALGORITHMS-RCS-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/DESIGN-OF-STRUCTURE-I-RCE-502.pdf" class="pdf-link" target="_blank">DESIGN-OF-STRUCTURE-I-RCE-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/DIGITAL-SIGNAL-PROCESSING-REC-503.pdf" class="pdf-link" target="_blank">DIGITAL-SIGNAL-PROCESSING-REC-503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/GEOTECHNICAL-ENGINEERING-RCE-501.pdf" class="pdf-link" target="_blank">GEOTECHNICAL-ENGINEERING-RCE-501.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/HEAT-AND-MASS-TRANSFER-RME-502.pdf" class="pdf-link" target="_blank">HEAT-AND-MASS-TRANSFER-RME-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/I.C.-ENGINES-COMPRESSORS-RME-051.pdf" class="pdf-link" target="_blank">I.C.-ENGINES-COMPRESSORS-RME-051.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/INTEGRATED-CIRCUITS-REC-501.pdf" class="pdf-link" target="_blank">INTEGRATED-CIRCUITS-REC-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/MACHINE-DESIGN-I-RME-501.pdf" class="pdf-link" target="_blank">MACHINE-DESIGN-I-RME-501.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/MANAGERIAL-ECONOMICS-RAS-501.pdf" class="pdf-link" target="_blank">MANAGERIAL-ECONOMICS-RAS-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/MANUFACTURING-SCIENCE-TECHNOLOGY-II-RM-E503.pdf" class="pdf-link" target="_blank">MANUFACTURING-SCIENCE-TECHNOLOGY-II-RM-E503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/PRINCIPLES-OF-COMMUNICATION-REC-502.pdf" class="pdf-link" target="_blank">PRINCIPLES-OF-COMMUNICATION-REC-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2018-2019/PRINCIPLES-OF-PROGRAMMING-LANGUAGES-RCS-503.pdf" class="pdf-link" target="_blank">PRINCIPLES-OF-PROGRAMMING-LANGUAGES-RCS-503.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/QUANTITY-ESTIMATION-AND-MANAGEMENT-RCE-503.pdf" class="pdf-link" target="_blank">QUANTITY-ESTIMATION-AND-MANAGEMENT-RCE-503.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2018-2019/WEB-TECHNOLOGIES-RCS-052.pdf" class="pdf-link" target="_blank">WEB-TECHNOLOGIES-RCS-052.pdf</a>
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
