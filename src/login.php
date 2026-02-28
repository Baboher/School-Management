<?php

// session_start();

include('connect.php'); // connexion à la base de données

function secure($b){ // sécurisation des entrées
	$b = trim($b);
	$b = htmlspecialchars($b);
	return $b;
} 

function send_error($a){ //  envoi de l'erreur lors de la connexion
    echo( '<form id="error" action="../public/index.php" method="post">
                <input type="hidden" name="message" value="'. $a .'">
            </form>
            <script>document.getElementById("error").submit();</script>');
}

function connect($type){
    // récupère les variables globales concernées
    global $connexion,$mat,$pw;

    // prépration de la recherche du compte
    $req = $connexion->prepare("SELECT pw FROM " . $type . " WHERE mat_" . $type . " = ? ");

    // exécution de la requête
    $req->execute(array($mat));

    // récupération du nombre de correspondances
    $cpt = $req->rowCount();
            
    if($cpt == 1){

        $account = $req->fetch();

            if(password_verify($pw, $account['pw'])){
            
            // Connexion réussie, redirection vers une nouvelle page
            /*
            $req = $connexion->prepare("SELECT * FROM " . $type . " WHERE mat_" . $type . " = ? ");
            $req->execute(array($mat)); 
            $info = $req->fetch(); // récupération des infos
            $_SESSION['mat'] = $info['mat_'.$type];
            $_SESSION['name'] = $info['name'];
            $_SESSION['fname'] = $info['fname'];
            $_SESSION['mail'] = $info['mail'];
            if(isset($info['class']){
                $_SESSION['class'] = $info['class'];
            }
            */
            header("Location: ../public/" . $type . "_dashboard.html");
            exit();

        } else{
            $message = "Mot de passe incorrect !";
            send_error($message);
        }

    }else{ // Aucune correspondance
        $message = "Utilisateur introuvable !";
        send_error($message);
    }
}

		$mat = secure($_POST['mat']); // récupère le matricule
		$pw = $_POST['pw']; // récupère le mot de passe
        $acc_type = secure($_POST['acc_type']);

if(!empty($mat) && !empty($pw)){ // les champ ont été remplis

    connect($acc_type);

}else{ // Cellules vides
		$message = "Veuillez remplir tous les champs !";
        send_error($message);
}


?>