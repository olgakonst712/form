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
    <div class="container">
      <h1 class="text-xs-center">Mot de passe oublié</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <form action="oubli.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail de votre compte">
            <input type="submit" class="btn btn-success" value="Soumettre">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>