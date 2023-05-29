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
        <h1 class="explore-heading text-center mb-3">2020-2021</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2020-2021/ADVANCED-WELDING-KME-055.pdf" class="pdf-link" target="_blank">ADVANCED-WELDING-KME-055.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2020-2021/AIR-AND-NOISE-POLLUTION-CONTROL-KCE-057.pdf" class="pdf-link" target="_blank">AIR-AND-NOISE-POLLUTION-CONTROL-KCE-057.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2020-2021/COMPILER-DESIGN-KCS-502.pdf" class="pdf-link" target="_blank">COMPILER-DESIGN-KCS-502.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2020-2021/CONCRETE-TECHNOLOGY-KCE-051.pdf" class="pdf-link" target="_blank">DATA-BASE-MANAGEMENT-SYSTEM-RCS-501.pdfCONCRETE-TECHNOLOGY-KCE-051.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/CONSTITUTION-OF-INDIA-LAW-AND-ENGINEERING-KNC-501.pdf" class="pdf-link" target="_blank">CONSTITUTION-OF-INDIA-LAW-AND-ENGINEERING-KNC-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/DATA-ANALYTICS-KCS-051.pdf" class="pdf-link" target="_blank">DATA-ANALYTICS-KCS-051.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/DATABASE-MANAGEMENT-SYSTEM-KCS-501.pdf" class="pdf-link" target="_blank">DATABASE-MANAGEMENT-SYSTEM-KCS-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/DESIGN-AND-ANALYSIS-OF-ALGORITHM-KCS-503.pdf" class="pdf-link" target="_blank">DESIGN-AND-ANALYSIS-OF-ALGORITHM-KCS-503.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/DIGITAL-SIGNAL-PROCESSING-KEC-503.pdf" class="pdf-link" target="_blank">DIGITAL-SIGNAL-PROCESSING-KEC-503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/GEOTECHNICAL-ENGINEERING-KCE-501.pdf" class="pdf-link" target="_blank">GEOTECHNICAL-ENGINEERING-KCE-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/HEAT-MASS-TRANSFER-KME-501.pdf" class="pdf-link" target="_blank">HEAT-MASS-TRANSFER-KME-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/I-C-ENGINES-FUELS-AND-LUBRICATIONS-KME-054.pdf" class="pdf-link" target="_blank">I-C-ENGINES-FUELS-AND-LUBRICATIONS-KME-054.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/INDUSTRIAL-ENGINEERING-KME-503.pdf" class="pdf-link" target="_blank">INDUSTRIAL-ENGINEERING-KME-503.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/INTEGRATED-CIRCUITS-KEC-501.pdf" class="pdf-link" target="_blank">INTEGRATED-CIRCUITS-KEC-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/MACHINE-LEARNING-TECHNIQUES-KCS-055.pdf" class="pdf-link" target="_blank">MACHINE-LEARNING-TECHNIQUES-KCS-055.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2020-2021/MICROPROCESSOR-AND-MICROCONTROLLER-KEC-502.pdf" class="pdf-link" target="_blank">MICROPROCESSOR-AND-MICROCONTROLLER-KEC-502.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/OBJECT-ORIENTED-SYSTEM-DESIGN-KCS-054.pdf" class="pdf-link" target="_blank">OBJECT-ORIENTED-SYSTEM-DESIGN-KCS-054.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/OPTICAL-COMMUNICATION-KEC-058.pdf" class="pdf-link" target="_blank">OPTICAL-COMMUNICATION-KEC-058.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2020-2021/QUANTITY-ESTIMATION-AND-CONSTRUCTION-MANAGEMENT-KCE-503.pdf" class="pdf-link" target="_blank">QUANTITY-ESTIMATION-AND-CONSTRUCTION-MANAGEMENT-KCE-503.pdf</a>
              </div>
              <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2020-2021/STRENGTH-OF-MATERIAL-KME-502.pdf" class="pdf-link" target="_blank">STRENGTH-OF-MATERIAL-KME-502.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/STRUCTURAL-ANALYSIS-KCE-502.pdf" class="pdf-link" target="_blank">STRUCTURAL-ANALYSIS-KCE-502.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2020-2021/VLSI-TECHNOLOGY-KEC-053.pdf" class="pdf-link" target="_blank">VLSI-TECHNOLOGY-KEC-053.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2020-2021/WEB-TECHNOLOGY-KIT-501.pdf" class="pdf-link" target="_blank">WEB-TECHNOLOGY-KIT-501.pdf</a>
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
