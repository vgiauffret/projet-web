<?php
    session_start();
    $ok=false;
    require_once'header.php';
    require_once'title.php';

    if (isset($_SESSION['email']))
    {
        $ok=true;
    }
    else
    {
        $ok=false;
    }
    
?>
       
        
        <!-- Début Accueil Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="menu-item blue">
                            <?php
                            if(!$ok) {
                            ?>
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-newspaper-o"></i>
                                <p>Connexion / Créer un compte</p>
                            </a>
                            <?php 
                                } 
                                    else 
                                {
                            ?>
                            <a href="espaceperso.php"> 
                                <i class="fa fa-newspaper-o"></i>
                                <p>
                            <?php 
                                echo $_SESSION['nom'];
                                echo ' ';
                                echo $_SESSION['prenom'];
                            ?>
                                </p>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                        
                        <div class="menu-item green">
                            <?php
                            if(!$ok) {
                            ?>
                            <a href="#portofolio-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>Concerts</p>
                            </a>
                            <?php 
                                } 
                                    else 
                                {
                            ?>
                            <a href="concert.php">
                                <i class="fa fa-magic"></i>
                                <p>Concerts</p>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="formation.php" >
                                <i class="fa fa-mortar-board"></i>
                                <p>Formations</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Début Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/about-03.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-02.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-01.jpg" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Fin Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="professeurs.php" >
                                        <i class="fa fa-users"></i>
                                        <p>Professeurs</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="programme.php">
                                        <i class="fa fa-calendar"></i>
                                        <p>Programme</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <?php
                            if($ok) {
                            ?>
                                <a href="deconnexion.php">
                                <i class="fa fa-times"></i>
                                <p>Déconnexion</p>
                            </a>
                            <?php
                                }
                                else 
                                {
                            ?>
                                <a href="#">
                                <i class="fa fa-times"></i>
                                <p>Déconnexion</p>
                            <?php
                                }
                            ?>

                        </div>
                        
                        <div class="menu-item color">
                            <a href="historique.php">
                                <i class="fa fa-history"></i>
                                <p>Historique</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <?php
                            if(!$ok) {
                            ?>
                            <a href="#portofolio-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>Participez à une formation</p>
                            </a>
                            <?php 
                                } 
                                    else 
                                {
                            ?>
                            <a href="participer.php">
                                <i class="fa fa-user"></i>
                                <p>Participez à une formation</p>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                        
                    </div>
                    <!-- If si pas connecter -->
                    <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h3>Identification</h3>
                                            <form method="post" action="connexion.php">
                                                <fieldset>
                                                    <legend>Identifier vous ou créer un compte</legend> <!-- Titre du fieldset --> 
                                                        <h5>Votre Email :<input placeholder="Entrez votre email" type="email" name="email" id="email" required/></h5>
                                                        <h5>Password :<input placeholder="Entrez votre Password" type="password" name="pass" id="pass" required/></h5>
                                                    <input type="submit" value="Connexion" />
                                                </fieldset>
                                            </form>
                                        </br>
                                        <h5><a href="creationcompte.php">Je n'ai pas de compte</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Pas afficher la page car pas connecter -->
                    <div class="section-modal modal fade" id="portofolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h3>Veuillez vous connecter</h3>
                                            <h5>Cette partie du site est innacessible tant que vous n'étes pas connecter.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Fin Accueil Section -->  


         
<?php 
    require_once 'footer.php';
?>