<?php
    session_start();
    require_once'header.php';
    require_once'title.php';

    //On se connecte à la BDD
    $pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');


?>


<!-- Début EspacePerso Section -->
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
                            <h3>
                            <?php 
                                $nom = $_SESSION['nom'];
                                $prenom = $_SESSION['prenom'];
                                $nomcomplet = $nom . ' ' . $prenom;
                                echo $nom;
                                echo ' ';
                                echo $prenom;
                            ?>
                            </h3>
                            <p>
                               Vous êtes un bon joueur de 
                            <?php 
                                echo ' ';
                                echo $_SESSION['instrument'];
                            ?> 
                            </p>
                            <p>
                            <?php 
                            if($_SESSION['navette']=='Oui')
                            {
                            ?>
                                Nous sommes a votre disposition pour vos déplacement Aéroport/MasterClass
                            <?php
                            }
                            ?> 
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/discographie.jpg" class="img-responsive" alt="...">
                                <h4>Vos morceaux</h4>
                                <div class="speech">
                                    <p>
                                    <?php
                                        $morceaux = false;
                                    $sql = "SELECT artiste,titre,jour FROM `morceaux` WHERE participant1='$nomcomplet' OR participant2='$nomcomplet' OR participant3='$nomcomplet' OR participant4='$nomcomplet' OR participant5='$nomcomplet' OR participant6='$nomcomplet'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $morceaux = true;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;
                                        $_SESSION['jour'] = $Utilisateur->jour;
                                        echo 'Vous jouerez ';
                                        echo $_SESSION['titre'];
                                        echo ' de ';
                                        echo $_SESSION['artiste'];
                                        echo ' le ';
                                        echo $_SESSION['jour'];
                                        echo '<br>';
                                    }
                                    $req->closeCursor();
                                    
                                    if(!$morceaux){
                                    echo 'Pour le moment vous ne jouez aucun morceaux durant nos concerts';
                                    }
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/diplome.png" class="img-responsive" alt="...">
                                <h4>Votre formation</h4>
                                <div class="speech">
                                    <p>

                                    <?php 
                                    $sql = "SELECT formation FROM `utilisation` WHERE nom='$nom' OR prenom='$prenom' ";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['formation'] = $Utilisateur->formation;
                                    }
                                    if($_SESSION['formation']=='visiteur' OR $_SESSION['formation']=='decouverte' OR $_SESSION['formation']=='appronfondissement' OR $_SESSION['formation']=='complete')
                                        {
                                    ?>
                                                Vous êtes actuellement inscrit à la formation 
                                    <?php
                                            echo ' ';
                                            echo $_SESSION['formation'];
                                        } 
                                        else
                                        {
                                    ?>
                                               Vous êtes actuellement inscrit à aucune formation !
                                    <?php
                                        } 
                                    ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        </div><!--/.row -->
                    
                </div>

        <!-- Fin EspacePerso Section -->


<?php
require_once 'footer.php';
?>