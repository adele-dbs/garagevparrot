
<?= $footer ?>
  
<footer>
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col-sm-8">
        <div id="adress-timetable">
          <div id="adress">
            <pn>31 Rue des Voitures - 75000 Paris</p>
          </div>
          <div id="timetable">
            <p>Lundi : </p>
            <p>Mardi : </p>
            <p>Mercredi : </p>
            <p>Jeudi : </p>
            <p>Vendredi : </p>
            <p>Samedi : </p>
            <?php foreach ($days as $day): ?>
              <p><?= $day->getDayName() ?> : <?= $day->getTimetableHours() ?></p> 
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div id="contact" class="col">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Contactez-nous</button>
          <p>01 02 03 04 05</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulaire de contact</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="models/Form.php" method="post">
            <div class="col-md-4">
              <label for="firstname" class="form-label">Prémon</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="col-md-4">
              <label for="lastname" class="form-label">Nom</label>
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="col-md-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-4">
              <label for="phone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="col-12">
              <label for="message" class="form-label">Message</label>
              <textarea type="email" class="form-control" id="message" name="message" rows="6" required></textarea>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>