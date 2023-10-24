<!DOCTYPE html>
<html lang="fr">

<head>
  <meta 
    charset="UTF-8">
  <meta 
    name="viewport" 
    content="width=device-width, initial-scale=1">
  <title><?= $titre ?></title>
  <meta <?= $meta ?>>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
  <link
    rel ="stylesheet"
    type="text/css"
    href="views/style.css">
</head>


<body <?= $page_id ?>>
  <header id="header">
    <div class="container text-center">
      <div class="row">
        <div class="col">    
          <a id="button-home" href="?#">
            <img
              class="logo"
              src="views/pictures/logo.jpg"
              alt="Logo du garage V.Parrot"/>
          </a>
          <a id="button-login" href="?page=login">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
              <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
    <?= $content ?>
  </main>
  
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-8">
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
            </div>
          </div>
        </div>
        <div id="contact" class="col">
          <button type="button" class="btn btn-dark">Contactez-nous</button>
          <p>01 02 03 04 05</p>
        </div>
      </div>
    </div>
    <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contactez-nous</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Formulaire de contact</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
  </footer>

</body>

<script src="js/bootstrap.min.js"></script>
<script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous">
</script>

</html>