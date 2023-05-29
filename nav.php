<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true ){
    $loggedin= true;
}
else {
    $loggedin = false;
}
  
  echo '<nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="assets\images\changedlogo.jpeg" alt="" class="img-fluid w-50" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">';
        if($loggedin){

          echo'    <li class="nav-item mx-2 nav-ul-li">
            <a class="nav-link anchor-nav" href="home.php">Home</a>
          </li> 
        <li class="nav-item mx-2 nav-ul-li">
            <a class="nav-link anchor-nav" href="about.php">About us</a>
          </li>
          <li class="nav-item dropdown mx-2 nav-ul-li">
            <a class="nav-link dropdown-toggle anchor-nav " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Knowledge-Center
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item anchor-nav roadmap-container" href="knowledge.php">Course-Links</a>
              <a class="dropdown-item anchor-nav roadmap-container" href="roadmap.php">Roadmap</a>
            </div>
          </li>
        
          <li class="nav-item mx-2 nav-ul-li">
            <a class="nav-link anchor-nav" href="question.php">Question paper</a>
          </li> 
         
          <li class="nav-item mx-2 nav-ul-li" style="width:100px">
           <img src="assets\images\user-icon.png" class="img-fluid w-50"  alt="">
          </li> 
          
        ';
          }
          if(!$loggedin){
        echo ' <li class="nav-item mx-2">
          <button type="button" class="btn btn-danger px-5 btn-lg" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@getbootstrap">Sign up</button>
          </li>
        
       ';}
      echo  ' </ul>
      </div>
    </nav> ';
    