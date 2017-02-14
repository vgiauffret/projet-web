<?php
    session_start();
    require_once'header.php';
    require_once'title.php';
?>

<!-- Début Inscription Section -->
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
                            <h3>Insritption</h3>
                            <p>Inscrivez vous à nos formations !</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text text-center">
                                <h5>Rien de plus simple, vous pouvez vous inscrire en moins de 2 minutes en remplissant notre formulaire en ligne. Dans tous les cas, n’hésitez pas à demander conseil à nos conseillers pédagogiques.</h5>
                                
                            </div>
                        </div>
                    </div><!-- /.row -->
                    
                    <div class="pricing-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Visiteurs</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">Gratuit<span></span></div>
                                        <div class="interval"></div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>Accès aux repétitions</li>
                                            <li>Accès limitée au matinée</li>
                                            <li>Discuter avec les professeurs</li>
                                            <li>Pas d'accés au orchestre</li>
                                            <li>Aucune prioriter sur les concerts</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="participation.php?maval=1" class="btn-system btn-small">Inscris toi !</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Découverte</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">50€<span>.00</span></div>
                                        <div class="interval"></div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>Tout type d'atelier</li>
                                            <li>Matériel non fournis</li>
                                            <li>Accès aux cours une journée</li>
                                            <li>Joue en orchestre les après-midi</li>
                                            <li>Prioritaire sur les concerts</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="participation.php?maval=2" class="btn-system btn-small">Inscris toi !</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Approfondissement</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">100€<span>.00</span></div>
                                        <div class="interval"></div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>Tout type d'atelier</li>
                                            <li>Matériel non fournis</li>
                                            <li>Accès aux cours 3 jours</li>
                                            <li>Joue en orchestre les après-midi</li>
                                            <li>Prioritaire sur les concerts</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="participation.php?maval=3" class="btn-system btn-small">Inscris toi !</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Complète</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">200€<span>.00</span></div>
                                        <div class="interval"></div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>Tout type d'atelier </li>
                                            <li>Matériel fournis</li>
                                            <li>Accès aux cours toute la semaine</li>
                                            <li>Joue en orchestre les après-midi</li>
                                            <li>Prioritaire sur les concerts</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="participation.php?maval=4" class="btn-system btn-small">Inscris toi !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                
            </div>
        <!-- Fin Inscription Section -->
        

<?php 
    require_once 'footer.php';
?>