<?php
    session_start();
    require_once'header.php';
    require_once'title.php';

    //On se connecte à la BDD
$pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');

$artiste=$_GET["artiste"];
$titre=$_GET["titre"];
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
                            <h2>Vous voulez intégrer l'orchestre pour jouer ce morceau :</h2>
                            <h3>
                            <?php
                                echo $artiste;
                                echo ' - ';
                                echo $titre;
                                    $sql = "SELECT `piano`,`chant`,`batterie`,`trompette`,`saxophone`,`contrebasse`,`participant1`,`participant2`,`participant3`,`participant4`,`participant5`,`participant6` FROM `morceaux` WHERE `titre`='$titre'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['piano'] = $Utilisateur->piano;
                                        $_SESSION['chant'] = $Utilisateur->chant;
                                        $_SESSION['batterie'] = $Utilisateur->batterie;
                                        $_SESSION['trompette'] = $Utilisateur->trompette;
                                        $_SESSION['saxophone'] = $Utilisateur->saxophone;
                                        $_SESSION['contrebasse'] = $Utilisateur->contrebasse;
                                        $_SESSION['participant1'] = $Utilisateur->participant1;
                                        $_SESSION['participant2'] = $Utilisateur->participant2;
                                        $_SESSION['participant3'] = $Utilisateur->participant3;
                                        $_SESSION['participant4'] = $Utilisateur->participant4;
                                        $_SESSION['participant5'] = $Utilisateur->participant5;
                                        $_SESSION['participant6'] = $Utilisateur->participant6;
                                    }
                            ?>
                            </h3>                           
                                <?php
                                        if($_SESSION['piano']=='off')
                                        {  $piano=1;}                else $piano=0;
                                        if($_SESSION['chant']=='off')
                                        {  $chant=1;}                else $chant=0;
                                        if($_SESSION['batterie']=='off')
                                        {  $batterie=1;}                else $batterie=0;
                                        if($_SESSION['trompette']=='off')
                                        {  $trompette=1;}                else $trompette=0;
                                        if($_SESSION['saxophone']=='off')
                                        {  $saxophone=1;}                else $saxophone=0;
                                        if($_SESSION['contrebasse']=='off')
                                        {  $contrebasse=1;}                else $contrebasse=0;

                                ?>
                                <form  action="integration.php?instrument&amp;titre=<?php echo $titre ?>" method="post">
                    <fieldset>
                        <legend>Voici les instruments encore disponibles :</legend> <!-- Titre du fieldset --> 
                            
                            <h5>

                                    <?php if($chant==1) {  ?>
                                    <label>Chant </label> &nbsp; <input type="radio" name="instrument"  value="Chant" id="idchant"/> &nbsp;&nbsp;&nbsp;
                                    <?php } if($piano==1) {  ?>
                                    <label>Piano </label> &nbsp;<input type="radio" name="instrument"  value="Piano" id="idpiano"/>&nbsp;&nbsp;&nbsp;
                                    <?php } if($batterie==1) {  ?>
                                    <label>Batterie</label>&nbsp; <input type="radio" name="instrument"  value="Batterie" id="idbatterie"/> &nbsp;&nbsp;&nbsp;
                                    <?php } if($trompette==1) {  ?>
                                    <label>Trompette</label> &nbsp;<input type="radio" name="instrument"  value="Trompette" id="idtrompette"/>&nbsp;&nbsp; &nbsp;
                                    <?php } if($saxophone==1) {  ?>
                                    <label>Saxophone</label> &nbsp;<input type="radio" name="instrument"  value="Saxophone" id="idsaxophone"/>&nbsp;&nbsp;&nbsp;
                                    <?php } if($contrebasse==1) {  ?>
                                    <label>ContreBasse</label> &nbsp;<input type="radio" name="instrument"  value="Contrebasse" id="idcontreBasse" /> 
                                    <?php } ?>
                            </h5>
                            </br>
                            <input type="submit" value="J'y vais" />
                    </fieldset>
                </form>
                                
                        </div>
                    </div>
                </div>
</div>



<?php 
    require_once 'footer.php';
?>