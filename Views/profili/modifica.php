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
<form action="/profili/modify" method="post" enctype="multipart/form-data">



                                <?php
                                if ($_SESSION['logged_in']) {
                                echo "<div class=\"text-center\">";
                                  echo " <h3 class=\"profile-username text-center\">".esc($title)."</h3>";
                                echo "<img class=\"img-fluid rounded-circle\" src='" . $profilo['image'] . "' alt=\"Circle image\" height=\"200\" width=\"200\"/>";
                                }
                                ?>  






<!-- <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    
    <h1 class="h3 mb-3 fw-normal">Modifica Profilo</h1>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php
          if ($_SESSION['logged_in']) {
              echo "<input type=\"text\" readonly class=\"form-control\" name=\"userid\" value= \"".esc($_SESSION['userid'])."\" required>";
              }?>
              
      <label for="userid">UserID</label>
    </div>
    
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php
          if ($_SESSION['logged_in']) {
              echo "<input type=\"text\" readonly class=\"form-control\" name=\"identificationid\" value= \"".esc($profilo['identificationid'])."\" required>";
              }?>
              
      <label for="userid">Documento</label>
    </div>

   <!-- <select name="identificationid" for="identificationid" class="form-select form-select-sm" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;" aria-label=".form-select-sm example">
    <option selected>Documento</option>
    <option name="identificationid" for="identificationid" value="patente">Patente</option>
    <option name="identificationid" for="identificationid" value="carta_identità">Carta d'identità</option></select>  -->

    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php  if ($_SESSION['logged_in']) {  
    echo "<input type=\"text\" readonly class=\"form-control\" name=\"id_num\" value= \"".esc($profilo['id_num'])."\" required>";
    }
       ?>
      <label for="id_num">Id_num</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      
    <?php if ($_SESSION['logged_in']) {  
    echo "<input type=\"input\" class=\"form-control\" name=\"name\" value= \"".esc($profilo['name'])."\" required>";
    }?>
     
    <label for="name">Nome</label>
          
      </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php if ($_SESSION['logged_in']) {  
    echo "<input type=\"input\" class=\"form-control\" name=\"last_name\" value= \"".esc($profilo['last_name'])."\" required>";
    }?>
      <label for="last_name">Cognome</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php if ($_SESSION['logged_in']) {  
    echo "<input type=\"input\" class=\"form-control\" name=\"city\" value= \"".esc($profilo['city'])."\" required>";
    }?>
      <label for="city">Città</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php if ($_SESSION['logged_in']) {  
    echo "<input type=\"input\" class=\"form-control\" name=\"region\" value= \"".esc($profilo['region'])."\" required>";
    }?>
      <label for="region">Regione</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php if ($_SESSION['logged_in']) {  
    echo "<textarea type=\"text\" class=\"form-control\" name=\"bio\" cols=\"45\" rows=\"4\">".esc($profilo['bio'])."</textarea>";
    }?>
      <label for="bio">Bio</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
    <?php if ($_SESSION['logged_in']) {  
    echo "<input type=\"input\" class=\"form-control\" name=\"phone_number\" value= \"".esc($profilo['phone_number'])."\" required>";
    }?>
      <label for="phone_number">Numero telefonico</label>
    </div>
    <div class="input-group mb-3">
      <input type="file" class="form-control" name="image" id="image">
      <label class="input-group-text" for="image">Carica la tua foto profilo</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" style="width: 300px !important; margin-bottom: 20px !important;">Aggiorna Profilo </button>
    
    
</form>
</main>
