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

</head>

<section class="content">

<div class="card card-solid">
<div class="card-body">
<div class="row">
<div class="col-12 col-sm-6">
<?php
                                if ($_SESSION['logged_in']) {
                                echo "<div class=\"text-center\">";
                                  echo " <h3 class=\"d-inline-block d-sm-none\">".esc($tour_name)."</h3>";
                                echo "</div>";
                                }
                                ?>  

<div class="col-12">
<img src="../../dist/img/prod-1.jpg" class="product-image" alt="Product Image">
</div>
<div class="col-12 product-image-thumbs">
<div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg" alt="Product Image"></div>
<div class="product-image-thumb"><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
<div class="product-image-thumb"><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
<div class="product-image-thumb"><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
<div class="product-image-thumb"><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div>
</div>
</div>
<div class="col-12 col-sm-6">


<h3><?= esc($tour['tour_name']) ?></h3>

<p> creato da <?=  esc($tour['userid']) ?></p>
<hr>
<h4>Informazioni</h4>

<p>  <?=  esc($tour['date_tour']) ?></p>

<p>  <?=  esc($tour['time_tour']) ?></p>


<div class="mt-4">
<div class="btn btn-primary btn-lg btn-flat">
<i class="fas fa-cart-plus fa-lg mr-2"></i>
Iscriviti
</div>
<div class="btn btn-default btn-lg btn-flat">
<i class="fas fa-heart fa-lg mr-2"></i>
Aggiungi ai preferiti
</div>
</div>

</div>
</div>



<div class="row mt-4">
<nav class="w-100">
<div class="nav nav-tabs" id="product-tab" role="tablist">
<a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
<a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
<a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
</div>
</nav>
<div class="tab-content p-3" id="nav-tabContent">
<div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> <?=  esc($tour['description']) ?> </div>
<div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
<div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
</div>
</div>
</div>

</div>

</section>

</div>



<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>
<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>


</body>
</html>
