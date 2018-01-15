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
      <h1 class="text-xs-center">Changer de mot de passe</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <form action="password.php" method="post" class="p-y-3 p-x-2">
            <input type="password" name="oldpassword" class="form-control" placeholder="Ancien mot de passe">
            <input type="password" name="newpassword" class="form-control" placeholder="Nouveau mot de passe">
            <input type="password" name="newpasswordconf" class="form-control" placeholder="Confirmez le nouveau mot de passe">
            <input type="submit" class="btn btn-success" value="Changer de mot de passe">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
