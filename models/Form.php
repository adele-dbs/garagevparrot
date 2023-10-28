<?php


$lastname = trim($_POST['lastname']);
$firstname = trim($_POST['firstname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

/*Send email*/

$to="adeledubois@orange.fr";
$subject="Message-Formulaire de contact";
$msg = '';
$msg .= 'Nom : '.$lastname.' /br ';
$msg .= 'Prenom : '.$firstname.' /br ';
$msg .= 'email : '.$email.' /br ';
$msg .= 'Numéro de téléphone : '.$phone.' /br ';
$msg .= 'Message : '.$message.' /br ';

mail($to, $subject, $msg);
?>