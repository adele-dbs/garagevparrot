<?php

function validContactFormdonnees($addonnees) {
            $addonnees = trim($addonnees);
            $addonnees = stripslashes($addonnees);
            $addonnees = htmlspecialchars($addonnees);
            return $addonnees;
        }
        
        $addquestionfirstname = validContactFormdonnees($_POST["addquestionfirstname"]);
        $addquestionlastname = validContactFormdonnees($_POST["addquestionlastname"]);
        $addquestionemail = validContactFormdonnees($_POST["addquestionemail"]);
        $addquestionphone = validContactFormdonnees($_POST["addquestionphone"]);
        $addquestionmessage = validContactFormdonnees($_POST["addquestionmessage"]);

/*Send email*/
/*Dont forget : configure php.ini */

/*$to="adeledubois@orange.fr";
$subject="Formulaire de contact";
$msg = '';
$msg .= 'Nom : '.$lastname.' \r\n';
$msg .= 'Prenom : '.$firstname.' \r\n ';
$msg .= 'email : '.$email.' \r\n ';
$msg .= 'Numéro de téléphone : '.$phone.' \r\n ';
$msg .= 'Message : '.$message.' \r\n ';

mail($to, $subject, $msg);
?>*/