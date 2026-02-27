<?php

include('connect.php'); // connexion à la base de données

function secure($b){
	$b = trim($b);
	$b = htmlspecialchars($b);
	return $b;
} // sécurisation des entrées

function send_error($a){
    echo( '<form id="error" action="../public/index.php" method="post">
                <input type="hidden" name="message" value="'. $a .'">
            </form>
            <script>document.getElementById("error").submit();</script>');
}

		$mat = secure($_POST['mat']); // récupère le matricule
		$pw = $_POST['pw']; // récupère le mot de passe

if(!empty($mat) && !empty($pw)){
		$req = $connexion->prepare("SELECT * FROM students WHERE mat = ? AND pw = ?");
		$req->execute(array($mat, $pw));
		$cpt = $req->rowCount();
		
		if($cpt == 1){
			// Connexion réussie, redirection vers une nouvelle page
			/* $info = $req->fetch(); // récupération des infos
			$_SESSION['mat'] = $info['mat'];
			$_SESSION['name'] = $info['name'];
			$_SESSION['fname'] = $info['fname'];
			$_SESSION['email'] = $info['email'];
			$_SESSION['class'] = $info['class']; */
			header("Location: ../public/student_dashboard.html");
			exit();
		}else{
            $message = "Désolé, nous ne trouvons pas ce compte";
            send_error($message);
		}
	}else{
		$message= "Veuillez remplir tous les champs !";
        send_error($message);
	}


?>