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
  

<?= service('validation')->listErrors() ?>

<main class="form-signin container text-center" style="display: flex !important; justify-content: center !important;">
<form action="/profili/create" method="post">
<img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Crea Profilo</h1>

    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <!-- <input type="input" class="form-control" name="userid" required> -->
	      <?php
          if ($_SESSION['logged_in']) {
              echo "<input type=\"text\" readonly class=\"form-control\" name=\"userid\" value= \"".esc($_SESSION['userid'])."\" required>";
              }?>
      <label for="userid">User ID</label>
    </div>
    <select name="identificationid" for="identificationid" class="form-select form-select-sm" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;" aria-label=".form-select-sm example">
    <option selected>Documento</option>
    <option name="identificationid" for="identificationid" value="patente">Patente</option>
    <option name="identificationid" for="identificationid" value="carta_identità">Carta d'identità</option></select>
<!--<div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" name="identificationid" required>
      <label for="identificationid">Patente/carta_identità</label>
    </div>-->
<div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" name="id_num" required>
      <label for="id_num">Id_num</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control"  name="name" required>
      <label for="name">Nome</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" name="last_name" required>
      <label for="last_name">Cognome</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control"  name="city" required>
      <label for="city">Città</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" name="region" required>
      <label for="region">Regione</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <textarea type="text" class="form-control" name="bio" cols="45" rows="4"></textarea>
      <label for="bio">Bio</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" name="phone_number" >
      <label for="phone_number">Numero telefonico</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" style="width: 300px !important; margin-bottom: 20px !important;">Crea Profilo</button>
    
</form>
</main>
  



