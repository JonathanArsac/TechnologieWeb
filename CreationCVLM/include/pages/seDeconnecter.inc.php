<?php session_destroy();
?>
<div class="messageConnexion" id="messageDeconnexion">
  <p><img src="image/valid.png" alt="coche"> Vous avez bien été déconnecté ! </p>
  <p> Redirection automatique dans 2 secondes. </p>
</div>
  <?php header("refresh:2;url=index.php?page=0"); ?>
