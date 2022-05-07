<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <title>Virgilio</title>
  </head>
  
 
<header>
  <nav class="navbar-dark sticky-top p-3 bg-dark" >
    <div class="container">
    <a class="navbar-brand" href="#">
            <img src="<?php echo base_url();?>/assets/images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          </a>
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a class="navbar-brand mb-0 h1 text-white" style="margin-right: 1rem !important; font-size: 1.5rem !important; line-height: inherit;" onclick="location.href='/index.php/pages/view'">Virgilio</a></li>
          <li><a href="#Home" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#Tours" class="nav-link px-2 text-secondary">Tours</a></li>
          <li><a href="#About" class="nav-link px-2 text-secondary">About</a></li>
        </ul>

        <form class="col-12 col-lg-3 mb-3 mb-lg-0 me-lg-3 container">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
        <?php
          if ($_SESSION['logged_in']) {
           // echo "<li><a href='/index.php/profilo/view' class=\"nav-link px-2 text-white\">Ciao, ".esc($_SESSION['userid'])."</a></li>";
           echo "<button type=\"button\" class=\"btn btn-outline-light me-2\" onclick=\"location.href='/index.php/profili/view/".esc($_SESSION['userid'])."'\">Ciao, ".esc($_SESSION['userid'])."</button>";
           echo "<button type=\"button\" class=\"btn btn-warning\" onclick=\"location.href='/index.php/login/dologout'\">Logout</button>";
          } else {
            echo "<button type=\"button\" class=\"btn btn-outline-light me-2\" onclick=\"location.href='/index.php/login/getcredential'\">Login</button>";
            echo "<button type=\"button\" class=\"btn btn-warning\" onclick=\"location.href='/index.php/utenti/create'\">Sign-up</button>";
          }
          ?> 
        </div>
        <!--button type="button" class="btn btn-light">Esci</button-->
      </div>
    </div>
</nav>
<div class="container my-3 mx-3 align-items"> <!--margini-->
     
