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
        <div class="row">
          <?php foreach ($services as $service): ?>
            <div class="col-sm-6">  
              <div class="card services-card">
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
              <div class="card" id="button-view-cars">
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
        </section>
        
        <section>
          <div class="row">
            <p>Comentaires</p>
          </div>
        </section>

      </aside>
      
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once('layout.php');