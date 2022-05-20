<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
   
    <title>Virgilio</title>
  </head>
  


<header>
  <nav class="navbar navar-dark sticky-top p-3 bg-dark" >
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>/assets/images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          </a>
      
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a class="navbar-brand mb-0 h1 text-white" style="margin-right: 1rem !important; font-size: 1.5rem !important; line-height: inherit;" onclick="location.href='/index.php/pages/view'">Virgilio</a></li>
          <li><a href="#Home" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#Tours" class="nav-link px-2 text-secondary">Tours</a></li>
          <li><a href="#About" class="nav-link px-2 text-secondary">About</a></li>
        </ul>

       

        <div class="text-end">
        <?php 
          if ($_SESSION['logged_in']) {
           
           echo "<button type=\"button\" class=\"btn btn-outline-light me-2\" onclick=\"location.href='/index.php/profili/view/".esc($_SESSION['userid'])."'\">Ciao, ".esc($_SESSION['userid'])."</button>";
           echo "<button type=\"button\" class=\"btn btn-warning\" onclick=\"location.href='/index.php/login/dologout'\">Logout</button>";
          } else {
            echo "<button type=\"button\" class=\"btn btn-outline-light me-2\" onclick=\"location.href='/index.php/login/getcredential'\">Login</button>";
            echo "<button type=\"button\" class=\"btn btn-warning\" onclick=\"location.href='/index.php/utenti/create'\">Sign-up</button>";
          }
          ?> 
        </div>
    </div>
</nav>
<div class="container my-3 mx-3 align-items"> 
     
