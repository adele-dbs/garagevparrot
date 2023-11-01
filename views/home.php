<?php
$titre = 'Garage - Accueil';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="home"';
ob_start();
?>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-7">
      <section>
        <div class="row g-4">
          <?php foreach ($services as $service): ?>
            <div class="col-sm-6">  
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

    <div class="col-sm-5">
      <aside>

        <section>
          <div class="row">
            <div class="col-sm-6">
              <div class="card h-100" id="button-view-cars">
                <div class="card-body">
                  <a href="?page=cars">
                    <h5 class="card-title">Voir les véhicules d'occasion</h5>
                  </a>
                </div>
              </div> 
            </div> 
            <div class="col-sm-6">
              <img class="img-cars-home" src="views/pictures/home-1.jpg"  alt="Photo d'un véhicule">
            </div>
          </div>
        </section>
        
        <section>
          <div class="row">
            <h1>Comentaires</h1>
              <?php foreach ($commentaries as $commentary): ?>
                <div class="col">  
                  <div class="card h-100">
                    <div class="card-body">
                      <p class="card-title"><?= $commentary['commentary'] ?></p>
                      <p class="card-text"><?= $commentary['name'] ?></p>
                      <p class="card-text"><?= $commentary['rating'] ?>/5</p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#commentModal">Laissez un commentaire</button>
          </div>
        </section>

      </aside>
      
    </div>
  </div>
</div>

<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="commentModalLabel">Ajoutez un commentaire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="models/Commentaries.php" method="POST">
            <div class="col-md-4">
              <label for="addfirstname" class="form-label">Prémon</label>
              <input type="text" class="form-control" name="addfirstname" id="addfirstname" required>
            </div>
            <div class="col-12">
              <label for="addcommentary" class="form-label">Commentaire</label>
              <textarea type="email" class="form-control" id="addcommentary" name="addcommentary" rows="6" required></textarea>
            </div>
            <div class="col-12">
              <label for="customRange3" class="form-label">Note</label>
              <p>1</p>
              <input type="range" class="form-range" min="0" max="5" step="1" name="addrating" id="addrating">
              <p class="text-end">5</p>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Publier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
$content = ob_get_clean();
require_once('layout.php');