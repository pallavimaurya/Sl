<?php
include 'db.php';
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  // check existing email
  $existUser = "SELECT * FROM `users11` WHERE Name='$name'";
  $result2 = mysqli_query($conn, $existUser);
  $ExistRow = mysqli_num_rows($result2);
  if ($ExistRow > 0) {
    $showError = "Username Already exists";

  } else if (empty(trim($name)) || empty(trim($email)) || empty(trim($password)) || empty(trim($cpassword))) {
    $showError = " Please fill the empty fields";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $showError = "Email address is not valid";
  } else {
    if ($password == $cpassword) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users11` (`Name`, `Email`, `Password`) VALUES ('$name', '$email','$hash')";
      $result = mysqli_query($conn, $sql);
      $showAlert = true;
      header("location: index2.php");
    } else {
      $showError = " Password not match";
    }
  }
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
  <script src="jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <script>
    $(window).on('load', function () {
      var delayMs = 800; // delay in milliseconds

      setTimeout(function () {
        $('#exampleModal').modal('show');
      }, delayMs);
    });

  </script>

  <title>Squad library</title>
</head>

<body>
  <div class="modal fade in" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content ">
        <?php
        if ($showAlert) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You account is created now and you can login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
        }
        if ($showError) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> ' . $showError . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
        }
        ?>
        <div class="modal-header bg-info">

          <h2 class=" ml-auto">Create Account</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <div class="container text-center">
            <h5 class="mb-4">Get Started with your free account</h5>
            <!-- <button type="submit" class="btn btn-danger text-center  btn-lg btn-block"> <i
                class="fa fa-envelope mr-3"></i>Login Via Gmail</button>
        <button type="submit" class="btn btn-primary text-center btn-lg btn-block mb-4"><i
                class=" fa fa-facebook mr-3"></i>Login Via Facebook</button> -->


            <!-- <p class="divider-text">
                            <span class="bg-light">OR</span>
                        </p>  -->
            <!-- <hr class="hr-text" data-content="OR"> -->
            <form class="w-100 " id="form_validate" action="index.php" method="post">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class=" fa fa-user mr-3"></i></span>
                </div>
                <input type="text" class="form-control " id="name" name="name" placeholder=" Username">
              </div>
              <div id="name_check"></div>


              <div class="input-group mt-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class=" fa fa-envelope mr-3"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
              </div>
              <div id="email_check"></div>

              <!-- 
                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class=" fa fa-phone mr-3"></i></span>
                                </div>
                                <input type="Number" class="form-control" id="number" name="number"
                                    placeholder="Phone Number">
                            <div id="number_check"></div> -->



              <div class="input-group mt-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class=" fa fa-lock mr-3"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <div id="password_check"></div>


              <div class="input-group mt-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class=" fa fa-lock mr-3"></i></span>
                </div>
                <input type="password" class="form-control" id="cpassword" name="cpassword"
                  placeholder="confirm Password">
              </div>
              <div id="cpassword_check"></div>


              <button type="submit" class="btn btn-primary text-center  btn-lg btn-block mt-4" id="submitbtn">Create
                Account</button>
              <p>Already have an account ? <span> <a href="index2.php">Log in</a></span> </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- login modal -->




  <div class="container-fluid">
    <!-- navbar -->
    <?php include 'nav.php' ?>
    <!-- home page -->
    <div class="container">
      <div class="row mt-5">
        <div class="col col-md-6 col-12 align-content-lg-between">
          <h1 class="homepage-heading mt-5">
            When in doubt <br />
            go to the library!..
          </h1>
          <p class="homepage-paragraph mt-5">
            A planned library of Previous year Question papers and Study
            materials design to fulfil certain predetermined purposes.
          </p>

        </div>
        <div class="col col-md-6 col-12">
          <img src="assets\images\books-illustration.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>



    <!-- Footer -->
    <?php include 'footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <!-- <script src="validate.js"></script> -->

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