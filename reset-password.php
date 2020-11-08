<?php
require 'header.php';
?>
<main>
    <h1>Réinitialisateur de mot de passe</h1>
    <p>Un email va vous être envoyer avec les instructions pour réinitialiser votre mot de passe.</p>
 <div class="row">
    <form class="col s12" style="text-align: center" action="reset-request.php" method="post"><div class="row">
                <div class="input-field col s12">
        <input type="email" name="email" id="email" class="validate" ><label for="email">Email lié a votre compte</label>
                </div>
            </div>
        <button type="submit" class="waves-effect waves-light btn"style="background-color:dodgerblue" name="reset-request-submit">Envoyer le mail !</button>
    </form>
       <?php
    if (isset($_GET['reset'])) {
        if ($_GET['reset'] == 'success') {
            echo '<p>Vérifier votre adresse mail!</p>';
    }
    }
        if (isset($_GET['error'])) {
        if ($_GET['error'] == 'noaccount') {
            echo '<p>Il n\'y a pas de compte lié à cette adresse mail!</p>';
    }

}
    

    ?>
</main>