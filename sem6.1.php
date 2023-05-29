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
        <h1  class="explore-heading text-center mb-3">2017-2018</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2017-2018/BIG-DATA-NIT067-1.pdf" class="pdf-link" target="_blank">BIG-DATA-NIT067-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2017-2018/COMPILER-DESIGN-ECS603-1.pdf" class="pdf-link" target="_blank">COMPILER-DESIGN-ECS603-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2017-2018/COMPUTER-NETWORKS-NCS601.pdf" class="pdf-link" target="_blank">COMPUTER-NETWORKS-NCS601.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2017-2018/CONSTRUCTION-TECHNOLOGY-MANAGEMENT-NCE-603.pdf" class="pdf-link" target="_blank">CONSTRUCTION-TECHNOLOGY-MANAGEMENT-NCE-603.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/DATA-WAREHOUSING-DATA-MINING-NCS066-1.pdf" class="pdf-link" target="_blank">DATA-WAREHOUSING-DATA-MINING-NCS066-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/DESIGN-OF-CONCRETE-STRUCTURE-2-NCE601.pdf" class="pdf-link" target="_blank">DESIGN-OF-CONCRETE-STRUCTURE-2-NCE601.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/DIGITAL-COMMUNICATION-NEC602-1.pdf" class="pdf-link" target="_blank">DIGITAL-COMMUNICATION-NEC602-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/DIGITAL-SIGNAL-PROCESSING-NEC011-1.pdf" class="pdf-link" target="_blank">DIGITAL-SIGNAL-PROCESSING-NEC011-1.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/DYNAMICS-OF-MACHINES-NME603.pdf" class="pdf-link" target="_blank">DYNAMICS-OF-MACHINES-NME603.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/ENVIRONMENTAL-ENGINEERING-2-NCE602ECE-602.pdf" class="pdf-link" target="_blank">ENVIRONMENTAL-ENGINEERING-2-NCE602ECE-602.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/FLUID-MACHINERY-NME021-1.pdf" class="pdf-link" target="_blank">FLUID-MACHINERY-NME021-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/INDUSTRIAL-MANAGEMENT-NHU601-1.pdf" class="pdf-link" target="_blank">INDUSTRIAL-MANAGEMENT-NHU601-1.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/INTEGRATED-CIRCUIT-TECHNOLOGY-NEC603-1.pdf" class="pdf-link" target="_blank">INTEGRATED-CIRCUIT-TECHNOLOGY-NEC603-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/INTEGRATED-CIRCUITS-NEN603-1.pdf" class="pdf-link" target="_blank">INTEGRATED-CIRCUITS-NEN603-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/KNOWLEDGE-BASED-DECISION-SUPPORT-SYSTEM-NIT-064.pdf" class="pdf-link" target="_blank">KNOWLEDGE-BASED-DECISION-SUPPORT-SYSTEM-NIT-064.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2017-2018/MACHINE-DESIGN-II-NME602-1.pdf" class="pdf-link" target="_blank">MACHINE-DESIGN-II-NME602-1.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/MICROCONTROLLERS-FOR-EMBEDDED-SYSTEMS-NEC022R-1.pdf" class="pdf-link" target="_blank">MICROCONTROLLERS-FOR-EMBEDDED-SYSTEMS-NEC022R-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/MICROWAVE-ENGINEERING-NEC601-1.pdf" class="pdf-link" target="_blank">MICROWAVE-ENGINEERING-NEC601-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2017-2018/PARALLEL-ALGORITHMS-NCS063.pdf" class="pdf-link" target="_blank">PARALLEL-ALGORITHMS-NCS063.pdf</a>
              </div>
              <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2017-2018/POWER-SYSTEM-ANALYSIS-NEE601-1.pdf" class="pdf-link" target="_blank">POWER-SYSTEM-ANALYSIS-NEE601-1.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/PRINCIPLE-OF-TOWN-PLANNING-AND.-ARCHITECTURE-NCE-014.pdf" class="pdf-link" target="_blank">PRINCIPLE-OF-TOWN-PLANNING-AND.-ARCHITECTURE-NCE-014.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/REFRIGERATION-AIR-CONDITIONING-NME604-1.pdf" class="pdf-link" target="_blank">REFRIGERATION-AIR-CONDITIONING-NME604-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2017-2018/RURAL-WATER-SUPPLY-AND-SANITATION-NCE024-1.pdf" class="pdf-link" target="_blank">RURAL-WATER-SUPPLY-AND-SANITATION-NCE024-1.pdf</a>
              </div>
              <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2017-2018/SOFTWARE-ENGINEERING-NCS602ECS-602.pdf" class="pdf-link" target="_blank">SOFTWARE-ENGINEERING-NCS602ECS-602.pdf</a>
              </div>
          </div>
          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/SPECIAL-ELECTRICAL-MACHINE-NEN014-1.pdf" class="pdf-link" target="_blank">SPECIAL-ELECTRICAL-MACHINE-NEN014-1.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2017-2018/SWITCHGEAR-PROTECTION-NEE602.pdf" class="pdf-link" target="_blank">SWITCHGEAR-PROTECTION-NEE602.pdf</a>
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
