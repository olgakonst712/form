<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon site !</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>
  <body>
    <?php
include("nav_bar.php"); // on appelle le fichier
?>
 
    <div class="container profil">
      <h1>Mon compte</h1>
      <a href="avatar.php" class="btn btn-success">Changer mon image de profil</a>
      <a href="password.php" class="btn btn-success">Changer mon mot de passe</a>
    </div>
  </body>
</html>