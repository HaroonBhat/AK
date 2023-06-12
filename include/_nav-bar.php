<?php
session_start();
echo'
  <nav class="navbar navbar-dark bg-white  p-3 ">
    <div class="container-fluid   ">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar"><img src="images/hamburger_icon-c3a60e81.svg" alt="">
      </button>
      <a class="navbar-brand text-black  " href="#">ABOUT KASHMIR</a>';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

      echo'
      <a class="navbar-brand text-black" href="view/users/logout.php">LOG OUT</a>';
      }
      else{
        echo'
        <a class="navbar-brand text-black" href="view/users/login.php">LOG IN</a>';
      }

      echo '
      <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">About Kashmir</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>';
  ?>