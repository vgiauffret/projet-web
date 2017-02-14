<?php
    session_start();
    require_once'header.php';
    require_once'title.php';


    $jour=$_GET["jour"];


    if ($jour==1)
    {
        $jour1 = 'lundi';
    }
    elseif ($jour==2)
    {
        $jour1 = 'mardi';
    }
    elseif ($jour==3)
    {
        $jour1 = 'mercredi';
    }
    elseif ($jour==4)
    {
        $jour1 = 'jeudi';
    }
    elseif ($jour==5)
    {
        $jour1 = 'vendredi';
    }
    elseif ($jour==6)
    {
        $jour1 = 'samedi';
    }
    else
    {
        $jour1 = 'dimanche';
    }



?>

<div class="container">
    <div class="row">
        <div class="section-title text-center">
            <h3>Ajout d'un morceaux pour
            <?php 
            echo '';
            echo $jour1;
            ?>
                
            </h3>
                <form  action="creationmorceau.php?jour=<?php echo $jour1 ?>" method="post">
                    <fieldset>
                        <legend>Veuillez renseigner tous les champs</legend> <!-- Titre du fieldset --> 
                            <h5>Titre :<input placeholder="Indiquer le titre" type="text" name="titre" id="idtitre" required/></h5>
                            <h5>Artiste :<input placeholder="Indiquer l'artiste" type="text" name="artiste" id="idartiste" required/></h5>
                            <h5>
                                Cochez l'instrument que vous utiliserez :<br />
                                    <label for="chant">Chant </label> &nbsp; <input type="radio" name="chant" id="idchant"/> &nbsp;&nbsp;&nbsp;
                                    <label for="piano">Piano </label> &nbsp;<input type="radio" name="piano" id="idpiano"/>&nbsp;&nbsp;&nbsp;
                                    <label for="Batterie">Batterie</label>&nbsp; <input type="radio" name="batterie" id="idbatterie"/> &nbsp;&nbsp;&nbsp;
                                    <label for="Trompette">Trompette</label> &nbsp;<input type="radio" name="trompette" id="idtrompette"/>&nbsp;&nbsp; &nbsp;
                                    <label for="Saxophone">Saxophone</label> &nbsp;<input type="radio" name="saxophone" id="idsaxophone"/>&nbsp;&nbsp;&nbsp;
                                    <label for="ContreBasse">ContreBasse</label> &nbsp;<input type="radio" name="contrebasse" id="idcontreBasse" /> 
                            </h5>
                            </br>
                            <input type="submit" value="Ajouter" />
                    </fieldset>
                </form>
        </div>
    </div>
</div>

<?php 
    require_once 'footer.php';
?>