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
        <h1 class="explore-heading text-center mb-3">2021-2022</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2021-2022/ADVANCE-WELDING-KME-055.pdf" class="pdf-link" target="_blank">ADVANCED-WELDING-KME-055.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2021-2022/APPLICATION-OF-SOFT-COMPUTING-KCS-056.pdf" class="pdf-link" target="_blank">APPLICATION-OF-SOFT-COMPUTING-KCS-056.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2021-2022/COMPILER-DESIGN-KCS-502-1.pdf" class="pdf-link" target="_blank">COMPILER-DESIGN-KCS-502.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-5/2021-2022/COMPUTER-GRAPHICS-KCS-053.pdf" class="pdf-link" target="_blank">COMPUTER-GRAPHICS-KCS-053.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/CONSTITUTION-OF-INDIA-LAW-AND-ENGINEERING-KNC-501-1.pdf" class="pdf-link" target="_blank">CONSTITUTION-OF-INDIA-LAW-AND-ENGINEERING-KNC-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/DATABASE-MANAGEMENT-SYSTEM-KCS-501-1.pdf" class="pdf-link" target="_blank">DATABASE-MANAGEMENT-SYSTEM-KCS-501-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/DESIGN-AND-ANALYSIS-OF-ALGORITHM-KCS-503-1.pdf" class="pdf-link" target="_blank">DESIGN-AND-ANALYSIS-OF-ALGORITHM-KCS-503-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/DIGITAL-SIGNAL-PROCESSING-KEC-503-1.pdf" class="pdf-link" target="_blank">DIGITAL-SIGNAL-PROCESSING-KEC-503-1.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/HEAT-AND-MASS-TRANSFER-KME-501.pdf" class="pdf-link" target="_blank">HEAT-AND-MASS-TRANSFER-KME-501.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/IC-ENGINE-FUEL-AND-LUBRICATION-KME-054.pdf" class="pdf-link" target="_blank">IC-ENGINE-FUEL-AND-LUBRICATION-KME-054.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/INDUSTRIAL-ENGINEERING-KME-503-1.pdf" class="pdf-link" target="_blank">INDUSTRIAL-ENGINEERING-KME-503-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/INTEGRATED-CIRCUITS-KEC-501-1.pdf" class="pdf-link" target="_blank">INTEGRATED-CIRCUITS-KEC-501-1.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/MACHINE-LEARNING-TECHNIQUES-KCS-055-1.pdf" class="pdf-link" target="_blank">MACHINE-LEARNING-TECHNIQUES-KCS-055-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/MICROPROCESSORS-AND-MICROCONTROLLERS-KEC-502.pdf" class="pdf-link" target="_blank">MICROPROCESSORS-AND-MICROCONTROLLERS-KEC-502.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/OBJECT-ORIENTED-SYSTEM-DESIGN-KCS-054-1.pdf" class="pdf-link" target="_blank">OBJECT-ORIENTED-SYSTEM-DESIGN-KCS-054-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2021-2022/OPTICAL-COMMUNICATION-KEC-058-1.pdf" class="pdf-link" target="_blank">OPTICAL-COMMUNICATION-KEC-058-1.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/STRENGTH-OF-MATERIALS-KME-502.pdf" class="pdf-link" target="_blank">STRENGTH-OF-MATERIALS-KME-502.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-5/2021-2022/VLSI-TECHNOLOGY-KEC-053-1.pdf" class="pdf-link" target="_blank">VLSI-TECHNOLOGY-KEC-053-1.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-5/2021-2022/WEB-TECHNOLOGY-KIT-501-1.pdf" class="pdf-link" target="_blank">WEB-TECHNOLOGY-KIT-501-1.pdf</a>
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
