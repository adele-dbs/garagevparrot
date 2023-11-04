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
    <img src="<?= $car->getCarPicture1() ?>" class="w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture2() ?>" class="w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture3() ?>" class="w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture4() ?>" class="w-25 pictures" alt="Photo de voiture">
    <img src="<?= $car->getCarPicture5() ?>" class="w-25 pictures" alt="Photo de voiture">
</div>

<div class="container">
  <div class="row">
    <!-- cars'details -->
    <div class="col-sm-6">
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
    </div>

    <!-- form cars'details -->
    <div class="col-sm-6">
      <form class="row g-3" action="models/Form.php" method="post">
        <div class="col-md-4">
          <label for="firstname" class="form-label">Prémon</label>
          <input type="text" class="form-control" id="firstname" name="firstname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
        </div>
        <div class="col-md-4">
          <label for="lastname" class="form-label">Nom</label>
          <input type="text" class="form-control" id="lastname" name="lastname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
        </div>
        <div class="col-md-4">
          <label for="phone" class="form-label">Téléphone</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="0000000000" pattern="[0-9]{10}" required>
        </div>
        <div class="col-12">
          <label for="message" class="form-label">Message</label>
          <textarea type="email" class="form-control" id="message" name="message" rows="6" pattern="[a-zA-Z0-9]+" required></textarea>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
      </form>
    </div>

<?php
$content = ob_get_clean();
require_once('layout.php');