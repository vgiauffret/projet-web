<?php
require_once'header.php';
require_once'title.php';

//On se connecte à la BDD
$pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');

// on teste si le visiteur a soumis le formulaire de connexion
if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['pass'])) {
  extract($_POST);
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $ok = false;
  // on recupère le password de la table qui correspond au email du visiteur
  $sql = "select * from utilisation where pass='$pass' and email='$email'";
  $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $req->setFetchMode(PDO::FETCH_OBJ);
	while( $resultat = $req->fetch() )
	{
		$ok = true;
		$Utilisateur = $resultat;
	}
	$req->closeCursor();

  if(!$ok) {
    header("refresh:3;url=index.php");
  }
  else {
    session_start();
    $_SESSION['idUser'] = $Utilisateur->idUser;
    $_SESSION['email'] = $Utilisateur->email;
    $_SESSION['nom'] = $Utilisateur->nom;
    $_SESSION['prenom'] = $Utilisateur->prenom;
    $_SESSION['instrument'] = $Utilisateur->instrument;
    $_SESSION['navette'] = $Utilisateur->navette;
    $_SESSION['formation'] = $Utilisateur->formation;


    header("refresh:3;url=index.php");
  }    
}


?>

<div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                    	<?php
                            if($ok) {
                        ?>
                        <div class="section-title text-center">
                            <h3>Vous êtes maintenant connecté</h3>
                            <p>Veuillez patientez vous allez être redirigé...</p>
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                        <?php
                                }
                                else 
                                {
                        ?>
                        <div class="section-title text-center">
                            <h3>Mauvais Email / password. Merci de recommencer</h3>
                            <p>Veuillez patientez pour réessayer...</p>
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                        <?php
                                }
                        ?>
                    </div>
                </div>
</div>