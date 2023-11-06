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

<div class="container">
  <div class="row">
    <div class="col-sm-4 text-center">
      <div class="card-title">Année</div>
      <div class="row">
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Minimum : </label>
          <input type="number" class="form-control">
        </div>
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Maximum : </label>
          <input type="number" class="form-control">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center">
      <div class="card-title">Kilométrage</div>
      <div class="row">
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Minimum : </label>
          <input type="number" class="form-control">
        </div>
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Maximum : </label>
          <input type="number" class="form-control">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center">
      <div class="card-title">Prix</div>
      <div class="row">
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Minimum : </label>
          <input type="number" class="form-control">
        </div>
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Maximum : </label>
          <input type="number" class="form-control">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <?php foreach ($cars as $car): ?>
      <div class="col">
        <article class="d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <div>
              <img src="<?= $car['p1'] ?>" class="card-img-top" alt="Photo de la voiture">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"><?= $car['brandname'] ?> - <?= $car['modelname'] ?> </h5>
              <p class="card-text">Prix: <?= $car['price'] ?>€</p>
              <p class="card-text">Kilométrage: <?= $car['mileage'] ?></p>
              <p class="card-text">Année: <?= $car['year'] ?></p>
              <a href="?page=cardetail&id=<?= $car['carid'] ?>" class="btn detailButton d-flex justify-content-center">Détails</a>
            </div>
          </div>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Pagination? -->

<?php
$content = ob_get_clean();
require_once('layout.php');