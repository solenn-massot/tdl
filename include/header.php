<header>
    <?php
    if(isset($_SESSION["id"])){
        ?>
        <a href="include/deco.php">Déconnexion</a>
        <?php
    }else{
        ?>
        <button id='inscription'>Inscription</button>
        <button id='connexion'>Connexion</button>
    <?php
    }
    ?>
</header>