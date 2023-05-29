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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" />
    <title>Squad library</title>
</head>

<body>
    <div class="container-fluid">
        <!-- navbar -->
        <?php include 'nav.php' ?>

        <!-- About us -->
        <div class="container">
            <div class="row">
                <div class="col text-center my-5">
                    <h1 class="Aboutpage-heading">About our library</h1>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="Aboutpage-paragraph">Better Learning Future with us</p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 border-shadow text-center">
                    <img src="assets\images\logo 3.webp" class="img-fluid w-50 mt-4" alt="" />
                    <p class="Aboutpage-subpara mt-2">
                        The Squad library allows the proper storage of a set of question
                        papers.
                    </p>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 border-shadow text-center">
                    <img src="assets\images\logo 5.webp" class="img-fluid w-50 mt-4" alt="" />
                    <p class="Aboutpage-subpara mt-2">
                        A Squad Library efficiently stores all the questions papers in a
                        particular format so that test-takers can access them without
                        trouble.
                    </p>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 border-shadow text-center">
                    <img src="assets\images\logo 6.png" class="img-fluid w-50 mt-4" alt="" />
                    <p class="Aboutpage-subpara mt-2">
                        One of the main benefits of a Squad library is that it is a
                        convenient location where you will be able to systematically see
                        the questions papers on the basis of the Branch, Year, Semester
                        and Subject that they belong to.
                    </p>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 mb-md-3 my-sm-3 border-shadow text-center">
                    <img src="assets\images\logo 1.webp" class="img-fluid w-50 mt-4" alt="" />
                    <p class="Aboutpage-subpara mt-2">
                        This will give the college students a platform from where they can
                        fetch the required study material as per their need.
                    </p>
                </div>
            </div>


            <!-- Knowledge Center -->
            <div class="row">
                <div class="col text-center my-4">
                    <h1 class="Knowledge-heading">See What our Missions Are</h1>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <ul class="list-unstyled">
                        <li class="d-md-flex mt-4">
                            <img src="assets\images\graph.webp" class="img-fluid w-25" alt="" />
                            <div>
                                <h4 class="Knowledge-subhead">Excellence in learning</h4>
                                <p class="Knowledge-para">
                                    Committed to provide the best possible professional library
                                    services that develops people as leaders and managers with
                                    values, vision and adaptability.
                                </p>
                            </div>
                        </li>
                        <li class="d-md-flex mt-4">
                            <img src="assets\images\computer-.webp" class="img-fluid w-25" alt="" />
                            <div>
                                <h4 class="Knowledge-subhead">Providing study-material</h4>
                                <p class="Knowledge-para">
                                    To create a knowledge reservoir with comprehensive
                                    collection of all documents including course books,study
                                    links in the soft format
                                </p>
                            </div>
                        </li>
                        <li class="d-md-flex mt-4">
                            <img src="assets\images\white-male-1871435__340.webp" class="img-fluid w-25" alt="" />
                            <div>
                                <h4 class="Knowledge-subhead">All in One</h4>
                                <p class="Knowledge-para">
                                    All in One To support the educational and research oriented
                                    programs of the institute by providing intellectual access
                                    to information by all our students and faculty members.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col col-lg-6 col-12 align-items-center">
                    <img src="assets\images\group study.webp"
                        class="img-fluid img-thumbnail rounded-circle border-shadow2 w-100" alt="" />
                </div>
            </div>
        </div>
<?php  include 'footer.php' ?>


        <!-- Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>

</html>