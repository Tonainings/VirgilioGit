<!-- inizio prova-->
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
                <li class="list-group-item">Nome: <?= esc($profilo_item['nome']) ?></li>  
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

    
      <form class="d-flex">
        <button type="button" class="btn btn-primary" onclick="document.location.href='tutti_tour'">Cerca un Tour 
</button>
         <!--collegamenti onclick-->

        
      </form>
    </div>
  </div>
</nav>
         
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--fine prova-->

 <h2><?= esc($title) ?></h2>

<?php if (! empty($profilo) && is_array($profilo)): ?>

    <?php foreach ($profilo as $profilo_item): ?> 

        <h3><?= esc($profilo_item['userid']) ?></h3>

        <div class="main">
            <?= esc($profilo_item['nome']) ?>
        </div>
        <p><?= esc($profilo_item['last_name']) ?></p>
    <?php endforeach; ?>

<?php else: ?>

    <h3>No Profile</h3>

    <p>Unable to find any profile for you.</p>

<?php endif ?> 


