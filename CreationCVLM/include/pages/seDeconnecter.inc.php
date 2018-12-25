<?php session_destroy();
?>
<div class="col-md-6 offset-3 gestionConnexion  text-center">
  <p> Vous avez bien été <span>déconnecté</span> !  <br />
   <strong>Redirection automatique dans 2 secondes.</strong> </p>
</div>
  <?php header("refresh:2;url=index.php?page=0"); ?>
