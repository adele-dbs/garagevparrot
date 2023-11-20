<?php
$titre = 'Garage - Espace Employé';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="staff"';
ob_start();
?>

<div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-3">Véhicules</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Commentaires</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Messages</a>
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
  
    <!-- TO DO : no duplicate code --> 
    <!-- CARS --> 
      <h4 id="list-item-3">Véhicules</h4>
      <!-- CARS -->  
        <!-- form --> 
        <section class="container" id="car-form">
            <?php
                // update
                if(isset($_POST['updateCar'])){
                  ?>
                  <form action="" method="POST">
                    <div class="form-group">
                      <!--TO DO : upload photo + security -->
                      <label for="updatecarid">Id : </label>
                      <input type="text" name="updatecarid" readonly class="form-control" id="updatecarid" value="<?=($_POST['updateCar'])?>" required>
                      <label for="updatecarp1">Photo Principale : </label>
                      <input type="text" name="updatecarp1" class="form-control" id="updatecarp1" value="<?=$carById->getCarPicture1()?>" required>
                      <label for="updatecarp2">Photo n°2 : </label>
                      <input type="text" name="updatecarp2" class="form-control" id="updatecarp2" value="<?=$carById->getCarPicture2()?>" required>
                      <label for="updatecarp3">Photo n°3 : </label>
                      <input type="text" name="updatecarp3" class="form-control" id="updatecarp3" value="<?=$carById->getCarPicture3()?>" required>
                      <label for="updatecarp4">Photo n°4 : </label>
                      <input type="text" name="updatecarp4" class="form-control" id="updatecarp4" value="<?=$carById->getCarPicture4()?>" required>
                      <label for="updatecarp5">Photo n°5 : </label>
                      <input type="text" name="updatecarp5" class="form-control" id="updatecarp5" value="<?=$carById->getCarPicture5()?>" required>
                      <label for="updatecarpyear">Année : </label>
                      <input type="number" name="updatecarpyear" class="form-control" id="updatecarpyear" value="<?=$carById->getCarYear()?>" required>
                      <label for="updatecarprice">Prix : </label>
                      <input type="number" name="updatecarprice" class="form-control" id="updatecarprice" value="<?=$carById->getCarPrice()?>" required>
                      <label for="updatecarpmileage">Kimolétrage : </label>
                      <input type="number" name="updatecarpmileage" class="form-control" id="updatecarpmileage" value="<?=$carById->getCarMileage()?>" required>
                      <label for="updatecarbrand">Marque : </label>
                      <select class="form-select" aria-label="Default select example" name="updatecarbrand" id="updatecarbrand" required>
                        <?php foreach ($brands as $brand): ?>
                          <option value="<?= $brand->getBrandId() ?>"><?= $brand->getBrandName() ?></option>
                        <?php endforeach; ?>
                      </select> 
                      <label for="updatecarmodel">Modèle : </label>
                      <select class="form-select" aria-label="Default select example" name="updatecarmodel" id="updatecarmodel" required>
                        <?php foreach ($carsmodels as $carmodel): ?>
                          <option value="<?= $carmodel->getModelId() ?>"><?= $carmodel->getModelName() ?></option>
                        <?php endforeach; ?>
                      </select> 
                    </div>
                    <button type="submit" class="btn backendButton" id="buttonUpdateCar">Modifier</button>
                  </form>
                  <?php
                // add
                } else {
                  ?>
                  <form action="" method="POST" id="addCarForm">
                    <div class="form-group">
                      <label for="addpicture1">Photo principale : </label>
                      <input type="file" name="addpicture1" class="form-control" id="addpicture1" required>
                      <label for="addpicture2">Photo 2 : </label>
                      <input type="file" name="addpicture2" class="form-control" id="addpicture2" required>
                      <label for="addpicture3">Photo 3 : </label>
                      <input type="file" name="addpicture3" class="form-control" id="addpicture3" required>
                      <label for="addpicture4">Photo 4 : </label>
                      <input type="file" name="addpicture4" class="form-control" id="addpicture4" required>
                      <label for="addpicture5">Photo 5 : </label>
                      <input type="file" name="addpicture5" class="form-control" id="addpicture5" required>
                      <label for="addcarprice">Prix : </label>
                      <input type="text" name="addcarprice" class="form-control" id="addcarprice" required>
                      <label for="addcaryear">Année : </label>
                      <input type="text" name="addcaryear" class="form-control" id="addcaryear" required>
                      <label for="addcarmileage">Kilométrage : </label>
                      <input type="text" name="addcarmileage" class="form-control" id="addcarmileage" required>
                      <label for="addcarbrand">Marque : </label>
                      <select class="form-select" aria-label="Default select example" name="addcarbrand" id="addcarbrand" required>
                        <?php foreach ($brands as $brand): ?>
                          <option value="<?= $brand->getBrandId() ?>"><?= $brand->getBrandName() ?></option>
                        <?php endforeach; ?>
                      </select> 
                      <label for="addcarmodel">Modèle : </label>
                      <select class="form-select" aria-label="Default select example" name="addcarmodel" id="addcarmodel" required>
                        <?php foreach ($carsmodels as $carmodel): ?>
                          <option value="<?= $carmodel->getModelId() ?>"><?= $carmodel->getModelName() ?></option>
                        <?php endforeach; ?>
                      </select> 
                      <!-- TO DO : add checkbox -->
                      </div>
                    <button type="submit" class="btn backendButton" id="buttonAddCar">Ajouter</button>
                  </form>
                  <?php
                }
              ?>
            </section>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Marque / Photo principale</th>
                    <th scope="col">Modèle / Photo 2</th>
                    <th scope="col">Kilométrage / Photo 3</th>
                    <th scope="col">Prix / Photo 4</th>
                    <th scope="col">Année / Photo 5</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($cars as $car): ?>
                    <tr>
                      <td><?= $car['brandname'] ?></td>
                      <td><?= $car['modelname'] ?></td>
                      <td><?= $car['mileage'] ?> Km</td>
                      <td><?= $car['price'] ?> €</td>
                      <td><?= $car['year'] ?></td>
                      <td rowspan="2">
                        <!-- update -->
                        <form action="" method="POST">  
                          <button type="submit" name="updateCar" value="<?= $car['carid'] ?>" class="btn btn-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                          </button>
                        </form>
                      </td>
                      <td rowspan="2">
                        <!-- delete -->
                        <form action="" method="POST" onsubmit="return confirm('Confirmez-vous la supression?');">  
                          <button type="submit" name="deleteCar" value="<?= $car['carid'] ?>" class="btn btn-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                          </button>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="<?= $car['p1'] ?>" class="card-img-top image-interface" alt="Photo de la voiture"></td>
                      <td><img src="<?= $car['p2'] ?>" class="card-img-top image-interface" alt="Photo de la voiture"></td>
                      <td><img src="<?= $car['p3'] ?>" class="card-img-top image-interface" alt="Photo de la voiture"></td>
                      <td><img src="<?= $car['p4'] ?>" class="card-img-top image-interface" alt="Photo de la voiture"></td>
                      <td><img src="<?= $car['p5'] ?>" class="card-img-top image-interface" alt="Photo de la voiture"></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

