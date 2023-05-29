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
            <a href="BTech/Sem-1/2021-2022/AI-FOR-ENGINEERING-KMC101.pdf" class="pdf-link" target="_blank">AI-FOR-ENGINEERING-KMC101.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/BASIC-ELECTRICAL-ENGG-KEE-101.pdf" class="pdf-link" target="_blank">BASIC-ELECTRICAL-ENGG-KEE-101.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/BASIC-ELECTRICAL-ENGINEERING-KEE-101T.pdf" class="pdf-link" target="_blank">BASIC-ELECTRICAL-ENGINEERING-KEE-101T.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/CHEMISTRY-KAS-102-2.pdf" class="pdf-link" target="_blank">CHEMISTRY-KAS-102-2.pdf</a>
          </div>
        </div>
        <div class="row">
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/EMERGING-DOMAIN-IN-ELECTRONICS-ENGINEERING-KEC-101T-1.pdf" class="pdf-link" target="_blank">EMERGING-DOMAIN-IN-ELECTRONICS-ENGINEERING-KEC-101T-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/EMERGING-TECHNOLOGY-FOR-ENGINEERING-KMC-102-1.pdf" class="pdf-link" target="_blank">EMERGING-TECHNOLOGY-FOR-ENGINEERING-KMC-102-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/ENGINEERING-CHEMISTRY-KAS-102T-1.pdf" class="pdf-link" target="_blank">ENGINEERING-CHEMISTRY-KAS-102T-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-1/2021-2022/ENGINEERING-MATHEMATICS-I-KAS-103T-1.pdf" class="pdf-link" target="_blank">ENGINEERING-MATHEMATICS-I-KAS-103T-1.pdf</a>
          </div>
        </div>
        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/ENGINEERING-PHYSICS-KAS-101T-1.pdf" class="pdf-link" target="_blank">ENGINEERING-PHYSICS-KAS-101T-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/FUNDAMENTALS-OF-MECHANICAL-ENGINEERING-MECHATRONICS-KME-101T-1.pdf" class="pdf-link" target="_blank">FUNDAMENTALS-OF-MECHANICAL-ENGINEERING-MECHATRONICS-KME-101T-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/MATHEMATICS-I-KAS-103-2.pdf" class="pdf-link" target="_blank">MATHEMATICS-I-KAS-103-2.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/PHYSICS-KAS-101-1.pdf" class="pdf-link" target="_blank">PHYSICS-KAS-101-1.pdf</a>
            </div>
        </div>
        <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/PROGRAMMING-FOR-PROBLEM-SOLVING-KCS-101-2.pdf" class="pdf-link" target="_blank">PROGRAMMING-FOR-PROBLEM-SOLVING-KCS-101-2.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/PROGRAMMING-FOR-PROBLEM-SOLVING-KCS-101T-1.pdf" class="pdf-link" target="_blank">PROGRAMMING-FOR-PROBLEM-SOLVING-KCS-101T-1.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-1/2021-2022/SOFT-SKILL-I-KNC-101.pdf" class="pdf-link" target="_blank">SOFT-SKILL-I-KNC-101.pdf</a>
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
