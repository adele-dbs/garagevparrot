<?php
$titre = 'Garage - Accueil';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="home"';
ob_start();
?>

<div class="container text-center">
  <div class="row">
    <div class="col-md-7">
      <section>
        <div class="row g-4">
          <?php foreach ($services as $service): ?>
            <div class="col-md-6">  
              <div class="card h-100 services-card">
                <div class="card-body">
                  <h5 class="card-title"><?= $service->getServiceName() ?></h5>
                  <p class="card-text"><?= $service->getServiceDescription() ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>

    <div class="col-md-5">
      <aside>

        <section>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
              <a type="button" href="?page=cars" class="btn card-title carsButton">Voir les véhicules d'occasion</a>
            </div> 
            <div class="col-md-6">
              <img class="img-cars-home" src="views/pictures/home-1.jpg"  alt="Photo d'un véhicule">
            </div>
          </div>
        </section>
        
        <section>
          <div class="row">
            <div class="col-12 text-center"> 
              <h1>Comentaires</h1>
            </div>
              <div class="row">
                <?php foreach ($commentariesvalid as $commentary): ?>
                  <div class="col-sm-6">  
                    <div class="card commentary-card h-100">
                      <div class="card-body">
                        <p class="card-text-commentary"><?= $commentary['commentary'] ?></p>
                        <p class="card-text"><?= $commentary['name'] ?></p>
                        <p class="card-text"><?= $commentary['rating'] ?>/5</p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
            </div>
          </div>
          <button type="button" class="btn commentButton" data-bs-toggle="modal" data-bs-target="#commentModal">Laisser un commentaire</button>
        </section>

      </aside>
      
    </div>
  </div>
</div>

<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="card-title" id="commentModalLabel">Ajouter un commentaire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <form class="row g-3" method="POST">
            <div class="col-md-4">
              <label for="addfirstname" class="form-label">Prémon</label>
              <input type="text" class="form-control" name="addfirstname" id="addfirstname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
            </div>
            <div class="col-12">
              <label for="addcommentary" class="form-label">Commentaire</label>
              <textarea type="text" class="form-control" id="addcommentary" name="addcommentary" rows="6" required></textarea>
            </div>
            <div class="col-12">
              <label for="addrating" class="form-label">Note sur 5</label>
              <input type="number" class="form-control" name="addrating" id="addrating" min=0 max=5 required>
            <div class="col-12">
              <button class="btn commentForm" type="submit">Publier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
$content = ob_get_clean();
require_once('layout.php');