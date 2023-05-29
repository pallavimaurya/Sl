<?php 
include 'db.php';
$showloginSuccess = false;
$showloginError = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name=$_POST['name'];
    $password=$_POST['password'];

    // check existing email
    $User= "SELECT * FROM `users11` WHERE Name='$name'";
    $result= mysqli_query($conn,$User);
    $UserRow = mysqli_num_rows($result);
    if($UserRow==1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password , $row['Password'])){
                echo "done";
                $showloginAlert= true;
                session_start();
                $_SESSION['loggedin']= true;
                $_SESSION['name'] = $name;
                header("location: home.php");
            }
            else{
                $showloginError=" Password Does not match";
            }
        }

    }
    else{
        $showloginError= "Invalid Credentials";
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
    $(window).on('load',function(){
    var delayMs = 800; // delay in milliseconds
    
    setTimeout(function(){
        $('#exampleModalCenter').modal('show');
    }, delayMs);
});    

  </script>
  <title>Squad library</title>
</head>

<body>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <?php
  if ($showloginSuccess) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You are logged in .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
  }
  if ($showloginError) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> ' . $showloginError . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
  }

  ?>
      <div class="modal-header bg-info">
      <h2 class="ml-auto">log into your  Account</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container  text-center">
        <form class="w-100 " action="index2.php" method="post">
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i
                class=" fa fa-envelope mr-3"></i></span>
                 </div>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Username">

           </div>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i
                class=" fa fa-lock mr-3"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary text-center  btn-lg btn-block mb-2">Login</button>
            <p>Don't have an account ? <span> <a href="index.php">Register</a></span> </p>
        </form>
    </div>
</div>
    </div>
  </div>
</div>


<div class="modal fade in" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content ">
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
                <input type="text" class="form-control " id="name" name="name" placeholder=" Full Name">
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
          <!-- <button type="button" class="btn btn-primary px-5 btn-lg" data-toggle="modal" data-target="#exampleModalCenter"
        data-whatever="@getbootstrap">Log in</button> -->

        </div>
        <div class="col col-md-6 col-12">
          <img src="assets\images\books-illustration.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>



    <!-- Footer -->
    <?php  include 'footer.php' ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->


  <script src="validate.js"></script>

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







