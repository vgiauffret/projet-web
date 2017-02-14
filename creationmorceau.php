<?php 
session_start();
require_once'header.php';
require_once'title.php';


// On commence par récupérer les champs 
if(isset($_GET['jour']))      $jour=$_GET['jour'];
else      $jour="null";

if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['artiste']))      $artiste=$_POST['artiste'];
else      $artiste="";

if(isset($_POST['chant']))      $chant=$_POST['chant'];
else      $chant="off";

if(isset($_POST['piano']))      $piano=$_POST['piano'];
else      $piano="off";

if(isset($_POST['batterie']))      $batterie=$_POST['batterie'];
else      $batterie="off";

if(isset($_POST['trompette']))      $trompette=$_POST['trompette'];
else      $trompette="off";

if(isset($_POST['saxophone']))      $saxophone=$_POST['saxophone'];
else      $saxophone="off";

if(isset($_POST['contrebasse']))      $contrebasse=$_POST['contrebasse'];
else      $contrebasse="off";

          $participant1=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];

          $participant2="null";

          $participant3="null";

          $participant4="null";

          $participant5="null";

          $participant6="null";




// On vérifie si les champs sont vides 
if(empty($jour) OR empty($titre) OR empty($artiste) OR empty($chant) OR empty($piano) OR empty($batterie) OR empty($trompette) OR empty($saxophone) OR empty($contrebasse) OR empty($participant1) OR empty($participant2) OR empty($participant3) OR empty($participant4) OR empty($participant5) OR  empty($participant6)) 
    { 
    echo '<font color="red">Attention, aucun champs ne peut rester vide !</font>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
       // connexion à la base
$pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');
     
    // on écrit la requête sql 
    $sql = "INSERT INTO morceaux(jour,artiste, titre, chant, piano, batterie, trompette, saxophone, contrebasse, participant1, participant2, participant3, participant4, participant5, participant6) VALUES('$jour','$artiste','$titre','$chant','$piano','$batterie', '$trompette','$saxophone','$contrebasse','$participant1','$participant2','$participant3','$participant4','$participant5','$participant6')"; 
     
    // on insère les informations du formulaire dans la table 
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());      




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
                            <h3>Félicitation votre morceau a bien était ajouté</h3>
                            <p>Veuillez patientez vous allez être redirigé...</p>
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
</div>