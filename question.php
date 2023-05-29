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


      <!-- question paper -->
      <h1 class="Aboutpage-heading text-center my-3 mb-4">BTech</h1>
      <div class="container">
        <div class="row">
          <div class="col"> 
            <ul>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 my-3" alt="">
               
                  <a class="dropdown-toggle" href="BTech/Sem-1/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Semester-1
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="sem1.1.php">2017-2018</a>
                    <a class="dropdown-item" href="sem1.2.php">2018-2019</a>
                    <a class="dropdown-item" href="sem1.3.php">2019-2020</a>
                    <a class="dropdown-item" href="sem1.4.php">2020-2021</a>
                    <a class="dropdown-item" href="sem1.5.php">2021-2022</a>
                  </div>
              </li>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 mt-5" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-2/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-2
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem2.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem2.2.php">2018-2019</a>
                  <a class="dropdown-item" href="sem2.3.php">2021-2022</a>
                </div>
               
              </li>
              </ul>
          </div>
          <div class="col">
            <ul>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 my-3" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-3/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-3
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem3.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem3.2.php">2018-2019</a>
                  <a class="dropdown-item" href="sem3.3.php">2019-2020</a>
                  <a class="dropdown-item" href="sem3.4.php">2020-2021</a>
                  <a class="dropdown-item" href="sem3.5.php">2021-2022</a>
                </div>
              </li>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 mt-5" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-4/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-4
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem4.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem4.2.php">2018-2019</a>
                  <a class="dropdown-item" href="sem4.3.php">2021-2022</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 my-3" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-5/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-5
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem5.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem5.2.php">2018-2019</a>
                  <a class="dropdown-item" href="sem5.3.php">2019-2020</a>
                  <a class="dropdown-item" href="sem5.4.php">2020-2021</a>
                  <a class="dropdown-item" href="sem5.5.php">2021-2022</a>
                </div>
              </li>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 mt-5" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-6/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-6
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem6.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem6.2.php">2018-2019</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 my-3" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-7/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-7
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem7.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem7.2.php">2018-2019</a>
                  <a class="dropdown-item" href="sem7.3.php">2019-2020</a>
                  <a class="dropdown-item" href="sem7.4.php">2020-2021</a>
                  <a class="dropdown-item" href="sem7.5.php">2021-2022</a>
                </div>
              </li>
              <li>
                <img src="assets\images\folder.webp" class="img-fluid question-img mr-3 mt-5" alt="">
                <a class="dropdown-toggle" href="BTech/Sem-8/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semester-8
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="sem8.1.php">2017-2018</a>
                  <a class="dropdown-item" href="sem8.2.php">2018-2019</a>
                  <a class="dropdown-item" href="sem8.3.php">2021-2022</a>
                </div>
              </li>
            </ul>
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
