<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">


    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">

  </head>
  
<?php
if ($_SESSION['logged_in']) {
echo " <h2>".esc($title)."</h2>";
echo " <h2>".esc($_SESSION['userid'])."</h2>";
echo " <p>".esc($profilo['name'])."</p>";
}
?>
<form class="d-flex">
        
        <button type="button" class="btn btn-primary" onclick="document.location.href='/index.php/profili/create'">Crea profilo 
</button> <!--collegamenti onclick-->
<button type="button" class="btn btn-primary" onclick="document.location.href='/index.php/profili/modify'">Modifica profilo 
</button>
        
      </form>