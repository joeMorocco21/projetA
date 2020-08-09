<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
  <body>

<nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark" >
  <a class="navbar-brand" href="#"><img class="logo1" src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php
      if (isset($_GET["m"])) {?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
    <?php }else{?>
      <li class="nav-item">
        <a class="nav-link active" href="#presentation">Présentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#exterieur">Exterieur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#moteur">Moteur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#interieur">Intérieur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#equipement">Equipement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#accessoire">Accessoire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="formulaire-contact.php?m=0">Contactez-nous</a>
      </li>
      <?php
}
      ?>
    </ul>
  </div>
</nav>

</body>
</html>