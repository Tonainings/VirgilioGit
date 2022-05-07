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
  <form action="/utenti/create" method="post">
    <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Sign-up</h1>

    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" placeholder="name@example.com" name="email" required>
      <label for="email">Email address</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="input" class="form-control" placeholder="UserID" name="userid" required>
      <label for="userid">UserID</label>
    </div>
    <div class="form-floating "style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="Password" class="form-control" placeholder="Password" name="password" required>
      <label for="password">Password</label>
    </div>
    <div class="form-floating" style="width: 500px !important; border-bottom-style: solid !important; border-bottom-width: 0px !important; margin-bottom: 10px !important;">
      <input type="Password" class="form-control" placeholder="Password">
      <label for="conferma_password">Conferma password</label>
    </div>
    <div class="form-check container" style="text-align: left !important">
  <input class="form-check-input" type="radio" name="tipo" id="tourist" value="tourist" checked>
  <label class="form-check-label" for="tipo">Turista</label>
</div>
<div class="form-check container" style="text-align: left !important; margin-bottom: 10px !important;">
  <input class="form-check-input" type="radio" name="tipo" id="guide" value="guide" checked>
  <label class="form-check-label" for="tipo">Guida</label>
</div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin-bottom: 20px !important;">Sign-up</button>
    <p style="justify-content: center !important"> Hai già un account? <a href="/index.php/pages/view/signin"> Accedi</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>


    
  
</html>