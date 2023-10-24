<?php
$titre = 'Garage - Accueil';
$meta ='name="description" 
content="Lorem ipsum dolor sit amet, consectetur adipiscing elit."';
$page_id= 'id="home"';
ob_start();
?>



<?php
$content = ob_get_clean();
require_once('layout.php');