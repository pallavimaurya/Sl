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
            <a href="BTech/Sem-3/2018-2019/BUILDING-MATERIALS-CONSTRUCTION-RCE-301.pdf" class="pdf-link" target="_blank">BUILDING-MATERIAL-CONSTRUCTION-RCE-301.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2018-2019/COMPUTER-ORGANIZATION-AND-ARCHITECTURE-RCS-302.pdf" class="pdf-link" target="_blank">COMPUTER-ORGANIZATION-ARCHITECTURE-RCS-302.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2018-2019/DATA-STRUCTURES-RCS.-305-1pdf" class="pdf-link" target="_blank">DATA-STRTUCURES-RCS-305-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-3/2018-2019/DIGITAL-LOGIC-DESIGN-REC-301-1.pdf" class="pdf-link" target="_blank">DIGITAL-LOGIC-DESIGN-REC-301-1.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/DISCRETE-STRUCTURES-AND-THEORY-OF-LOGIC-RCS-301.pdf" class="pdf-link" target="_blank">Discrete-Structures-Theory-of-Logic-RCS-301.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/ELECTRONICS-DEVICES-AND-CIRCUITS-REC-302.pdf" class="pdf-link" target="_blank">ELECTONIC-DEVICES-AND-CIRCUITS-REC-302.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/ENVIRONMENT-AND-ECOLOGY-RAS-302.pdf" class="pdf-link" target="_blank">Environment-Ecology-RAS-302.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/FLUID-MECHANICS-RCE-303-1.pdf" class="pdf-link" target="_blank">FLUID-MECHANICS-RCE-303-1.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/LASER-SYSTEMS-AND-APPLICATIONS-ROE-033-1.pdf" class="pdf-link" target="_blank">LASER-SYSTEMS-AND-APPLICATIONS-ROE-033-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/MATERIAL-SCIENCE-RME-301.pdf" class="pdf-link" target="_blank">MATERIAL-SCIENCE-RME-301.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/MATHEMATICS-III-RAS-301.pdf" class="pdf-link" target="_blank">Mathematics-III-RAS-301.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/MECHANICS-OF-SOLIDS-RME-303-1.pdf" class="pdf-link" target="_blank">MECHANICS-OF-SOLIDS-RME-303-1.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/NETWORK-ANALYSIS-AND-SYNTHESIS-REE-305-1.pdf" class="pdf-link" target="_blank">NETWORK-ANALYSIS-AND-SYNTHESIS-REE-305-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/SIGNALS-AND-SYSTEMS-REC-303.pdf" class="pdf-link" target="_blank">SIGNAL-AND-SYSTEM-REC-303.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/SURVEYING-RCE-302-1.pdf" class="pdf-link" target="_blank">SURVEYING-RCE-302-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/THERMODYNAMICS-RME-302-1.pdf" class="pdf-link" target="_blank">THERMODYNAMICS-RME-302-1.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-3/2018-2019/UNIVERSAL-HUMAN-VALUES-AND-PROFESSIONAL-ETHICS-RVE-301.pdf" class="pdf-link" target="_blank">UNIVERSAL-HUMAN-VALUES-PROFESSIONAL-ETHICS-RVE-301.pdf</a>
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
