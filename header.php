<?php
session_start();
ob_start();
define ("SECRETKEY", "Nytuo@Super&Key4961");
?>
<style>
    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 20%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #292929;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #242424;
        outline: none;
        color: white;
    }

    /* Set a style for all buttons */
    button {
        background-color: dodgerblue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 20%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }
</style>
<!DOCTYPE html>
<html>
<title>Nytuo -- Profile</title>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="Ressources/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Accueil</title>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'fr'
                },
                'google_translate_element'
            );
        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</head>
<header>
    <div class="row">

        <div class="navcolumn">
            <ul class="topnav">

                <li><a href="about.html">A Propos</a></li>
                <li><a href="feedback.html">FeedBack</a></li>
                <li><a class="active" href="profile.php">Profile</a></li>
                <li><a href="softwares.html">Logiciels</a></li>
                <li><a href="python.html">Python</a></li>
                <li><a href="games.html">Jeux</a></li>

                <li><a href="home.html">Accueil</a></li>

            </ul>
        </div>
        <div class="column3"><img src="Ressources/logo.png" class="logonav" title="Logo de Nytuo"></div>
        <div class="column3">
            <div style="text-align: center;display : inline;">
                <?php

                if (isset($_SESSION['userId'])) :

                ?>
                    <h1> Bonjour, <strong><?php echo $_SESSION['userUid']; ?></strong></h1>
                <?php endif ?>
                <?php

                if (isset($_SESSION['userId'])) :

                ?>
                    <form action="logout.php" method="post">
                        <button type="submit" name="logout-submit">Se Déconnecter</button>
                    </form>
                <?php else : ?>

                    <form action="login-v.php" method="post">
                        <input type="text" name="mailuid" placeholder="Nom Utilisateur" value="<?php if (isset($_COOKIE)) {
                                                                                                    echo $_COOKIE['Mail'];
                                                                                                } ?>">
                        <input type="password" name="pwd" placeholder="Mot de passe" value="<?php if (isset($_COOKIE)) {
                                                                                                echo openssl_decrypt($_COOKIE["Password"],"AES-128-ECB",SECRETKEY); 
                                                                                            } ?>">
                        <p><input type="checkbox" name="remember">Se Souvenir de moi</p>
                        <button type="submit" name="login-submit">Se Connecter</button>
                        <button type="submit" formaction="signup.php">Créé un compte</button>

                    </form>
                    <div style="text-align: center;">
                        <a style="color: dodgerblue;" href="reset-password.php">Demander un changement de mot de passe</a></div>

                <?php endif ?>
                <?php
                if (isset($_GET['newpwd'])) {
                    if ($_GET['newpwd'] == "passwordUpdated") {
                        echo '<p>Votre mot de passe a était mis à jour</p>';
                    }
                }
                ?>



            </div>
        </div>




    </div>

</header>

</html>