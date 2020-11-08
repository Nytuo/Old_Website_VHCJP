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
    <script type="text/javascript" src="js/materialize.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
</head>
<header>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center"><img src="Ressources/logo.png" class="logonav"
                    title="Logo de Nytuo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">

                <li><a href="home.html">Accueil</a></li>
                <li><a href="games.html">Jeux</a></li>
                <li><a href="softwares.html">Logiciels</a></li>
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="feedback.html">FeedBack</a></li>
                <li><a href="about.html">A Propos</a></li>



            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="home.html">Accueil</a></li>
        <li><a href="games.html">Jeux</a></li>
        <li><a href="softwares.html">Logiciels</a></li>
        <li class="active"><a href="profile.php">Profile</a></li>
        <li><a href="feedback.html">FeedBack</a></li>
        <li><a href="about.html">A Propos</a></li>
    </ul>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
        <div class="column3" style="padding-top:100px">
            <div style="text-align: center;display : inline;">
                <?php

                if (isset($_SESSION['userId'])) :

                ?>
                    <h1> Bonjour, <?php echo $_SESSION['userUid']; ?></h1>
                <?php endif ?>
                <?php

                if (isset($_SESSION['userId'])) :

                ?>
                    <form action="logout.php" method="post">
                        <button type="submit" name="logout-submit"class="waves-effect waves-light btn"style="background-color:dodgerblue">Se Déconnecter</button>
                    </form>
                <?php else : ?>
<div class="row">
                    <form  class="col s12" action="login-v.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                        <input type="text" id="last_name" class="validate" name="mailuid" value="<?php if (isset($_COOKIE)) {
                                                                                                    echo $_COOKIE['Mail'];
                                                                                                } ?>">
                                                                                                <label for="last_name">Nom d'utilisateur</label>
                                                                                                </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                        <input type="password" class="validate" name="pwd" value="<?php if (isset($_COOKIE)) {
                                                                                                echo openssl_decrypt($_COOKIE["Password"],"AES-128-ECB",SECRETKEY); 
                                                                                            } ?>">
                                                                                            <label for="last_name">Mot de passe</label>

                            </div>
                        </div>
                    
                </div>
                        <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" name="remember" id='checkbox'/>
        <span>Se souvenir de moi</span>
      </label>
    </p><div style="text-align:center;">
                        <button type="submit" class="waves-effect waves-light btn"style="background-color:dodgerblue" name="login-submit">Se Connecter</button>
                        <button type="submit" class="waves-effect waves-light btn"style="background-color:dodgerblue" formaction="signup.php">Créé un compte</button></div>

                    </form>
                    <div style="text-align: center; margin-top:10px">
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