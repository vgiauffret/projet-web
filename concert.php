<?php
    session_start();
    require_once'header.php';
    require_once'title.php';

    //On se connecte à la BDD
$pdo = new PDO("mysql:dbname=masterclass;host=localhost", 'root', '');

?>


        <!-- Début Concerts Section -->
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
                            <h3>Nos Concerts</h3>
                            <p>Chaque soir de la semaine aura lieu un concert !</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Lundi</h4>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='lundi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;
                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                        

                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=1" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Mardi</h4>
                                    <p>
                                    <?php 
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='mardi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=2" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Mercredi</h4>
                                    <p>
                                    <?php 
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='mercredi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                     
                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=3" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Jeudi</h4>
                                    <p>
                                    <?php 
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='jeudi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                     
                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.?jour=4" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Vendredi</h4>
                                    <p>
                                    <?php 
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='vendredi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                     
                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=5" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Samedi</h4>
                                    <p>
                                    <?php 
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='samedi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                     
                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=6" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <i class="fa fa-calendar"></i>
                                <div class="feature-content">
                                    <h4>Dimanche</h4>
                                    <p>
                                    <?php 
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='dimanche'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
                                        <a href="integrer.php?
                                        artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>
                                                ">
                                    <?php 
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>                                                                            
                                    <?php  


                                    }
                                    $req->closeCursor();                                  
                                    ?>
                                     
                                    </p>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=7" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div>
                
            </div>
        
        <!-- Fin Concerts Section -->
        
<?php 
    require_once 'footer.php';
?>