<!-- COMMENTARIES -->  
<h4 id="list-item-4">Commentaires</h4>
      <!-- form --> 
      <section class="container" id="commentform">
        <?php
          //valid commentary form
          if(isset($_POST['validCommentary'])){
        ?>
          <form action="" method="POST">
            <div class="form-group">
              <label for="validecommentid">Id : </label>
              <input type="text" name="validecommentid" readonly class="form-control" id="validecommentid" value="<?=($_POST['validCommentary'])?>" required>
              <label for="validecommentname">Prénom : </label>
              <input type="text" name="validecommentname" readonly class="form-control" id="validecommentname" pattern="[a-zA-Z0-9]+" value="<?=$commentaryById->getCommentaryFirstame()?>" required>
              <label for="validecommentary">Commentaire : </label>
              <input type="text" name="validecommentary" readonly class="form-control" id="validecommentary" value="<?=$commentaryById->getCommentary()?>" required>
              <label for="validecommentrating">Note : </label>
              <input type="email" name="validecommentrating" readonly class="form-control" id="validecommentrating" value="<?=$commentaryById->getCommentaryRating()?>" required>
              <label for="validecomment">Validé : </label>
              <select class="form-select" aria-label="Default select example" name="validecomment" id="validecomment" required>
                <?php foreach ($validations as $validation): ?>
                  <option value="<?= $validation->getValidationtId() ?>"><?= $validation->getValid() ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn backendButton" id="buttonValidComment">Modifier</button>
          </form>
        
        <?php
          // add commentary form
          } else {
        ?>
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
              <button class="btn backendButton" type="submit">Ajouter le commentaire</button>
            </div>
          </form>    
          <?php
            }
          ?>  

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Prénom</th>
              <th scope="col">Commentaire</th>
              <th scope="col">Note</th>
              <th scope="col">Validé</th>
              <th scope="col">Valider</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($commentaries as $commentary): ?>
              <tr>
                <td><?= $commentary['name'] ?></td>
                <td><?= $commentary['commentary'] ?></td>
                <td><?= $commentary['rating'] ?>/5</td>
                <td><?= $commentary['validname'] ?></td>
                <td>
                  <!-- validation -->
                  <!-- TO DO : grey button if validate -->
                  <form action="" method="POST">  
                    <button type="submit" class="btn btn-success" name="validCommentary" value="<?= $commentary['id'] ?>" class="btn btn-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <!-- MESSAGES--> 
        <h4 id="list-item-6">Messages</h4>

        <!-- form --> 
        <section class="container" id="messageform">
          <?php
          //valid commentary form
          if(isset($_POST['replyMessage'])){
          ?>
          <form action="" method="POST">
            <div class="form-group">
              <label for="validquestionid">Id : </label>
              <input type="text" name="validquestionid" readonly class="form-control" id="validquestionid" value="<?=($_POST['replyMessage'])?>" required>
              <label for="validquestionmessage">Message : </label>
              <input type="text" name="validquestionmessage" readonly class="form-control" id="validquestionmessage" value="<?=$questionById->getQuestionMessage()?>" required>
              <label for="validreply">Validé : </label>
              <select class="form-select" aria-label="Default select example" name="validreply" id="validreply" required>
                <?php foreach ($validations as $validation): ?>
                  <option value="<?= $validation->getValidationtId() ?>"><?= $validation->getValid() ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn backendButton" id="buttonValidComment">Modifier</button>
          </form>
          <?php
          } 
          ?>  

          <table class="table">
          <thead>
            <tr>
              <th scope="col">Prénom / Nom</th>
              <th scope="col">Email / Téléphone</th>
              <th scope="col">Message</th>
              <th scope="col">Message traité / N° de l'annonce</th>
              <th scope="col">Traité</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($questions as $question): ?>
              <tr>
                <td><?= $question['firstname'] ?></td>
                <td><?= $question['email'] ?></td>
                <td rowspan="2"><?= $question['message'] ?></td>
                <td><?= $question['valid'] ?></td>
                <td rowspan="2">
                  <!-- validation -->
                  <form action="" method="POST">  
                    <button type="submit" class="btn btn-success" name="replyMessage" value="<?= $question['questionsid'] ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>
                    </button>
                  </form>
                </td>
              </tr>
              <tr>
              <td><?= $question['lastname'] ?></td>
              <td><?= $question['phone'] ?></td>
              <td><?= $question['questioncarid'] ?></td>
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
