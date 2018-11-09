<?php
class FormManager{


    public function controle(array $tab){// mettre dans une class manager ? 
		/* echo "<pre>";
			print_r($tab);
		echo "</pre>"; */

		foreach ($tab as $key => $value) {
			 htmlentities($value);
		}
		return $tab;
    }
    
    public function ajoutBdd(PDO $pdo, array $tab){
        $resultat = $pdo->prepare('INSERT INTO users(nom, prenom, password, email) VALUES(:nom, :prenom, :password, :email)');

        $resultat->bindValue(':nom', $tab['nom'], PDO::PARAM_STR);
        $resultat->bindValue(':prenom', $tab['prenom'], PDO::PARAM_STR);
        $resultat->bindValue(':password', $tab['password'], PDO::PARAM_STR);
        $resultat->bindValue(':email', $tab['email'], PDO::PARAM_STR);

        $req = $resultat->execute();

        /* echo '<pre>';
            print_r(get_class_methods($resultat));
        echo '</pre>'; */

        if($req){
            session_start();
            $_SESSION['membre']['nom'] = $tab['nom'];
            $_SESSION['membre']['prenom'] = $tab['prenom'];
            $_SESSION['membre']['email'] = $tab['email'];
            
            header('Location:view/profil.php');
            exit();
        }else{
            echo "Une érreur est survenu lors de l'ajour en base de donnée.";
            return;
        }

    }
}