<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true ){
    header("location: index2.php");
    exit;
}
?>
<?php 
include 'db.php';
$showloginAlert = false;
$showloginError = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name=$_POST['name'];
    $password=$_POST['password'];

    // check existing email
    $NameInfo= "SELECT * FROM `users11` WHERE Name='$name'";
    $result= mysqli_query($conn,$NameInfo);
    $NameRow = mysqli_num_rows($result);
    if($NameRow==1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password , $row['Password'])){
                echo "done";
                $showloginAlert= true;
                session_start();
                $_SESSION['loggedin']= true;
                $_SESSION['name'] = $name;
                header("location: index.php");
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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <title>Login</title>
</head>

<body>
    
<?php

if($showloginError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> ' .$showloginError .'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
}
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="container  text-center">
        <h2>Create Account</h2>
        <h5 class="mb-4">Get Started with your free account</h5>
        <button type="submit" class="btn btn-danger text-center  btn-lg btn-block"> <i
                class="fa fa-envelope mr-3"></i>Login Via Gmail</button>
        <button type="submit" class="btn btn-primary text-center btn-lg btn-block mb-4"><i
                class=" fa fa-facebook mr-3"></i>Login Via Facebook</button>


        <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
        <!-- <hr class="hr-text" data-content="OR"> -->
        <form class="w-100 " action="login.php" method="post">
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i
                class=" fa fa-envelope mr-3"></i></span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                 </div>
           </div>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i
                class=" fa fa-lock mr-3"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary text-center  btn-lg btn-block mb-2">Login</button>
            <p>Don't have an account ? <span> <a href="registration.php">Register</a></span> </p>
        </form>
    </div>
  </div>
</div>




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





