<?php
    session_start();
    require_once'header.php';
    require_once'title.php';
    
    // connexion à la base
    $pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');


    $maval=$_GET["maval"];


    if ($maval==1)
    {
        $sql = "UPDATE utilisation SET formation = 'visiteur'";
    }
    elseif ($maval==2)
    {
        $sql = "UPDATE utilisation SET formation = 'decouverte'";
    }
    elseif ($maval==3)
    {
        $sql = "UPDATE utilisation SET formation = 'appronfondissement'";
    }
    else
    {
        $sql = "UPDATE utilisation SET formation = 'complete'";
    }

    $sql .= " WHERE idUser = " . $_SESSION['idUser'];

    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    header("refresh:4;url=index.php");

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
                            <h3>Votre inscription a était prise en compte</h3>
                            <p>Veuillez patientez vous allez être redirigée...</p>
                            <h3>
                            <?php
                            if ($maval==1)
                            {
                                echo ('Bienvenue dans la formation visiteur');
                            }
                            elseif ($maval==2)
                            {
                                echo ('Bienvenue dans la formation découverte');
                            }
                            elseif ($maval==3)
                            {
                                echo ('Bienvenue dans la formation approfondissement');
                            }
                            else
                            {
                                echo ('Bienvenue dans la formation complète');
                            }
                            ?>
                            </h3>
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
</div>