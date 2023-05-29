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
        <h1 class="explore-heading text-center mb-3">2017-2018</h1>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-2/2017-2018/BASIC-ELECTRICAL-ENGINEERING-REE201-1.pdf" class="pdf-link" target="_blank">BASIC-ELECTRICAL-ENGINEERING-REE201-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-2/2017-2018/BASIC-ELECTRONICS-REC201-1.pdf" class="pdf-link" target="_blank">BASIC-ELECTRONICS-REC201-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-2/2017-2018/COMPUTER-SYSTEM-.-PROGRAMMING-IN-C-RCS201.pdf" class="pdf-link" target="_blank">COMPUTER-SYSTEM-.-PROGRAMMING-IN-C-RCS201.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-2/2017-2018/ELEMENTS-OF-MECHANICAL-ENGINEERING-RME201.pdf" class="pdf-link" target="_blank">ELEMENTS-OF-MECHANICAL-ENGINEERING-RME201.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-2/2017-2018/ENGINEERING-CHEMISTRY-RAS202-1.pdf" class="pdf-link" target="_blank">ENGINEERING-CHEMISTRY-RAS202-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-2/2017-2018/ENGINEERING-MATHEMATICS-II-RAS203.pdf" class="pdf-link" target="_blank">ENGINEERING-MATHEMATICS-II-RAS203.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-2/2017-2018/ENGINEERING-PHYSICS-II-RAS201-1.pdf" class="pdf-link" target="_blank">ENGINEERING-PHYSICS-II-RAS201-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-2/2017-2018/PROFESSIONAL-COMMUNICATION-RAS204-1.pdf" class="pdf-link" target="_blank">PROFESSIONAL-COMMUNICATION-RAS204-1.pdf</a>
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
