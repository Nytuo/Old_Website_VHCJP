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
            <div style="padding-top: 100px;"></div>

            <div class="cards-list">
                <?php
                if ($_SESSION['SFO'] == 1){
                    echo ' <div class="homeresize"">
                            <a href="sfo.html"><div class="card">
                                <div class="card-image">
                                    <img src="Ressources/IMGSFO2.png">
                                    <span class="card-title">ShootFighter Origins</span>
                                </div>
                                <div class="card-content">
                                    <p>Survive to Zombies waves in 2D</p>
                                </div>
                                
                                   
                            </div> 
                        </div></a>';
                }
                if ($_SESSION['LAATIM'] == 1) {
                    echo '<div class="homeresize">
                           <a href="laatim.html"> <div class="card">
                                <div class="card-image">
                                    <img src="Ressources/IMGLAATIM.png">
                                    <span class="card-title">Legend Adventure and the Infernal Maze</span>
                                </div>
                                <div class="card-content">
                                    <p>You came here for vacancy but something will affect them</p>
                                </div>
                                
                            </div>
                        </div></a>';
                }
                if ($_SESSION['SGB'] == 1) {
                    echo '<div class="homeresize">
                                <a href="sgb.html"><div class="card">
                                    <div class="card-image">
                                        <img src="Ressources/SGB2.png">
                                        <span class="card-title">Super Geoffrey Bros</span>
                                    </div>
                                    <div class="card-content">
                                        <p>A Mario like game made for the weeding of my cousin</p>
                                    </div>
                                </div>
                            </div></a>';
                }
                if ($_SESSION['SF'] == 1) {
                    echo '<div class="homeresize">

      <a href="sf.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGSF.png">
          <span class="card-title">ShootFighter</span>
        </div>
        <div class="card-content">
          <p>Survive to zombies waves in 3D.</p>
        </div>
      </div>
      </div></a>';
                }

                if ($_SESSION['LA'] == 1) {
                    echo '<div class="homeresize">

       <a href="la.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGLA.png">
          <span class="card-title">Lutin Adventure</span>
        </div>
        <div class="card-content">
          <p>Retrieve all the coins and go up to the tower.</p>
        </div>
      </div>
      </div></a>';
                }
                if ($_SESSION['VITF'] == 1) {
                    echo '<div class="homeresize">

      <a href="vitf.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGVITF.png">
          <span class="card-title">Vincent In The Forest</span>
        </div>
        <div class="card-content">
          <p>Retrieve all the components to escape the forest.</p>
        </div>
      </div>
      </div></a>';
                }
                if ($_SESSION['TTD'] == 1) {
                    echo '<div class="homeresize">

      <a href="ttd.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGTTD.png">
          <span class="card-title">The TARDIS Defender</span>
        </div>
        <div class="card-content">
          <p>Protect the TARDIS against Cybermans and Daleks</p>
        </div>
        </div>
      </div></a>';
                }
                if ($_SESSION['FWD'] == 1) {
                    echo '<div class="homeresize">

      <a href="fwd.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGFWD.png">
          <span class="card-title">FireWall Defender</span>
        </div>
        <div class="card-content">
          <p>Avoid the destruction of the CPU by placing turrets for destroy viruses</p>
        </div>
      </div>
      </div></a>';
                }
                if ($_SESSION['TB'] == 1) {
                    echo '<div class="homeresize">
                            <a href="tb.html"><div class="card">
                                <div class="card-image">
                                    <img src="Ressources/IMGTB.png">
                                    <span class="card-title">TanksBattle</span>
                                </div>
                                <div class="card-content">
                                    <p>Battle of Tanks over LAN</p>
                                </div>
                            </div>
                        </div></a>';
                }
                if ($_SESSION['WR'] == 1) {
                    echo '<div class="homeresize">

      <a href="wr.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGWR.png">
          <span class="card-title">WinRun</span>
        </div>
        <div class="card-content">
          <p>Basic course game</p>
        </div>
        </div>
      </div></a>';
                }
                if ($_SESSION['AE'] == 1) {
                    echo '<div class="homeresize">

      <a href="ae.html"><div class="card">
        <div class="card-image">
          <img src="Ressources/IMGAE.png">
          <span class="card-title">AsteroidEscape</span>
        </div>
        <div class="card-content">
          <p>Destroy and escape all the asteroids (do the best score you can)</p>
        </div>
      </div>
      </div></a>';
                }


                if ($_SESSION['SNRE'] == 1) {
                    echo '<div class="homeresize">

                                <a href="sn.html"><div class="card">
                                    <div class="card-image">
                                        <img src="Ressources/IMGSN.png">
                                        <span class="card-title">SansNom Réédition</span>
                                    </div>
                                <div class="card-content">
                                    <p>A game just for FUN.</p>
                                </div>
                            </div>
                        </div></a>';
                }
                if ($_SESSION['LAATIM'] == 0 && $_SESSION['SGB'] == 0 && $_SESSION['SF'] == 0 && $_SESSION['SFO'] == 0 && $_SESSION['LA'] == 0 && $_SESSION['VITF'] == 0 && $_SESSION['TTD'] == 0 && $_SESSION['FWD'] == 0 && $_SESSION['TB'] == 0 && $_SESSION['WR'] == 0 && $_SESSION['AE'] == 0 && $_SESSION['SNRE'] == 0) {
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