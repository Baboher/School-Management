
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style/style0.css">
		<script type="text/javascript" src="js/form.js"></script>
		<title>Connexion</title>
	</head>
	<body>
		<p class="titre">
			<table>
				<tr>
					<td><img src="img/cjt-logo.jpg" alt="logo"/></td><td>Bienvenue</td>
				</tr>
			</table>
		</p>
		<p>
		
			<?php
				if(isset($_POST['choix'])){
					$choix = $_POST['choix'];
				}else{
					$choix = 2;
				}
				switch($choix){  // switch du choix du formulaire
					case 1 : //  debut 1er choix
			?>
			
			<div class="buttons">
				<form method="post" action="index.php" name="f">
					<input type="text" name="choix"/>
					<button type="submit" class="choice" name="register" onclick="choix1()">S'ENREGISTRER</button>
					<button type="submit" class="choice1" name="login" onclick="choix2()">SE CONNECTER</button>
				</form>
			</div>
			
			<div class="forms">
				<form method="post" action="register.php">
					<table>
						<tr>
							<td><label for="mat">MATRICULE</label></td>
							<td><input type="text" name="mat" required /></td>
						</tr>
						<tr>
							<td><label for="pw">MOT DE PASSE</label></td>
							<td><input type="password" name="pw" required id="pw"/></td>
						</tr>
						<tr>
							<td><label for="c-pw">CONFIRMER MOT DE PASSE</label></td>
							<td><input type="password" name="c-pw" id="c-pw" required /></td>
						</tr>
						<tr>
							<td><label for="mail">ADRESSE MAIL</label></td>
							<td><input type="email" name="mail" placeholder="example@example.com" required /></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="CONFIRMER"/></td>
						</tr>
					</table>
				</form>
			</div>
			
			<?php
					; //fin 1er choix
					break;
					case 2 : // debut 2e choix
			?>
			
			
			<div class="buttons">
				<form method="post" action="index.php" name="f">
					<input type="text" name="choix"/>
					<button type="submit" class="choice1" name="register" onclick="choix1()">S'ENREGISTRER</button>
					<button type="submit" class="choice" name="login" onclick="choix2()">SE CONNECTER</button>
				</form>
			</div>
			
			<div class="forms">
				<form method="post" action="login.php">
					<table>
						<tr>
							<td><label for="mat">MATRICULE</label></td>
							<td><input type="text" name="mat" required /></td>
						</tr>
						<tr>
							<td><label for="pw">MOT DE PASSE</label></td>
							<td><input type="password" name="pw" required /></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="CONFIRMER"/></td>
						</tr>
					</table>
				</form>
			</div>
			
			<?php
					; // fin 2e choix
					break;
				} //fin du switch
			?>
			
		</p>
	</body>
</html>