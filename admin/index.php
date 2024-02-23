<?php 
include'akses.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/styleindex.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller bg-black">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.php">RLMobil</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button type="button" class="btn btn-warning"><a href="../logout.php" style="color: #fff;" onclick="return confirm('Yakin Akan LogOut ?')">Log Out</a></button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.php -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/face.jpg" alt="">
            <p class="name">Richard V.Welsh</p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <img src="images/icons/dashboard.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=mobil">
                <img src="images/icons/mobil.png" alt="">
                <span class="menu-title">Mobil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=Pengembalian">
                <img src="images/icons/pengembalian.png" alt="">
                <span class="menu-title">Pengembalian</span>
              </a>
            </li>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <?php 
          if (isset($_GET['page'])  > 0) {
             $hal = str_replace(".", "/", $_GET['page']) . ".php";
          }else {
              $hal = "Dasboard.php";
          }
            if (file_exists($hal)) {
              include($hal);
          } 
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'mobil':
                      include "Data/Mobil/tampilMobil.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'tambahMobil':
                      include "Data/Mobil/tambahMobil.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'simpanMobil':
                      include "Data/Mobil/simpanMobil.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'editMobil':
                      include "Data/Mobil/editMobil.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'updateMobil':
                      include "Data/Mobil/updateMobil.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'hapusMobil':
                      include "Data/Mobil/hapusMobil.php";
                      break;      
                  }
              }
          ?>


          <!-- PENGEMBALIAN -->
           <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'Pengembalian':
                      include "Data/Pengembalian/tampilPengembalian.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'tambahPengembalian':
                      include "Data/Pengembalian/tambahPengembalian.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'simpanPengembalian':
                      include "Data/Pengembalian/simpanPengembalian.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'editPengembalian':
                      include "Data/Pengembalian/editPengembalian.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'updatePengembalian':
                      include "Data/Pengembalian/updatePengembalian.php";
                      break;      
                  }
              }
          ?>
          <?php 
              if(isset($_GET['page'])){
                $page = $_GET['page'];         
                  switch ($page) {
                    case 'hapusPengembalian':
                      include "Data/Pengembalian/hapusPengembalian.php";
                      break;      
                  }
              }
          ?>
      </div>
    </footer>

    <!-- partial -->
  </div>
</div>

</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/chart.js"></script>
<script src="js/maps.js"></script>
</body>

</html>
