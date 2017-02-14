<?php
    require_once'header.php';
    require_once'title.php';
?>

<div class="container">
    <div class="row">
        <div class="section-title text-center">
            <h3>Création d'un compte</h3>
            	<form  action="enregistrement.php" method="post" class="text-center">
                    <fieldset>
                        <legend>Veuillez renseigner tous les champs</legend> <!-- Titre du fieldset --> 
                            <h5>Nom :<input placeholder="Entrez votre Nom" type="text" name="nom" id="name" required/></h5>
                            <h5>Prenom :<input placeholder="Entrez votre Prenom" type="text" name="prenom" id="idprenom" required/></h5>
                            <h5>Adresse Email :<input placeholder="Entrez votre Email" type="email" name="email" id="idemail" required/></h5>
                            <h5>Password :<input placeholder="Entrez votre Password" type="password" name="pass" id="idpassword" required/></h5>
                            <h5>Date de naissance :<input type="date" name="age" /> </h5> 
                            <h5>Quel est votre instrument ?
                                <select name="instrument" id="idinstrument">
                                   <option value="Piano">Piano</option>
                                   <option value="Batterie">Batterie</option>
                                   <option value="Trompette">Trompette</option>
                                   <option value="Saxophone">Saxophone</option>
                                   <option value="ContreBasse">ContreBasse</option>
                                   <option value="Chant">Chant</option>
                                </select>
                            </h5>
                            <h5>Navette Aeroport/MasterClass ?
                                <select name="navette" id="idnavette">
                                   <option value="Oui">Oui</option>
                                   <option value="Non">Non</option>
                                </select>
                            </h5>
                            </br></br></br>
                        	<input type="submit" value="Enregistrer" />
                    </fieldset>
                </form>
        </div>
    </div>
</div>


<?php 
    require_once 'footer.php';
?>