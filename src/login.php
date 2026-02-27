<?php

// récupère le matricule
$mat = $_POST['mat'];

// récupère le mot de passe
$pw = $_POST['pw'];

function affiche($val){
    echo "<p>" . $val . "</p>";
}

affiche($mat);
affiche($pw);


?>