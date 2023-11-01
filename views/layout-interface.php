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
  <header>
    <div class="container text-center">
      <div class="row">
        <div class="col">    
          <a id="button-home" href="?#">
            <img
              class="logo"
              src="views/pictures/logo.jpg"
              alt="Logo du garage V.Parrot"/>
          </a>
          <a type="button" class="btn-close" aria-label="Close " id="button-login" href="?page=login"></a>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
    <?= $content ?>
  </main>

</body>

<script src="js/bootstrap.min.js"></script>
<script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous">
</script>

</html>
