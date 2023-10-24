<?php
$titre = 'Garage - Accueil';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="home"';
ob_start();
?>

<div class="container text-center">
  <div class="row">
    <div class="col-8">
      <section>
          <div class="row">
            <div class="col">
              <div class="services-card">
                <div class="card-body">
                  <h5 class="card-title">Freins</h5>
                  <p class="card-text">Changement des disques et plaquettes.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="services-card">
                <div class="card-body">
                  <h5 class="card-title">Batterie</h5>
                  <p class="card-text">Vente et changement des batteries auto et moto</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="services-card">
                <div class="card-body">
                  <h5 class="card-title">Pneus</h5>
                  <p class="card-text">Vente, pose et parallélisme</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="services-card">
                <div class="card-body">
                  <h5 class="card-title">Vidange</h5>
                  <p class="card-text">Vidange basique ou intégrale(changement de tous les filtres)</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="services-card">
                <div class="card-body">
                  <h5 class="card-title">Mécanique</h5>
                  <p class="card-text">Toutes les prestations de mécanique auto</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="services-card">
                <div class="card-body">
                  <h5 class="card-title">Pare-brise</h5>
                  <p class="card-text">Réparation d'impact et changement de pare-brise</p>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
    <div class="col-4">
      <aside>
        <section>
          <div class="row">
            <div class="col">
              <div>
                  <a type="button" class="btn button-cars-card">Véhicules d'occasion</a>
              </div>  
            </div>
            <div class="col cars-home-pictures">
              <img class= "cars-home-picture" src="views/pictures/home-1.jpg"  alt="Photo d'un véhicule">
              <img class= "cars-home-picture" src="views/pictures/home-2.jpg"  alt="Photo d'un véhicule">
              <img class= "cars-home-picture" src="views/pictures/home-3.jpg"  alt="Photo d'un véhicule">
              <img class= "cars-home-picture" src="views/pictures/home-4.jpg"  alt="Photo d'un véhicule">
            </div>
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