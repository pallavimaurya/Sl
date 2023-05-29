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
        <h1 class="explore-heading text-center mb-3">2019-2020</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2019-2020/COMPUTER-ORGANIZATION-AND-ARCHITECTURE-KCS-302.pdf" class="pdf-link" target="_blank">COMPUTER-ORGANIZATION-AND-ARCHITECTURE-KCS-302.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2019-2020/COMPUTER-SYSTEM-SECURITY-KNC-301.pdf" class="pdf-link" target="_blank">COMPUTER-SYSTEM-SECURITY-KNC-301.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2019-2020/DATA-STRUCTURES-KCS-301.pdf" class="pdf-link" target="_blank">DATA-STRUCTURES-KCS-301.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2019-2020/DIGITAL-SYSTEM-DESIGN-KEC-302.pdf" class="pdf-link" target="_blank">DIGITAL-SYSTEM-DESIGN-KEC-302.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/DISCRETE-STRUCTURES-THEORY-OF-LOGIC-KCS-303.pdf" class="pdf-link" target="_blank">DISCRETE-STRUCTURES-THEORY-OF-LOGIC-KCS-303.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/ELECTRONIC-DEVICES-KEC-301.pdf" class="pdf-link" target="_blank">ELECTRONIC-DEVICES-KEC-301.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/ELECTRONICS-ENGINEERING-KOE-038.pdf" class="pdf-link" target="_blank">ELECTRONICS-ENGINEERING-KOE-038.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/ENGINEERING-MECHANICS-KCE-301.pdf" class="pdf-link" target="_blank">ENGINEERING-MECHANICS-KCE-301.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/FLUID-MECHANICS-FLUID-MACHINES-KME-302.pdf" class="pdf-link" target="_blank">FLUID-MECHANICS-FLUID-MACHINES-KME-302.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/FLUID-MECHANICS-KCE-303.pdf" class="pdf-link" target="_blank">FLUID-MECHANICS-KCE-303.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/MATERIALS-ENGINEERING-KME-303.pdf" class="pdf-link" target="_blank">MATERIALS-ENGINEERING-KME-303.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/MATHEMATICS-IV-KAS-302.pdf" class="pdf-link" target="_blank">MATHEMATICS-IV-KAS-302.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/NETWORK-ANALYSIS-SYNTHESIS-KEC-303.pdf" class="pdf-link" target="_blank">NETWORK-ANALYSIS-SYNTHESIS-KEC-303.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/PYTHON-PROGRAMMING-KNC-302.pdf" class="pdf-link" target="_blank">PYTHON-PROGRAMMING-KNC-302.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/SENSOR-AND-INSTRUMENTATION-KOE-034.pdf" class="pdf-link" target="_blank">SENSOR-AND-INSTRUMENTATION-KOE-034.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/SURVEYING-GEOMATICS-KCE-302.pdf" class="pdf-link" target="_blank">SURVEYING-GEOMATICS-KCE-302.pdf</a>
            </div>
          </div> 
          
          <div class="row">
            <div class="col  col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/TECHNICAL-COMMUNICATION-KAS-301.pdf" class="pdf-link" target="_blank">TECHNICAL-COMMUNICATION-KAS-301.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/THERMODYNAMICS-KME-301.pdf" class="pdf-link" target="_blank">THERMODYNAMICS-KME-301.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2019-2020/UNIVERSAL-HUMAN-VALUES-KVE-301.pdf" class="pdf-link" target="_blank">UNIVERSAL-HUMAN-VALUES-KVE-301.pdf</a>
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
