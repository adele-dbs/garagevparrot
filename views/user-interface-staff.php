<?php
$titre = 'Garage - Espace Administrateur';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="staff"';
ob_start();
?>

<div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-2">Services</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Véhicules</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Commentaires</a>
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <h4 id="list-item-2">Services</h4>
      <p>...</p>
      <h4 id="list-item-3">Véhicules</h4>
      <p>...</p>
      <h4 id="list-item-4">Commentaires</h4>
      <p>...</p>
    </div>
  </div>
</div>


<?php
$content = ob_get_clean();
require_once('layout-interface.php');