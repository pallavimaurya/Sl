<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true ){
    $loggedin= true;
}
else {
    $loggedin = false;
}


echo ' <div class="row footer-box mt-5 p-5">
            <div class="col col-md-4 col-sm-6 col-12">
              <h2 class="footer-heading">Squad Library</h2> ';
              if($loggedin){
            echo ' <ul class="d-flex flex-row list-unstyled">
              <li class="pr-3"><a href="home.php" class="Footer-links">Home</a></li>
            <li class="pr-3"><a href="about.php" class="Footer-links">About us</a></li>
            <li class="pr-3"><a href="knowledge.php" class="Footer-links">Knowledge Center</a></li>
            <li class="pr-3"><a href="question.php" class="Footer-links">Question papers</a></li>
              </ul> ';}
           echo ' <p class="footer-center">Squad Library &copy; 2023</p>
            </div>
            <div class="col col-md-4 col-sm-6 col-12">
              <div class="d-flex">
                <i class="fa fa-phone mr-3 footer-center"></i>
                  <p class="footer-center">+91 9643630373</p>
              </div>
    
              <div class="d-flex">
                <i class="fa fa-envelope mr-3 footer-center"></i>
                <p><a href="mailto:support@company.com" class="footer-center">squadlibrary818@gmail.com</a></p>
              </div>
            </div>
            <div class="col col-md-4 col-sm-6 col-12">
              <div>
                <h4 class="footer-center">About the library</h4>
                <p class="footer-center">A planned library of Previous year Question papers and Study materials design to fulfil certain predetermined purposes</p>
              </div>
              <div >
                <a href="https://www.facebook.com/?sk=welcome" target="_blank"><i class="fa fa-facebook footer-icon"></i></a>
          <a href="https://twitter.com/home" target="_blank"><i class="fa fa-twitter footer-icon"></i></a>
          <a href="https://www.linkedin.com/feed/?trk=onboarding-landing" target="_blank"><i class="fa fa-linkedin footer-icon"></i></a>
              </div>
            </div>
          </div>
        </div>';
