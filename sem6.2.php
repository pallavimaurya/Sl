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
            <a href="BTech/Sem-6/2018-2019/COMPILER-DESIGN-RCS-602.pdf" class="pdf-link" target="_blank">COMPILER-DESIGN-RCS-602.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2018-2019/COMPUTER-GRAPHICS-RCS-603.pdf" class="pdf-link" target="_blank">COMPUTER-GRAPHICS-RCS-603.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2018-2019/COMPUTER-NETWORK-RCS-601.pdf" class="pdf-link" target="_blank">COMPUTER-NETWORKS-NCS601.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-6/2018-2019/CONTROL-SYSTEM-I-RIC-603.pdf" class="pdf-link" target="_blank">CONTROL-SYSTEM-I-RIC-603.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/DATA-WAREHOUSING-AND-DATA-MINING-RIT-062.pdf" class="pdf-link" target="_blank">DATA-WAREHOUSING-AND-DATA-MINING-RIT-062.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/DESIGN-OF-STRUCTURE-II-RCE-601.pdf" class="pdf-link" target="_blank">DESIGN-OF-STRUCTURE-II-RCE-601.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/DIGITAL-COMMUNICATION-REC-602.pdf" class="pdf-link" target="_blank">DIGITAL-COMMUNICATION-REC-602.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/ENVIRONMENTAL-ENGINEERING-RCE-602.pdf" class="pdf-link" target="_blank">ENVIRONMENTAL-ENGINEERING-RCE-602.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/FLUID-MACHINERY-RME-601.pdf" class="pdf-link" target="_blank">FLUID-MACHINERY-RME-601.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/FOUNDATION-DESIGN-RCE-061.pdf" class="pdf-link" target="_blank">FOUNDATION-DESIGN-RCE-061.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/INDUSTRIAL-MANAGEMENT-RAS-601.pdf" class="pdf-link" target="_blank">INDUSTRIAL-MANAGEMENT-RAS-601.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/INTERNET-OF-THINGS-RCS-061.pdf" class="pdf-link" target="_blank">INTERNET-OF-THINGS-RCS-061.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/MACHINE-DESIGN-II-RME-603.pdf" class="pdf-link" target="_blank">MACHINE-DESIGN-II-RME-603.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/MICROCONTROLLER-FOR-EMBEDDED-SYSTEMS-REC-062.pdf" class="pdf-link" target="_blank">MICROCONTROLLER-FOR-EMBEDDED-SYSTEMS-REC-062.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/MICROWAVE-ENGINEERING-REC-601.pdf" class="pdf-link" target="_blank">MICROWAVE-ENGINEERING-REC-601.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2018-2019/REFRIGERATION-AIR-CONDITIONING-RME-061.pdf" class="pdf-link" target="_blank">REFRIGERATION-AIR-CONDITIONING-RME-061.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/SOCIOLOGY-RAS-602.pdf" class="pdf-link" target="_blank">SOCIOLOGY-RAS-602.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-6/2018-2019/THEORY-OF-MACHINES-RME-602.pdf" class="pdf-link" target="_blank">THEORY-OF-MACHINES-RME-602.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2018-2019/TRANSPORTATION-ENGINEERING-RCE-603.pdf" class="pdf-link" target="_blank">TRANSPORTATION-ENGINEERING-RCE-603.pdf</a>
              </div>
              <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-6/2018-2019/WEB-TECHNOLOGIESRIT-601.pdf" class="pdf-link" target="_blank">WEB-TECHNOLOGIESRIT-601.pdf</a>
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
