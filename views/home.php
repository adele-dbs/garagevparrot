<?php
$titre = 'Garage - Accueil';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="home"';
ob_start();
?>

<p>Page d'accueil</p>

<?php
$content = ob_get_clean();
require_once('layout.php');