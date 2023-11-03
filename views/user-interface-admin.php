<?php
$titre = 'Garage - Espace Administrateur';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="admin"';
ob_start();
?>

<script src="views/display-form.js"></script>

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
     
    <!-- add button -->
      <button id="buttonadd" class="btn btn-light">
        Ajouter un employé
      </button>
    
    <!-- form --> 
      <section class="container" id="staffform">
          <?php
              // update
              if(isset($_POST['updateStaff'])){
                ?>
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="updatetimetableid">Id : </label>
                    <input type="text" name="updatetimetableid" readonly class="form-control" id="updatetimetableid" value="<?=($_POST['updateStaff'])?>" required>
                    <label for="updatestafffirstname">Prénom : </label>
                    <input type="text" name="updatestafffirstname" class="form-control" id="updatestafffirstname" maxlength="20" value="<?=$userById->getFirstname()?>" required>
                    <label for="updatestafflastname">Nom : </label>
                    <input type="text" name="updatestafflastname" class="form-control" id="updatestafflastname" maxlength="20" value="<?=$userById->getLastname()?>" required>
                    <label for="updatestaffemail">Email : </label>
                    <input type="email" name="updatestaffemail" class="form-control" id="updatestaffemail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" value="<?=$userById->getEmail()?>" required>
                    <label for="updatestaffpassword">Mot de Passe : </label>
                    <input type="password" name="updatestaffpassword" class="form-control" id="updatestaffpassword" minlength="8" maxlength="20" required>
                    <label for="updatestaffright">Droit : </label>
                    <select class="form-select" aria-label="Default select example" name="updatestaffright" id="updatestaffright" required>
                      <?php foreach ($rights as $right): ?>
                        <option value="<?= $right->getRightId() ?>"><?= $right->getRightId() ?> - <?= $right->getRightName() ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-light btn-outline-dark" id="buttonUpdateStaff">Modifier</button>
                </form>
                <?php
              // add
              } else {
                ?>
                <form action="" method="POST" id="staffformadd">
                  <div class="form-group">
                    <label for="addstafffirstname">Prénom : </label>
                    <input type="text" name="addstafffirstname" class="form-control" id="addstafffirstname" maxlength="20" required>
                    <label for="addstafflastname">Nom : </label>
                    <input type="text" name="addstafflastname" class="form-control" id="addstafflastname" maxlength="20" required>
                    <label for="addstaffemail">Email : </label>
                    <input type="email" name="addstaffemail" class="form-control" id="addstaffemail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                    <label for="addstaffpassword">Mot de passe : </label>
                    <input type="password" name="addstaffpassword" class="form-control" id="addstaffpassword" minlength="8" maxlength="20" required>
                    <label for="addstaffright">Droit : </label>
                    <select class="form-select" aria-label="Default select example" name="addstaffright" id="addstaffright" required>
                      <?php foreach ($rights as $right): ?>
                        <option value="<?= $right->getRightId() ?>"><?= $right->getRightId() ?> - <?= $right->getRightName() ?></option>
                      <?php endforeach; ?>
                    </select>
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
              <th scope="col">Prénom</th>
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Droit</th>
              <th scope="col">Modifier</th>
              <th scope="col">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $user->getFirstname() ?></td>
                <td><?= $user->getLastname() ?></td>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getRightId() ?></td>
                <td>
                  <!-- update -->
                  <form action="" method="POST">  
                    <button type="submit" name="updateStaff" value="<?= $user->getId() ?>" class="btn btn-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                    </button>
                  </form>
                </td>
                <td>
                  <!-- delete -->
                  <form action="" method="POST" onsubmit="return confirm('Confirmez-vous la supression?');">  
                    <button type="submit" name="deleteStaff" value="<?= $user->getId() ?>" class="btn btn-light">
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
                    <button type="submit" name="update" value="<?= $service->getServiceId() ?>" class="btn btn-light">
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

      <h4 id="list-item-4">Horaires</h4>

      <!-- form --> 
      <section class="container" id="timetableform">
          <?php
              // update
              if(isset($_POST['updateTimetable'])){
                ?>
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="updatetimetableid">Id : </label>
                    <input type="text" name="updatetimetableid" readonly class="form-control" id="updatetimetableid" value="<?=($_POST['updateTimetable'])?>" required>
                    <select class="form-select" aria-label="Default select example" name="updatedaytimetable" id="updatedaytimetable" required>
                      <?php foreach ($days as $day): ?>
                        <option value="<?= $day->getDayId() ?>"><?= $right->getDayId() ?> - <?= $right->getDayName() ?></option>
                      <?php endforeach; ?>
                    </select>
                    <label for="updatetimetablehours">Prénom : </label>
                    <input type="text" name="updatetimetablehours" class="form-control" id="updatestafffirstname" maxlength="20" value="<?=$userById->getFirstname()?>" required>
                  </div>
                  <button type="submit" class="btn btn-light btn-outline-dark" id="buttonUpdateStaff">Modifier</button>
                </form>
                <?php
              // add
              } else {
                ?>
                <form action="" method="POST" id="staffformadd">
                  <div class="form-group">
                    <label for="addstafffirstname">Prénom : </label>
                    <input type="text" name="addstafffirstname" class="form-control" id="addstafffirstname" maxlength="20" required>
                    <label for="addstafflastname">Nom : </label>
                    <input type="text" name="addstafflastname" class="form-control" id="addstafflastname" maxlength="20" required>
                    <label for="addstaffemail">Email : </label>
                    <input type="email" name="addstaffemail" class="form-control" id="addstaffemail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                    <label for="addstaffpassword">Mot de passe : </label>
                    <input type="password" name="addstaffpassword" class="form-control" id="addstaffpassword" minlength="8" maxlength="20" required>
                    <label for="addstaffright">Droit : </label>
                    <select class="form-select" aria-label="Default select example" name="addstaffright" id="addstaffright" required>
                      <?php foreach ($rights as $right): ?>
                        <option value="<?= $right->getRightId() ?>"><?= $right->getRightId() ?> - <?= $right->getRightName() ?></option>
                      <?php endforeach; ?>
                    </select>
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
              <th scope="col">Prénom</th>
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Droit</th>
              <th scope="col">Modifier</th>
              <th scope="col">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $user->getFirstname() ?></td>
                <td><?= $user->getLastname() ?></td>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getRightId() ?></td>
                <td>
                  <!-- update -->
                  <form action="" method="POST">  
                    <button type="submit" name="updateStaff" value="<?= $user->getId() ?>" class="btn btn-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                    </button>
                  </form>
                </td>
                <td>
                  <!-- delete -->
                  <form action="" method="POST" onsubmit="return confirm('Confirmez-vous la supression?');">  
                    <button type="submit" name="deleteStaff" value="<?= $user->getId() ?>" class="btn btn-light">
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
      
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once('layout-interface.php');