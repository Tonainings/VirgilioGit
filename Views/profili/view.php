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

  
  <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="card card-primary card-outline" style="border-bottom-width: 1px !important; margin-bottom: 10px !important;">
                                <div class="card-body box-profile">
                                <?php
                                if ($_SESSION['logged_in']) {
                                echo "<div class=\"text-center\">";
                                  echo " <h3 class=\"profile-username text-center\">".esc($title)."</h3>";
                                echo "</div>";
                                echo "<img class=\"profile-user-img img-fluid rounded-circle\" src='" . $profilo['image'] . "' alt=\"User profile picture\"/>";
                                echo " <p class=\"text-muted text-center\">".esc($_SESSION['userid'])."</p>";
                                }
                                ?>  
                                </div>
                            </div>

                            <div class="card card-primary" style="border-bottom-width: 1px !important; margin-bottom: 10px !important;">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>

                                <div class="card-body">
                                    
                                    <strong>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                         Location
                                    </strong>
                                    <?php
                                      if ($_SESSION['logged_in']) {
                                      
                                      echo " <p class=\"text-muted\">".esc($profilo['city']).", ".esc($profilo['region'])."</p>";
                                      }
                                      ?>
                                  
                                    <hr>
                                    <strong>
                                        <i class="fas fa-pencil-alt mr-1"></i>
                                         Phone number
                                    </strong>
                                    <?php
                                      if ($_SESSION['logged_in']) {
                                      
                                      echo " <p class=\"text-muted\">".esc($profilo['phone_number'])."</p>";
                                      }
                                      ?>
                                    
                                    <hr>
                                    <strong>
                                        <i class="far fa-file-alt mr-1"></i>
                                         Bio
                                    </strong>
                                    <?php
                                      if ($_SESSION['logged_in']) {
                                      
                                      echo " <p class=\"text-muted\">".esc($profilo['bio'])."</p>";
                                      }
                                      ?>
                            
                                </div>

                            </div>
<form class="d-flex">
        <?php
                  if ($userid=$profilo['userid']) {
                   echo "<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='/index.php/profili/modify/".esc($_SESSION['userid'])."'\">Modifica profilo</button>";
                   } else {
                    echo "<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='/index.php/profili/create'\">Crea profilo</button>";
                    }
                  ?>
        </form>
  </section>