<nav>
    <div class="nav-wrapper deep-purple darken-1">
      <a href="#" class="brand-logo">ToDoList</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <?php if(isset($_SESSION["id"])){ ?>
        <li><a href="include/deco.php">Deconnexion</a></li>
      <?php }else{ ?>
        <li><a href="#" id="inscription">Inscription</a></li>
        <li><a href="#" id="connexion">Connexion</a></li>
      <?php } ?>
      </ul>
    </div>
  </nav>