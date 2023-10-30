<?php
$titre = 'Garage - Caractéritique du véhicules';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="cardetail"';
ob_start();
?>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?">Accueil</a></li>
    <li class="breadcrumb-item"><a href="?page=cars">Véhicules d'occasion</a></li>
    <li class="breadcrumb-item active" aria-current="page">Détails</li>
  </ol>
</nav>

<div>
    <img src="<?= $car->getCarPicture1() ?>" class="d-block w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture2() ?>" class="d-block w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture3() ?>" class="d-block w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture4() ?>" class="d-block w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture5() ?>" class="d-block w-25 pictures" alt="Photo de voiture">
</div>

<h5 class="card-title"><?= $brand->getBrandName() ?> - <?= $model->getModelName() ?></h5>
<p class="card-text">Prix: <?= $car->getCarPrice() ?>€</p>
<p class="card-text">Kilométrage: <?= $car->getCarMileage() ?></p>
<p class="card-text">Année: <?= $car->getCarYear() ?></p>
<p class="card-text">Equipements: 
  <ul>
    <?php foreach ($carEquipments as $equipment): ?>
      <li><?= $equipment->getEquipmentName() ?></li>
    <?php endforeach; ?>
  </ul>
</p>
<p class="card-text">Options: 
  <ul>
    <?php foreach ($carOptions as $option): ?>
      <li><?= $option->getOptionName() ?></li>
    <?php endforeach; ?>
  </ul>
</p>

<?php
$content = ob_get_clean();
require_once('layout.php');