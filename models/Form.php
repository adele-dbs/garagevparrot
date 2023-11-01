<?php

function valid_donnees($donnees) {
  $donnees = trim($donnees);
  $donnees = stripslashes($donnees);
  $donnees = htmlspecialchars($donnees);
  return $donnees;
}

  $lastname = valid_donnees($_POST["lastname"]);
  $firstname = valid_donnees($_POST["firstname"]);
  $email = valid_donnees($_POST["email"]);
  $phone = valid_donnees($_POST["phone"]);
  $message = valid_donnees($_POST["message"]);

/*Send email*/
/*Dont forget : configure php.ini */

$to="adeledubois@orange.fr";
$subject="Formulaire de contact";
$msg = '';
$msg .= 'Nom : '.$lastname.' \r\n';
$msg .= 'Prenom : '.$firstname.' \r\n ';
$msg .= 'email : '.$email.' \r\n ';
$msg .= 'Numéro de téléphone : '.$phone.' \r\n ';
$msg .= 'Message : '.$message.' \r\n ';

mail($to, $subject, $msg);
?>