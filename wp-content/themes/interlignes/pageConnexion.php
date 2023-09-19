<?php /* 
Template Name: Connexion
*/
?>
<?php
get_header();
?>

<?php
/**
 * Template Name: Custom Login
 */

// Vérifiez si l'utilisateur est déjà connecté, puis redirigez-le vers la page d'accueil


get_header();
?>

<main>
        <div class="connexion">
        <h1>CONNEXION</h1>
        <form action="" method="POST">
            <label for="mail">Votre Adresse Mail</label>
            <div class="input_Connexion">
            <input type="email" id="mail" placeholder="example@gmail.com">
            </div>
            <div class="input_Connexion">
            <label for="pass">Votre Mot De Passe</label>
            </div>
            <div class="input_Connexion">
            <input type="password" id="pass" placeholder="******">
            </div>
            <div class="input_Connexion">
                <button type="submit">ENVOYER</button>
            </div>
            <div class="paragConnexion">
                <p>Pas de compte ? <a href="./pageInscription.php">Inscrivez vous !</a></p>
            </div>
        </form>
        </div>
    </main>
</div>



