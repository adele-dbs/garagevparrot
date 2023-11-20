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

<!--TO DO : search without recharge-->
<div class="container">
  <form class="" method="POST" action="">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="card-title">Année</div>
        <div class="row">
          <div class="col-6">
            <label for="filteryearmin" class="form-label">Minimum : </label>
            <input type="number" class="form-control" name="filteryearmin" id="filteryearmin" required>
          </div>
          <div class="col-6">
            <label for="filteryearmax" class="form-label">Maximum : </label>
            <input type="number" class="form-control" name="filteryearmax" id="filteryearmax" required>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="card-title">Kilométrage</div>
        <div class="row">
          <div class="col-6">
            <label for="filtermileagemin" class="form-label">Minimum : </label>
            <input type="number" class="form-control" name="filtermileagemin" id="filtermileagemin" required>
          </div>
          <div class="col-6">
            <label for="filtermileagemax" class="form-label">Maximum : </label>
            <input type="number" class="form-control" name="filtermileagemax" id="filtermileagemax" required>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="card-title">Prix</div>
        <div class="row">
          <div class="col-6">
            <label for="filterpricemin" class="form-label">Minimum : </label>
            <input type="number" class="form-control" name="filterpricemin" id="filterpricemin" required>
          </div>
          <div class="col-6">
            <label for="filterpricemax" class="form-label">Maximum : </label>
            <input type="number" class="form-control" name="filterpricemax" id="filterpricemax" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-light">Rechercher</button>
    </form>
  </div>

  <!-- if filter : just search result -->
  <section class="container">
    <?php
      if(isset($_POST['filterpricemin']) && isset($_POST['filterpricemax']) 
      && isset($_POST['filteryearmin']) && isset($_POST['filteryearmax']) 
      && isset($_POST['filtermileagemin']) && isset($_POST['filtermileagemax'])
      && $_POST['filterpricemin']!== "" && $_POST['filterpricemax']!== ""
      && $_POST['filteryearmin']!== "" && $_POST['filteryearmax']!== ""
      && $_POST['filtermileagemin']!== "" && $_POST['filtermileagemax']!== ""){
    ?>
    <div class="row">
      <?php foreach ($carsFound as $car): ?>
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
  </section>

<!-- if not filter : all cars -->
  <section>
    <?php
      } else {
    ?>
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
  </section>
  <?php
    }
  ?>
</div>

<!-- TO DO : Pagination -->

<script src="views/filter.js"></script>

<?php
$content = ob_get_clean();
require_once('layout.php');