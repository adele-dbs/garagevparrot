<?php
$titre = 'Garage V. Parrot - Identifiez-vous';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="login"';
ob_start();
?>

<header class="container">
  <div class="row p-3">
    <div class="col text-center align-self-center">
      <h1>Identifiez-vous</h1>
    </div>
  </div>
</header>

<main>
  
  <div class="container d-flex justify-content-center" id="login-f">
    <form action="" method="POST" id="login-form">
      <div class="form-group">
        <label for="exampleInputEmail1">Email : </label>
        <input type="email" name="email" class="form-control" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe : </label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <button type="submit" class="btn btn-light btn-outline-dark">Se connecter</button>
    </form>
  </div>

</main>

<script src="views/login-messages.js"></script>

<?php
$content = ob_get_clean();
require_once('layout.php');