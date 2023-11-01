
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
            <?php foreach ($days as $day): ?>
              <p><?= $day['daysname'] ?> : <?= $day['dayshours'] ?></p> 
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div id="contact" class="col">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contactModal">Contactez-nous</button>
          <p>01 02 03 04 05</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
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
              <input type="text" class="form-control" id="firstname" name="firstname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
            </div>
            <div class="col-md-4">
              <label for="lastname" class="form-label">Nom</label>
              <input type="text" class="form-control" id="lastname" name="lastname" pattern="[a-zA-Z0-9]+" maxlength="20" required>
            </div>
            <div class="col-md-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
            </div>
            <div class="col-md-4">
              <label for="phone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="0000000000" pattern="[0-9]{10}" required>
            </div>
            <div class="col-12">
              <label for="message" class="form-label">Message</label>
              <textarea type="email" class="form-control" id="message" name="message" rows="6" pattern="[a-zA-Z0-9]+" required></textarea>
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