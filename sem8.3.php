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
            <a href="BTech/Sem-8/2021-2022/AUTOMATION-AND-ROBOTICS-KOE091.pdf" class="pdf-link" target="_blank">AUTOMATION-AND-ROBOTICS-KOE091.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2021-2022/BIG-DATA-KOE097.pdf" class="pdf-link" target="_blank">BIG-DATA-KOE097.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2021-2022/BIO-MEDICAL-SIGNAL-PROCESSING-KOE082.pdf" class="pdf-link" target="_blank">BIO-MEDICAL-SIGNAL-PROCESSING-KOE082.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-8/2021-2022/CLOUD-COMPUTING-KOE081.pdf" class="pdf-link" target="_blank">CLOUD-COMPUTING-KOE081.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/COMPUTERIZED-PROCESS-CONTROL-KOE092.pdf" class="pdf-link" target="_blank">COMPUTERIZED-PROCESS-CONTROL-KOE092.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/DATA-WAREHOUSING-DATA-MINING-KOE093.pdf" class="pdf-link" target="_blank">DATA-WAREHOUSING-DATA-MINING-KOE093.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/DIGITAL-AND-SOCIAL-MEDIA-MARKETING-KOE094.pdf" class="pdf-link" target="_blank">DIGITAL-AND-SOCIAL-MEDIA-MARKETING-KOE094.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/ELECTRIC-VEHICLES-KOE090.pdf" class="pdf-link" target="_blank">ELECTRIC-VEHICLES-KOE090.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/ENTREPRENEURSHIP-DEVELOPMENT-KOE083.pdf" class="pdf-link" target="_blank">ENTREPRENEURSHIP-DEVELOPMENT-KOE083.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/HUMAN-VALUES-IN-BUDDHA-AND-JAIN-DARSHAN-KOE098.pdf" class="pdf-link" target="_blank">HUMAN-VALUES-IN-BUDDHA-AND-JAIN-DARSHAN-KOE098.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/HUMAN-VALUES-IN-MADHYASTH-DARSHAN-KOE089.pdf" class="pdf-link" target="_blank">HUMAN-VALUES-IN-MADHYASTH-DARSHAN-KOE089.pdf</a>
            </div>
            <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-8/2021-2022/HUMAN-VALUES-IN-VEDIC-DARSHAN-KOE099.pdf" class="pdf-link" target="_blank">HUMAN-VALUES-IN-VEDIC-DARSHAN-KOE099.pdf</a>
              </div>
          </div> 
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/INDUSTRIAL-OPTIMIZATION-TECHNIQUES-KOE086.pdf" class="pdf-link" target="_blank">INDUSTRIAL-OPTIMIZATION-TECHNIQUES-KOE086.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/INTRODUCTION-TO-SMART-GRID-KOE084.pdf" class="pdf-link" target="_blank">INTRODUCTION-TO-SMART-GRID-KOE084.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/MODELING-OF-FIELD-EFFECT-NANO-DEVICES-KOE095.pdf" class="pdf-link" target="_blank">MODELING-OF-FIELD-EFFECT-NANO-DEVICES-KOE095.pdf</a>
            </div>
            <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-8/2021-2022/NATURAL-LANGUAGE-PROCESSING-KOE088.pdf" class="pdf-link" target="_blank">NATURAL-LANGUAGE-PROCESSING-KOE088.pdf</a>
              </div>
          </div> 
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/PROJECT-MANAGEMENT-ENTREPRENEURSHIP-KHU802.pdf" class="pdf-link" target="_blank">PROJECT-MANAGEMENT-ENTREPRENEURSHIP-KHU802.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/QUALITY-MANAGEMENT-KOE085.pdf" class="pdf-link" target="_blank">QUALITY-MANAGEMENT-KOE085.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-8/2021-2022/RURAL-DEVELOPMENT-ADMINISTRATION-AND-PLANNING-KHU801.pdf" class="pdf-link" target="_blank">RURAL-DEVELOPMENT-ADMINISTRATION-AND-PLANNING-KHU801.pdf</a>
            </div>
            <div class="col pdf-box">
                <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-8/2021-2022/VIROLOGY-KOE087.pdf" class="pdf-link" target="_blank">VIROLOGY-KOE087.pdf</a>
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
