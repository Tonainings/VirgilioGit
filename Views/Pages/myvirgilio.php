<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--<title>Virgilio</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#Home" class="navbar-brand mb-0 h1 text-white" style="margin-right: 1rem !important; font-size: 1.5rem !important; line-height: inherit;">Virgilio</a></li>
              <li><a href="#Home" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="#Tours" class="nav-link px-2 text-secondary">Tours</a></li>
              <li><a href="#About" class="nav-link px-2 text-secondary">About</a></li>
            </ul>
          <button type="button" class="btn btn-light">Esci</button>
        </div>
       
      </nav>
      <div class="container my-3 mx-3 align-items"> <margini--> <!--fine header-->

     <!--inizio overview-->
<!-- 
  <nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <div class="container-fluid">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
          Profilo
        </button>
      </p>
      <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
          <div class="card card-body" style="width: 500px;">
            <ul class="list-group">
                <li class="list-group-item">Nome</li>
                <li class="list-group-item">Cognome</li>
                <li class="list-group-item">Città</li>
                <li class="list-group-item">Regione</li>
                <li class="list-group-item">Bio</li>
                <li class="list-group-item">Cellulare</li>
                <li class="list-group-item">Documento di riconoscimento (ID)</li>
                </ul>
                
                 <button class="btn btn-primary" type="button" onclick="document.location.href='profilo'" style="margin-top: 10px;
    margin-left: 300px;">modifica profilo </button>

              
              <div class="text-central">
              <img src="..." class="rounded float-right img-thumbnail" alt="...">
              </div>
          </div>
        </div>
</div>

      </div>
      -->  <!-- VECCHIO PROFILO-->
                

        
      
      <?php
              
              if ($_SESSION['tipo'] === 'tourist' ) {
              echo "<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='/index.php/tour/index/'\" >Cerca un Tour </button>";
              } else {
              echo "<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='/index.php/tour/create/'\">Crea un Tour</button>";
              }
              ?>
        
       
    </div>
  </div>
</nav>
         
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html> 