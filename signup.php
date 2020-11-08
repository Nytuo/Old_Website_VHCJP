<?php
require 'header.php';
?>
<main>
    <h1>Créé un compte Nytuo</h1>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            echo '<p>Fill in all fields !</p>';
        } else if ($_GET['error'] == 'invalidmail') {
            echo '<p>Invalid email</p>';
        } else if ($_GET['error'] == 'invalidmailuid') {
            echo '<p>Invalid email and username</p>';
        } else if ($_GET['error'] == 'invaliduid') {
            echo '<p>Invalid Username!</p>';
        } else if ($_GET['error'] == 'passwordcheck') {
            echo '<p>your password do not match!</p>';
        } else if ($_GET['error'] == 'sqlerror') {
            echo '<p>Server error!</p>';
        } else if ($_GET['error'] == 'usertaken') {
            echo '<p>Username already taken!</p>';
        } else if ($_GET['error'] == 'mailtaken') {
            echo '<p>Email already taken!</p>';
        }
    }
    

    ?>
    <div class="row">
        <form class="col s12" style="text-align: center" action="signup-v.php" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" id="name" name="uid" class="validate">
                        <label for="name">Nom d'utilisateur</label>
                </div>
            </div>
            <div class="row">
                 <div class="input-field col s12">
                    <input type="email" name="mail" id="email" class="validate">
                        <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="pwd" id="pwdc" class="validate">
                    <label for="pwdc">Mot de passe</label>

                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="pwd-repeat" id="pwdc2"><label for="pwdc2">repéter le mot de passe</label>

                </div>
            </div>
        <p>En cliquant sur le bouton 'créé le compte' vous acceptez <a style="color: dodgerblue" href="termsandconditions.html">les termes du contrat suivant.</a></p><br/>
        <div style="text-align:center"><button type="submit" name="signup-submit"class="waves-effect waves-light btn"style="background-color:dodgerblue">Créé le compte</button></div>
    </form>
</main>