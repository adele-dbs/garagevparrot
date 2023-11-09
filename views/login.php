<?php
$titre = 'Garage V. Parrot - Identifiez-vous';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="login"';
ob_start();
?>

  <div class="container" id="login-f">
  <h5 class="card-title text-center">Identifiez-vous</h5>
    <div class="d-flex align-items-center justify-content-center h-100">
      <form action="" method="POST" id="login-form">
        <div class="form-group">
          <label for="exampleInputEmail1">Email : </label>
          <input type="email" name="email" class="form-control" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe : </label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn loginButton">Se connecter</button>
      </form>
    </div>
  </div>


<script src="views/login-messages.js"></script>

<?php
$content = ob_get_clean();
require_once('layout.php');