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
            <a href="BTech/Sem-7/2018-2019/ANALOG-AND-DIGITAL-COMMUNICATION-NEC-702A.pdf" class="pdf-link" target="_blank">ANALOG-AND-DIGITAL-COMMUNICATION-NEC-702A.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-7/2018-2019/ARTIFICIAL-INTELLIGENCE-NCS-702-1.pdf" class="pdf-link" target="_blank">ARTIFICIAL-INTELLIGENCE-NCS-702-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-7/2018-2019/AUTOMOBILE-ENGINEERING-NME-702-1.pdf" class="pdf-link" target="_blank">AUTOMOBILE-ENGINEERING-NME-702-1.pdf</a>
          </div>
          <div class="col pdf-box">
            <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
            <a href="BTech/Sem-7/2018-2019/COMPUTER-AIDED-MANUFACTURING-NME-031NPL-031.pdf" class="pdf-link" target="_blank">COMPUTER-AIDED-MANUFACTURING-NME-031NPL-031.pdf</a>
          </div>
        </div>

        <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/CRYPTOGRAPHY-AND-NETWORK-SECURITY-NIT-701.pdf" class="pdf-link" target="_blank">CRYPTOGRAPHY-AND-NETWORK-SECURITY-NIT-701.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/DATA-COMMUNICATION-NETWORKS-NEC-702BEEC-702.pdf" class="pdf-link" target="_blank">DATA-COMMUNICATION-NETWORKS-NEC-702BEEC-702.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/DESIGN-OF-STEEL-STRUCTURES-NCE-701ECE-701.pdf" class="pdf-link" target="_blank">DESIGN-OF-STEEL-STRUCTURES-NCE-701ECE-701.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/DISTRIBUTED-SYSTEMS-NCS-701.pdf" class="pdf-link" target="_blank">DISTRIBUTED-SYSTEMS-NCS-701.pdf</a>
            </div>
          </div>   
          
          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/ELECTRIC-DRIVES-NEN-701-1.pdf" class="pdf-link" target="_blank">ELECTRIC-DRIVES-NEN-701-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/ENGINEERING-HYDROLOGY-NCE-035-1.pdf" class="pdf-link" target="_blank">ENGINEERING-HYDROLOGY-NCE-035-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/ENTREPRENEURSHIP-DEVELOPMENT-NOE-071-1.pdf" class="pdf-link" target="_blank">ENTREPRENEURSHIP-DEVELOPMENT-NOE-071-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/INFORMATION-THEORY-AND-CODING-NEC-031.pdf" class="pdf-link" target="_blank">INFORMATION-THEORY-AND-CODING-NEC-031.pdf</a>
            </div>
          </div>  

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/OPEN-CHANNEL-FLOW-NCE-043-ECE-043.pdf" class="pdf-link" target="_blank">OPEN-CHANNEL-FLOW-NCE-043-ECE-043.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/OPERATIONS-RESEARCH-NOE-073.pdf" class="pdf-link" target="_blank">OPERATIONS-RESEARCH-NOE-073.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/OPTICAL-COMMUNICATION-NEC-701-1.pdf" class="pdf-link" target="_blank">OPTICAL-COMMUNICATION-NEC-701-1.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-7/2018-2019/POWER-STATION-PRACTICE-NEE-702NEN-702EEE-042.pdf" class="pdf-link" target="_blank">POWER-STATION-PRACTICE-NEE-702NEN-702EEE-042.pdf</a>
              </div>
          </div>

          <div class="row">
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/SOFTWARE-PROJECT-MANAGEMENT-NOE-077.pdf" class="pdf-link" target="_blank">SOFTWARE-PROJECT-MANAGEMENT-NOE-077.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/SOFTWARE-TESTING-AND-AUDIT-NCS-071.pdf" class="pdf-link" target="_blank">SOFTWARE-TESTING-AND-AUDIT-NCS-071.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/TOTAL-QUALITY-MANAGEMENT-NME-041.pdf" class="pdf-link" target="_blank">TOTAL-QUALITY-MANAGEMENT-NME-041.pdf</a>
            </div>
            <div class="col pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
                <a href="BTech/Sem-7/2018-2019/VLSI-DESIGN-NEC-703.pdf" class="pdf-link" target="_blank">VLSI-DESIGN-NEC-703.pdf</a>
              </div>
          </div>
          <div class="row">
            <div class="col col-3 pdf-box">
              <img src="assets\images/pdf.png" class="img-fluid question-img mr-3 my-3 d-block" alt="">
              <a href="BTech/Sem-7/2018-2019/WATER-RESOURCES-ENGINEERING-NCE-702ECE-702.pdf" class="pdf-link" target="_blank">WATER-RESOURCES-ENGINEERING-NCE-702ECE-702.pdf</a>
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
