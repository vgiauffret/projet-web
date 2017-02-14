<?php
    session_start();
    $ok=false;
    require_once'header.php';
    require_once'title.php';

    if (isset($_SESSION['email']))
    {
        session_destroy();
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
                            <h3>Vous êtes maintenant déconnecté</h3>
                            <p>Veuillez patientez vous allez être redirigée...</p>
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
</div>