<?php
    session_start();
    require_once'header.php';
    require_once'title.php';
	$titre = $_GET['titre'];

if(isset($_POST['instrument']))      $instrument=$_POST['instrument'];

$nomcomplet=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
$participant2 = $_SESSION['participant2'];
$participant3 = $_SESSION['participant3'];
$participant4 = $_SESSION['participant4'];
$participant5 = $_SESSION['participant5'];
$participant6 = $_SESSION['participant6'];


// On vérifie si les champs sont vides 
if(empty($instrument)) 
    { 
    echo '<font color="red">Attention, aucun champs ne peut rester vide !</font>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
       // connexion à la base
$pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');



//Mise à jour participants     ****************************************
if($participant2=='null'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `participant2`='$nomcomplet' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
else if($participant3=='null'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `participant3`='$nomcomplet' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
else if($participant4=='null'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `participant4`='$nomcomplet' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
else if($participant5=='null'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `participant5`='$nomcomplet' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
else if($participant6=='null'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `participant6`='$nomcomplet' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}



//Mise à jour instrument    *************************************************
if($instrument=='Chant'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `chant`='on' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
if($instrument=='Piano'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `piano`='on' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
if($instrument=='Batterie'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `batterie`='on' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
if($instrument=='Trompette'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `trompette`='on' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
if($instrument=='Saxophone'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `saxophone`='on' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}
if($instrument=='Contrebasse'){
// on écrit la requête sql 
    $sql = "UPDATE `morceaux` SET `contrebasse`='on' WHERE `titre`='$titre'"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
}


    header("refresh:3;url=index.php");
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
                        <div class="section-title text-center">
                            <h3>Félicitation votre participation au morceau a était prise en compte</h3>
                            <p>Veuillez patientez vous allez être redirigé...</p>
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
</div>

<?php 
    require_once 'footer.php';
?>