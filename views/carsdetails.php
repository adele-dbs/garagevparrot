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

<div class="container">
  <div class="row">

    <!-- cars'details -->
    <div class="col-md-6">
      <div class="card carDetail h-100">
        <h5 class="card-title text-center"><?= $brand->getBrandName() ?> - <?= $model->getModelName() ?></h5>
        <p class="card-text">Prix : <?= $car->getCarPrice() ?>€</p>
        <p class="card-text">Kilométrage : <?= $car->getCarMileage() ?></p>
        <p class="card-text">Année : <?= $car->getCarYear() ?></p>
        <p class="card-text">Description : <?= $car->getCarDescription() ?></p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Caractéristique</th>
              <th scope="col">Détail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Couleur :</td>
              <td><?= $color->getColorName() ?></td>
            </tr>
            <tr>
              <td>Nombre de portes :</td>
              <td><?= $door->getDoorName() ?></td>
            </tr>
            <tr>
              <td>Carburant :</td>
              <td><?= $fuel->getFuelName() ?></td>
            </tr>
          </tbody>
        </table>        
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
    </div>

    <div class="col-md-6"> 
      <!-- photos -->
      <div class="row"> 
        <div class="col">            
          <!-- TO DO : improuve photo's posting -->
          <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= $car->getCarPicture1() ?>" class="d-block pictures" alt="Photo de voiture">
              </div>
              <div class="carousel-item">
                <img src="<?= $car->getCarPicture2() ?>" class="d-block pictures" alt="Photo de voiture">
              </div>
              <div class="carousel-item">
                <img src="<?= $car->getCarPicture3() ?>" class="d-block pictures" alt="Photo de voiture">
              </div>
              <div class="carousel-item">
                <img src="<?= $car->getCarPicture4() ?>" class="d-block pictures" alt="Photo de voiture">
              </div>
              <div class="carousel-item">
                <img src="<?= $car->getCarPicture5() ?>" class="d-block pictures" alt="Photo de voiture">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <!-- form cars'details -->
      <div class="row"> 
        <div class="col carDetail">
          <div class="card-title text-center">Contacter-nous</div>
          <form class="row g-3" action="" method="post">
            <div class="col-md-4">
              <label for="addquestionfirstname" class="form-label">Prémon</label>
              <input type="text" class="form-control" id="addquestionfirstname" name="addquestionfirstname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
            </div>
            <div class="col-md-4">
              <label for="addquestionlastname" class="form-label">Nom</label>
              <input type="text" class="form-control" id="addquestionlastname" name="addquestionlastname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
            </div>
            <div class="col-md-4">
              <label for="addquestionemail" class="form-label">Email</label>
              <input type="email" class="form-control" id="addquestionemail" name="addquestionemail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
            </div>
            <div class="col-md-4">
              <label for="addquestionphone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="addquestionphone" name="addquestionphone" placeholder="0000000000" pattern="[0-9]{10}" required>
            </div>
            <div class="col-md-4">
              <label for="addquestioncarid" class="form-label">Au sujet de la voiture n°</label>
              <!-- TO DO : post brand and model -->
              <input type="number" readonly class="form-control" id="addquestioncarid" name="addquestioncarid" value="<?= $car->getCarId() ?>">
            </div>
            <div class="col-12">
              <label for="addquestionmessage" class="form-label">Message</label>
              <textarea type="email" class="form-control" id="addquestionmessage" name="addquestionmessage" rows="6" pattern="[a-zA-Z0-9]+" required></textarea>
            </div>
            <div class="col-12 d-flex justify-content-center">
              <button class="btn contactButton" type="submit">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>

<?php
$content = ob_get_clean();
require_once('layout.php');