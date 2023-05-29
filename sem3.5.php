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
        <h1  class="explore-heading text-center mb-3">2021-2022</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2021-2022/ANALOG-ELECTRONICS-KOE-037.pdf" class="pdf-link"  target="_blank">ANALOG-ELECTRONICS-KOE-037.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2021-2022/BASIC-DATA-STRUCTURE-AND-ALGORITHMS-KOE-035.pdf" class="pdf-link"  target="_blank">BASIC-DATA-STRUCTURE-AND-ALGORITHMS-KOE-035.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2021-2022/COMPUTER-ORGANIZATION-AND-ARCHITECTURE-KCS-302-2.pdf" class="pdf-link"  target="_blank">COMPUTER-ORGANIZATION-AND-ARCHITECTURE-KCS-302-2.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2021-2022/COMPUTER-SYSTEM-SECURITY-KNC-301-2.pdf" class="pdf-link"  target="_blank">COMPUTER-SYSTEM-SECURITY-KNC-301-2.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/DATA-STRUCTURE-KCS-301.pdf" class="pdf-link"  target="_blank">DATA-STRUCTURE-KCS-301.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/DIGITAL-ELECTRONICS-KOE-039.pdf" class="pdf-link"  target="_blank">DIGITAL-ELECTRONICS-KOE-039.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/DISCRETE-STRUCTURES-THEORY-OF-LOGIC-KCS-303-1.pdf" class="pdf-link"  target="_blank">DISCRETE-STRUCTURES-THEORY-OF-LOGIC-KCS-303-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/ELECTRONICS-ENGINEERING-KOE-038-1.pdf" class="pdf-link"  target="_blank">ELECTRONICS-ENGINEERING-KOE-038-1.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/ENERGY-SCIENCE-AND-ENGINEERING-KOE-033.pdf" class="pdf-link"  target="_blank">ENERGY-SCIENCE-AND-ENGINEERING-KOE-033.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/ENGINEERING-MECHANICS-KOE-031.pdf" class="pdf-link"  target="_blank">ENGINEERING-MECHANICS-KOE-031.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/FLUID-MECHANICS-FLUID-MACHINES-KME-302-2.pdf" class="pdf-link"  target="_blank">FLUID-MECHANICS-FLUID-MACHINES-KME-302-2.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/HUMAN-VALUES-PROFESSIONAL-ETHICS-AUC-001.pdf" class="pdf-link"  target="_blank">HUMAN-VALUES-PROFESSIONAL-ETHICS-AUC-001.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/INTRODUCTION-TO-SOFT-COMPUTING-KOE-036.pdf" class="pdf-link"  target="_blank">SENSOR-AND-INSTRUMENTATION-KOE-034-2.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/TECHNICAL-COMMUNICATION-KAS-301-2.pdf" class="pdf-link"  target="_blank">TECHNICAL-COMMUNICATION-KAS-301-2.pdf/a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/THERMODYNAMICS-KME-301-2.pdf" class="pdf-link"  target="_blank">THERMODYNAMICS-KME-301-2.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-3/2021-2022/UNIVERSAL-HUMAN-VALUES-KVE-301-1.pdf" class="pdf-link"  target="_blank">UNIVERSAL-HUMAN-VALUES-KVE-301-1.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/MATHEMATIVS-IV-KAS-302.pdf" class="pdf-link"  target="_blank">MATHEMATIVS-IV-KAS-302.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/MATHEMATIVS-V-KAS-304.pdf" class="pdf-link"  target="_blank">MATHEMATIVS-V-KAS-304.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/MATHEMATIVS-V-KAS-304.pdf" class="pdf-link"  target="_blank">MATHEMATIVS-V-KAS-304.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-3/2021-2022/PYTHON-PROGRAMMING-KNC-302-2.pdf" class="pdf-link"  target="_blank">PYTHON-PROGRAMMING-KNC-302-2.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/SENSOR-AND-INSTRUMENTATION-KOE-034-2.pdf" class="pdf-link"  target="_blank">INTRODUCTION-TO-SOFT-COMPUTING-KOE-036.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/MATERIAL-SCIENCE-KOE-032.pdf" class="pdf-link"  target="_blank">MATERIAL-SCIENCE-KOE-032.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2021-2022/MATERIALS-ENGINEERING-KME-303-2.pdf" class="pdf-link"  target="_blank">MATERIALS-ENGINEERING-KME-303-2.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-3/2021-2022/MATHEMATICS-III-KAS-303.pdf" class="pdf-link"  target="_blank">MATHEMATICS-III-KAS-303.pdf</a>
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
