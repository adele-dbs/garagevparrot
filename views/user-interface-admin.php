<?php
$titre = 'Garage - Espace Administrateur';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="admin"';
ob_start();
?>

<div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">Employés</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Services</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Véhicules</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Commentaires</a>
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      
    <h4 id="list-item-1">Employés</h4>
      <!-- form --> 
      <section class="container" id="service-form">
          <?php
              // update
              if(isset($_POST['updateStaff'])){
                ?>
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="updatestaffid">Id : </label>
                    <input type="text" name="updatestaffid" readonly class="form-control" id="updatestaffid" value="<?=($_POST['updateStaff'])?>" required>
                    <label for="updatestafffirstname">Nom : </label>
                    <input type="text" name="updatestafffirstname" class="form-control" id="updatestafffirstname" value="<?=$serviceById->getServiceName()?>" required>
                    <label for="updatestafflastname">Nom : </label>
                    <input type="text" name="updatestafflastname" class="form-control" id="updatestafflastname" value="<?=$serviceById->getServiceName()?>" required>
                    <label for="updatestaffemail">Nom : </label>
                    <input type="email" name="updatestaffemail" class="form-control" id="updatestaffemail" value="<?=$serviceById->getServiceName()?>" required>
                    <label for="updatestaffpassword">Nom : </label>
                    <input type="password" name="updatestaffpassword" class="form-control" id="updatestaffpassword" value="<?=$serviceById->getServiceName()?>" required>
                    <label for="updatestaffright">Nom : </label>
                    <input type="number" name="updatestaffright" class="form-control" id="updatestaffright" min="1" max="2" value="<?=$serviceById->getServiceName()?>" required>
                  </div>
                  <button type="submit" class="btn btn-light btn-outline-dark" id="buttonUpdateStaff">Modifier</button>
                </form>
                <?php
              // add
              } else {
                ?>
                <form action="" method="POST" id="addStaffForm">
                  <div class="form-group">
                    <label for="addstaffname">Nom : </label>
                    <input type="text" name="addstaffname" class="form-control" id="addstaffname" required>
                    
                  </div>
                  <button type="submit" class="btn btn-light btn-outline-dark" id="buttonAddStaff">Ajouter</button>
                </form>
                <?php
              }
            ?>
          </section>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Service</th>
              <th scope="col">Description</th>
              <th scope="col">Modifier</th>
              <th scope="col">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($services as $service): ?>
              <tr>
                <td><?= $service->getServiceName() ?></td>
                <td><?= $service->getServiceDescription() ?></td>
                <td>
                  <!-- update -->
                  <form action="" method="POST">  
                    <button type="submit" name="update" value="<?= $service->getServiceId() ?>" class="btn btn-light" id="update">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                    </button>
                  </form>
                </td>
                <td>
                  <!-- delete -->
                  <form action="" method="POST" onsubmit="return confirm('Confirmez-vous la supression?');">  
                    <button type="submit" name="delete" value="<?= $service->getServiceId() ?>" class="btn btn-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                      </svg>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      <h4 id="list-item-2">Services</h4>

        <!-- form --> 
          <section class="container" id="service-form">
          <?php
              // update
              if(isset($_POST['update'])){
                ?>
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="updateid">Id : </label>
                    <input type="text" name="updateid" readonly class="form-control" id="updateid" value="<?=($_POST['update'])?>" required>
                    <label for="updatename">Nom : </label>
                    <input type="text" name="updatename" class="form-control" id="updatename" value="<?=$serviceById->getServiceName()?>" required>
                    <label for="updatedescription">Description : </label>
                    <input type="text" name="updatedescription" class="form-control" id="updatedescription" value="<?=$serviceById->getServiceDescription()?>" required>
                  </div>
                  <button type="submit" class="btn btn-light btn-outline-dark" id="buttonUpdateService">Modifier</button>
                </form>
                <?php
              // add
              } else {
                ?>
                <form action="" method="POST" id="addServiceForm">
                  <div class="form-group">
                    <label for="addname">Nom : </label>
                    <input type="text" name="addname" class="form-control" id="addname" required>
                    <label for="adddescription">Description: </label>
                    <input type="text" name="adddescription" class="form-control" id="adddescription" required>
                  </div>
                  <button type="submit" class="btn btn-light btn-outline-dark" id="buttonAddService">Ajouter</button>
                </form>
                <?php
              }
            ?>
          </section>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Service</th>
              <th scope="col">Description</th>
              <th scope="col">Modifier</th>
              <th scope="col">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($services as $service): ?>
              <tr>
                <td><?= $service->getServiceName() ?></td>
                <td><?= $service->getServiceDescription() ?></td>
                <td>
                  <!-- update -->
                  <form action="" method="POST">  
                    <button type="submit" name="update" value="<?= $service->getServiceId() ?>" class="btn btn-light" id="update">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                    </button>
                  </form>
                </td>
                <td>
                  <!-- delete -->
                  <form action="" method="POST" onsubmit="return confirm('Confirmez-vous la supression?');">  
                    <button type="submit" name="delete" value="<?= $service->getServiceId() ?>" class="btn btn-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                      </svg>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

       

      <h4 id="list-item-3">Véhicules</h4>
      <p>...</p>
      <h4 id="list-item-4">Commentaires</h4>
      <p>...</p>
    </div>
  </div>
</div>


<?php
$content = ob_get_clean();
require_once('layout-interface.php');