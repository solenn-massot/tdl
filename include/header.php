
    <section id="titre">
        <span>
        <h1>Todolist.net</h1>
        La référence en matière de todolist !
        </span>
    </section>
    <?php
    if(isset($_SESSION["id"])){
        ?>
       <button id="co" class="button"><a id="deco" href="include/deco.php">Déconnexion</a></button>
        <?php
    }else{
        ?>
        <button class="button" id='inscription'>Inscription</button>
        <button class="button" id='connexion'>Connexion</button>
    <?php
    }
    ?>
