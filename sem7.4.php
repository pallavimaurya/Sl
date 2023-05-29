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
            <a href="BTech/Sem-7/2020-2021/AIR-AND-NOISE-POLLUTION-CONTROL-RCE-077.pdf" class="pdf-link" target="_blank">AIR-AND-NOISE-POLLUTION-CONTROL-RCE-077.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-7/2020-2021/APPLICATION-TO-SOFT-COMPUTING-RCS-071.pdf" class="pdf-link" target="_blank">APPLICATION-TO-SOFT-COMPUTING-RCS-071.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-7/2020-2021/ARTIFICIAL-INTELLIGENCE-RCS-702-1.pdf" class="pdf-link" target="_blank">ARTIFICIAL-INTELLIGENCE-RCS-702-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-7/2020-2021/AUTOMOBILE-ENGINEERING-RME-702-1.pdf" class="pdf-link" target="_blank">AUTOMOBILE-ENGINEERING-RME-702-1.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/BLOCKCHAIN-ARCHITECTURE-DESIGN-RCS-076.pdf" class="pdf-link" target="_blank">BLOCKCHAIN-ARCHITECTURE-DESIGN-RCS-076.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/CADCAM-RME-701-1.pdf" class="pdf-link" target="_blank">CADCAM-RME-701-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/CLOUD-COMPUTING-RCS-075-1.pdf" class="pdf-link" target="_blank">CLOUD-COMPUTING-RCS-075-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/CRYPTOGRAPHY-AND-NETWORK-SECURITY-RIT-701-1.pdf" class="pdf-link" target="_blank">CRYPTOGRAPHY-AND-NETWORK-SECURITY-RIT-701-1.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/DATA-COMMUNICATION-NETWORKS-REC-701.pdf" class="pdf-link" target="_blank">DATA-COMMUNICATION-NETWORKS-REC-701.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/DESIGN-OF-STRUCTURE-III-RCE-701.pdf" class="pdf-link" target="_blank">DESIGN-OF-STRUCTURE-III-RCE-701.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/DIGITAL-IMAGE-PROCESSING-REC-072-1.pdf" class="pdf-link" target="_blank">DIGITAL-IMAGE-PROCESSING-REC-072-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/DISTRIBUTED-SYSTEM-RCS-701-1.pdf" class="pdf-link" target="_blank">DISTRIBUTED-SYSTEM-RCS-701-1.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/GEOLOGY-AND-SOIL-MECHANICS-RCE-071-1.pdf" class="pdf-link" target="_blank">GEOLOGY-AND-SOIL-MECHANICS-RCE-071-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/OPERATION-RESEARCH-RME-075.pdf" class="pdf-link" target="_blank">OPERATION-RESEARCH-RME-075.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/OPTICAL-COMMUNICATION-REC-075-1.pdf" class="pdf-link" target="_blank">OPTICAL-COMMUNICATION-REC-075-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-7/2020-2021/POWER-PLANT-ENGINEERING-RME-071-1.pdf" class="pdf-link" target="_blank">POWER-PLANT-ENGINEERING-RME-071-1.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/UNDERSTANDING-THE-HUMAN-BEING-COMPREHENSIVELY-HUMAN-ASPIRATIONS-AND-ITS-FULFILLMENT-ROE-074.pdf" class="pdf-link" target="_blank">UNDERSTANDING-THE-HUMAN-BEING-COMPREHENSIVELY-HUMAN-ASPIRATIONS-AND-ITS-FULFILLMENT-ROE-074.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/VLSI-DESIGN-REC-702-1.pdf" class="pdf-link" target="_blank">VLSI-DESIGN-REC-702-1.pdf</a>
            </div>
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2020-2021/WATER-RESOURCES-RCE-702-1.pdf" class="pdf-link" target="_blank">WATER-RESOURCES-RCE-702-1.pdf</a>
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
