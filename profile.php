<?php
require 'header.php';
?>
<main>
    <div style="text-align: center;">
        <?php

        if (isset($_SESSION['userId'])) :

        ?>
            <p> Vous êtes la personne numéro <?php echo $_SESSION['userId']; ?> à être inscrit sur le site ! ( C'est votre identifiant numérique )</p>
            <p>Votre nom dans le Nytuo Universe est : <?php echo $_SESSION['userUid']; ?> </p>
            <p>Votre adresse mail est : <?php echo $_SESSION['mail']; ?></p>
            <a style="color: dodgerblue" href="reset-password.php">Demander un changement de mot de passe</a>
            <br />
            <a style="color: dodgerblue" href="changeUsername.php">Demander un changement de nom d'utilisateur</a>
            <br />
            <a style="color: dodgerblue" href="activate.php">Activé un jeu à l'aide d'une clé</a>
            <h1>Jeu(x) activé(s) sur votre compte: (incluant les jeux gratuits et les avants-premières)</h1>

            <div class="row">
                <?php
                if ($_SESSION['LAATIM'] == 1) {
                    echo '<div class="column">
                <div class="container redimhome2" style="display: block;">
                   <a href="laatim.html">
                       <div class="redimhome" style="text-align: center;">
                            <img src="Ressources/IMGLAATIM.png" alt="Avatar" class="image">
                            <img src="Ressources/LogoLAATIM.png" class="imghome" title="Logo LAATIM" style="z-index: 1;width: 15%;position: absolute;top: 20%;left: 80%">
                        </div>
                        <div class="overlay">
                            <div class="Maintext">-- Jeux N°11 : Legend Adventure And The infernal Maze --</div> 
                            <div class="text">Dans un labyrinthe, une présence hostile nuira a votre séjour</div> 
                        </div>
                    </a>
                </div>        
            </div>';
                }
                if ($_SESSION['SGB'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="sgb.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/SGB2.png" alt="Avatar" class="image">
                                <img src="Ressources/SGB1.png" title="Logo SGB" style="z-index: 1;width: 20%;position: absolute;top: 7%;left: 75%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°10 : Super Geoffrey Bros --</div>
                                <div class="text">Jeu Mario avec univers différents pour le mariage de mon cousin Geoffrey.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['SF'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="sf.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGSF.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoSF.png" title="Logo SF" style="z-index: 1;width: 18%;position: absolute;top: 5%;left: 76%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°9: ShootFighter --</div>
                                <div class="text">Apocalypse Zombies, un homme, une arme.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }

                if ($_SESSION['LA'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="la.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGLA.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoLA.png" title="Logo LA" style="z-index: 1;width: 25%;position: absolute;top: 10%;left: 70%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°8 : Lutin Adventure -- </div>
                                <div class="text">Vous êtes un lutin et vous devez rammasser toutes les pieces du niveau.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['VITF'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="vitf.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGVITF.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoVITF.png" title="Logo TTD" style="z-index: 1;width: 30%;position: absolute;top: 10%;left: 68%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°7 : Vincent In The Forest --</div>
                                <div class="text">Vincent est coincé dans la foret avec un homme mystérieux.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['TTD'] == 1) {
                    echo '    <div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="ttd.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGTTD.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoTTD.png" title="Logo TTD" style="z-index: 1;width: 35%;position: absolute;top: 5%;left: 70%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°6 : The Tardis Defender --</div>
                                <div class="text">Le Doctor est partie chercher Clara, en son absence il te confie la mission de protéger son TARDIS.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['FWD'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="fwd.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGFWD.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoFWD.png" title="Logo FWD" style="z-index: 1;width: 25%;position: absolute;top: 8%;left: 74%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°5 : FireWall Defender --</div>
                                <div class="text">Placer les tourelles sur les murs pour empêcher les virus d’atteindre le processeur.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['TB'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="tb.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGTB.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoTB.png" title="Logo TB" style="z-index: 1;   width: 25%;position: absolute;top: 8%;left: 75%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°4 : TanksBattle --</div>
                                <div class="text">Combattez-vous entre amis sur la même box ou sur le même ordinateur avec des tanks.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['WR'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="wr.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGWR.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoWR.png" title="Logo WR" style="z-index: 1;  width: 20%;position: absolute;top: 5%;left: 75%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°3 : WinRun --</div>
                                <div class="text">Dans ce jeu vous contrôlez une voiture et votre bute est d’arriver premier.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['AE'] == 1) {
                    echo ' <div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="ae.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGAE.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoAE.png" title="Logo AE" style="z-index: 1;  width: 25%;position: absolute;top: 5%;left: 75%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°2 : Asteroid Escape --</div>
                                <div class="text">Détruit tous les astéroids et survie en tirant dessus.Fais le meilleur scores possible.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }


                if ($_SESSION['SNRE'] == 1) {
                    echo '<div class="column">
                    <div class="container redimhome2" style="display: block;">
                        <a href="sn.html">
                            <div class="redimhome" style="text-align: center;">
                                <img src="Ressources/IMGSN.png" alt="Avatar" class="image">
                                <img src="Ressources/LogoSN.png" title="Logo SN" style="z-index: 1; width: 10%;position: absolute;top: 5%;left: 88%">
                            </div>
                            <div class="overlay">
                                <div class="Maintext">-- Jeux N°1 : SansNom --</div>
                                <div class="text">Mon tout premier jeu, sans histoire, récemment refait.</div>
                            </div>
                        </a>
                    </div>
                </div>';
                }
                if ($_SESSION['LAATIM']==0 && $_SESSION['SGB']==0&& $_SESSION['SF']==0&& $_SESSION['LA']==0&& $_SESSION['VITF']==0&& $_SESSION['TTD']==0&& $_SESSION['FWD']==0&& $_SESSION['TB']==0&& $_SESSION['WR']==0&& $_SESSION['AE']==0&& $_SESSION['SNRE']==0){
                    echo '<p>Il semblerait que ta bibliothèque soit vide...<br/>Cela n\'aurait pas du arriver...<br/>Contacte moi pour que je puisse régler cela aussi vite que possible! Tu peux envoyer ta demande via la section \'FeedBack\'!</p>';
                }
                ?>
            <?php endif ?>
            <?php
            if (isset($_SESSION['userId'])) {
            } else {
                echo '<h1> Pour voir des choses ici, vous devez-être connecté...</h1>';
            }

            ?>

            </div>

</main>
<?php
require 'footer.php';

?>