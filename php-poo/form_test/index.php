<?php
require_once('class/Bdd.class.php'); 
require_once('class/Form.class.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire poo php</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="contenu">
		<h1>Formulaire PHP POO</h1>
		<?php
			$form = new Form;
			if(!empty($_POST)){
				$form->controle($_POST);
				$bdd = new Bdd('formulaire', 'localhost', '', 'root');
			}
			$tab = ['fraise', 'poire', 'melon'];
		?>
		<form method="post" action="">
			<?php
				echo '<p>';
				$form->label('nom', 'Nom');
				$form->input('text', 'nom');
				echo '</p>';
				echo '<p>';
				$form->label('prenom', 'Prenom');
				$form->input('text', 'prenom');
				echo '</p>';
				echo '<p>';
				$form->label('password', 'Mot de pass');
				$form->input('password', 'password');
				echo '</p>';
				echo '<p>';
				$form->label('email', 'Email');
				$form->input('email', 'email');
				echo '</p>';
				echo '<p>';
				$form->submit();
				echo '</p>';
			?>
		</form>
	</div>
</body>
</html>