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
            <a href="BTech/Sem-4/2021-2022/ANALOG-CIRCUITS-KEC402.pdf" class="pdf-link" target="_blank">ANALOG-CIRCUITS-KEC402.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-4/2021-2022/ANALOG-ELECTRONICS-KOE047.pdf" class="pdf-link" target="_blank">ANALOG-ELECTRONICS-KOE047.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-4/2021-2022/APPLIED-THERMODYNAMICS-KME401.pdf" class="pdf-link" target="_blank">APPLIED-THERMODYNAMICS-KME401.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-4/2021-2022/BASIC-DATA-STRUCTURE-AND-ALGORITHMS-KOE045.pdf" class="pdf-link" target="_blank">BASIC-DATA-STRUCTURE-AND-ALGORITHMS-KOE045.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/COMMUNICATION-ENGINEERING-KEC401.pdf" class="pdf-link" target="_blank">COMMUNICATION-ENGINEERING-KEC401.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/COMPUTER-SYSTEM-SECURITY-KNC401.pdf" class="pdf-link" target="_blank">COMPUTER-SYSTEM-SECURITY-KNC401.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/DIGITAL-ELECTRONICS-KEE401.pdf" class="pdf-link" target="_blank">DIGITAL-ELECTRONICS-KEE401.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/DIGITAL-ELECTRONICS-KOE049.pdf" class="pdf-link" target="_blank">DIGITAL-ELECTRONICS-KOE049.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/ELECTRICAL-MACHINES-I-KEE402.pdf" class="pdf-link" target="_blank">ELECTRICAL-MACHINES-I-KEE402.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/ELECTRONICS-ENGINEERING-KOE048.pdf" class="pdf-link" target="_blank">ELECTRONICS-ENGINEERING-KOE048.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/ENERGY-SCIENCE-AND-ENGINEERING-KOE043.pdf" class="pdf-link" target="_blank">ENERGY-SCIENCE-AND-ENGINEERING-KOE043.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/ENGINEERING-MECHANICS-KME402.pdf" class="pdf-link" target="_blank">ENGINEERING-MECHANICS-KME402.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/ENGINEERING-MECHANICS-KOE041.pdf" class="pdf-link" target="_blank">ENGINEERING-MECHANICS-KOE041.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/HYDRAULIC-ENGINEERING-AND-MACHINES-KCE403.pdf" class="pdf-link" target="_blank">HYDRAULIC-ENGINEERING-AND-MACHINES-KCE403.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/INTRODUCTION-TO-SOFT-COMPUTING-KOE046_unlocked.pdf" class="pdf-link" target="_blank">INTRODUCTION-TO-SOFT-COMPUTING-KOE046_unlocked.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/INTRODUCTION-TO-SOLID-MECHANICS-KCE402.pdf" class="pdf-link" target="_blank">INTRODUCTION-TO-SOLID-MECHANICS-KCE402.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/MANUFACTURING-PROCESSES-KME403.pdf" class="pdf-link" target="_blank">OPERATING-SYSTEM-RCS401.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/MATERIAL-SCIENCE-KOE042.pdf" class="pdf-link" target="_blank">MATERIAL-SCIENCE-KOE042.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/MATERIALS-TESTING-CONSTRUCTION-PRACTICES-KCE401.pdf" class="pdf-link" target="_blank">MATERIALS-TESTING-CONSTRUCTION-PRACTICES-KCE401.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/MATHS-III-KAS403.pdf" class="pdf-link" target="_blank">MATHS-III-KAS403.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/MATHS-IV-KAS402.pdf" class="pdf-link" target="_blank">MATHS-IV-KAS402.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/MICROPROCESSOR-KCS403.pdf" class="pdf-link" target="_blank">MICROPROCESSOR-KCS403.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/NETWORKS-ANALYSIS-SYNTHESIS-KEE403.pdf" class="pdf-link" target="_blank">NETWORKS-ANALYSIS-SYNTHESIS-KEE403.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/OPERATING-SYSTEMS-KCS401.pdf" class="pdf-link" target="_blank">OPERATING-SYSTEMS-KCS401.pdf</a>
            </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/PYTHON-PROGRAMMING-KNC402.pdf" class="pdf-link" target="_blank">PYTHON-PROGRAMMING-KNC402.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/SENSOR-AND-INSTRUMENTATION-KOE044.pdf" class="pdf-link" target="_blank">SENSOR-AND-INSTRUMENTATION-KOE044.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/SIGNAL-SYSTEM-KEC403.pdf" class="pdf-link" target="_blank">SIGNAL-SYSTEM-KEC403.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/TECHNICAL-COMMUNICATION-KAS401.pdf" class="pdf-link" target="_blank">TECHNICAL-COMMUNICATION-KAS401.pdf</a>
            </div>
          </div>

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-4/2021-2022/THEORY-OF-AUTOMATA-AND-FORMAL-LANGUAGES-KCS402.pdf" class="pdf-link" target="_blank">THEORY-OF-AUTOMATA-AND-FORMAL-LANGUAGES-KCS402.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/UNIVERSAL-HUMAN-VALUES-KVE401.pdf" class="pdf-link" target="_blank">UNIVERSAL-HUMAN-VALUES-KVE401.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-4/2021-2022/WEB-DESIGNING-KIT401.pdf" class="pdf-link" target="_blank">WEB-DESIGNING-KIT401.pdf</a>
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
