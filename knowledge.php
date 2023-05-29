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


        <!-- Explore-page -->

        <div class="row">
          <div class="col text-center my-3">
            <h1 class="explore-heading">Explore Popular Courses</h1>
          </div>
        </div>
        <div class="row justify-content-center my-5">
          <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 mx-2 border-shadow text-center  box">
            <img src="assets/images/c++.png" class="img-fluid w-50 my-4" alt="">
            <h4 class="explore-subhead">Learn C++</h4>
            <a href="https://www.w3schools.com/cpp/default.asp" target="_blank" class="explore-link">w3schools</a>
            <br>
            <a href="https://www.geeksforgeeks.org/c-plus-plus/" target="_blank" class="explore-link">geeksforgeeks</a>
            <br>
            <a href="https://www.javatpoint.com/cpp-tutorial" target="_blank" class="explore-link">javatpoint</a>
          </div>
          <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 mx-2 border-shadow text-center  box">
            <img src="assets\images\python.png"  class="img-fluid w-50 my-4" alt="">
            <h4  class="explore-subhead">Learn Python</h4>
            <a href="https://www.w3schools.com/python/" target="_blank" class="explore-link">w3schools</a>
            <br>
            <a href="https://www.geeksforgeeks.org/python-programming-language/" target="_blank" class="explore-link">geeksforgeeks</a>
            <br>
            <a href="https://www.programiz.com/python-programming" target="_blank" class="explore-link">programiz</a>
          </div>
          <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 mx-2 border-shadow text-center  box">
            <img src="assets\images\java programing pic.jpg"   class="img-fluid w-50 my-4" alt="">
            <h4 class="explore-subhead">Learn Java</h4>
            <a href="https://www.w3schools.com/java/default.asp" target="_blank" class="explore-link">w3schools</a>
            <br>
            <a href="https://www.javatpoint.com/java-tutorial" target="_blank" class="explore-link">javatpoint</a>
            <br>
            <a href="https://www.tutorialspoint.com/java/index.htm" target="_blank" class="explore-link">tutorialspoint</a>
          </div>
        </div>
        <div class="row justify-content-center my-5">
          <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 mx-2 border-shadow text-center box">
            <img src="assets\images\sql.png" class="img-fluid w-50 my-4"  alt="">
            <h4 class="explore-subhead">Learn Mysql</h4>
            <a href="https://www.javatpoint.com/mysql-tutorial" target="_blank" class="explore-link">javatpoint</a>
            <br>
            <a href="https://www.w3schools.com/MySQL/default.asp" target="_blank" class="explore-link">w3schools</a>
            <br>
            <a href="https://www.tutorialspoint.com/mysql/index.htm" target="_blank" class="explore-link">tutorialspoint</a>
          </div>
          <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 mx-2 border-shadow text-center box">
            <img src="assets\images\machine-learning.png" class="img-fluid w-50 my-4" alt="">
            <h4 class="explore-subhead">Learn ML</h4>
            <a href="https://www.javatpoint.com/machine-learning" target="_blank" class="explore-link">javatpoint</a>
            <br>
            <a href="https://www.simplilearn.com/tutorials/machine-learning-tutorial" target="_blank" class="explore-link">simplilearn</a>
            <br>
            <a href="https://www.tutorialspoint.com/machine_learning_with_python/index.htm" target="_blank" class="explore-link">tutorialspoint</a>
          </div>
          <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 mx-2 border-shadow text-center  box">
            <img src="assets\images\DataScience.webp" class="img-fluid w-50 my-4" alt="">
            <h4 class="explore-subhead">Learn Data Science</h4>
            <a href="https://www.simplilearn.com/tutorials/data-science-tutorial" target="_blank" class="explore-link">simplilearn</a>
            <br>
            <a href="https://www.geeksforgeeks.org/data-science-tutorial/" target="_blank" class="explore-link">geeksforgeeks</a>
            <br>
            <a href="https://www.w3schools.com/datascience/" target="_blank" class="explore-link">w3schools</a>
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
