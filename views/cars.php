<?php
$titre = 'Garage V.Parrot - Véhicules d\'Occasion';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="cars"';
ob_start();
?>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?">Accueil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Véhicules d'occasion</li>
  </ol>
</nav>


<div class="container text-center">
  <div class="row">
    <?php foreach ($cars as $car): ?>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="<?= $car->getCarPicture1() ?>" class="card-img-top" alt="Photo de la voiture">
          <div class="card-body">
            <h5 class="card-title"><?= $car->getCarBrand() ?> - </h5>
            <p class="card-text">Prix: <?= $car->getCarPrice() ?>€</p>
            <p class="card-text">Kilométrage: <?= $car->getCarMileage() ?>€</p>
            <p class="card-text">Année: <?= $car->getCarYear() ?>€</p>
            <a href="#" class="btn btn-primary">Détails</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<nav aria-label="Pagination">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php
$content = ob_get_clean();
require_once('layout.php');