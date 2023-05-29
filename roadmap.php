<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true ){
    header("location: index2.php");
    exit;
}
?>
<!DOCTYPE php>
<php lang="en">
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


      <!-- roadmap -->
      <div class="container">
        <h1 class="Aboutpage-heading text-center my-3 mb-4">Roadmap</h1>
        <div class="row text-center">
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="frontend.php"  class="text-light">Frontend-Developer</a></div>
            </div>
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="backend.php" class="text-light">Backend-Developer</a></div>
            </div>
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="blockchain.php" class="text-light">Blockchain-Developer</a></div>
            </div>
        </div>
        <div class="row my-2 text-center">
            <div class="col col-4">
                <div class="btn-dark p-5 roadmap-container"> <a href="devops.php" class="text-light"> Devops</a></div>
            </div>
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="aspnet.php" class="text-light">Aspnet core</a></div>
            </div>
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="ux.php" class="text-light">UX-Design</a></div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="python.php" class="text-light">Python-Developer</a></div>
            </div>
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="javascript.php" class="text-light">Javascript</a></div>
            </div>
            <div class="col col-4">
                <div class=" btn-dark p-5 roadmap-container"><a href="react.php" class="text-light">React</a></div>
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
</php>
