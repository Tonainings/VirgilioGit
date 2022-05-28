
<h2 class=" text-center"><?= esc($title) ?></h2>


<?php if (! empty($tour) && is_array($tour)): ?>
    
    <?php foreach ($tour as $tour_item): ?> 

 <div class="card mb-3 container" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://cdn.getyourguide.com/img/tour/4f169e1c68459.png/146.jpg" class="img-fluid rounded-start" alt="...">
        </div>
            <div class="col-md-8">
              <div class="card-body">
                  <h5 class="card-title"><?= esc($tour_item['tour_name']) ?></h5>
                  <p><?= esc($tour_item['region']) ?></p>
                  <p class="card-text"><?= esc($tour_item['description']) ?></p>

                <?php echo "<a onclick=\"location.href='/index.php/tour/view/".esc($tour_item['tourid'])."'\" class=\"btn btn-primary\">Vedi tour</a>" ?>
                 </div>
                </div>
          </div>
        </div>

    <?php endforeach; ?>


<?php else: ?>

    <h3>No Tour</h3>

    <p>Unable to find any tour for you.</p>

<?php endif ?>



<!-- /.col-lg-4 -->




