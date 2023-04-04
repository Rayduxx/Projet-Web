<?php
require("../config.php");
if(isset($userinfo['email'])){
$requser = $bdd->prepare('SELECT * FROM ban WHERE userId = ?');
$requser->execute(array($userinfo['id']));
$userexist = $requser->rowCount();
if($userexist == 1) {
  header('Location: ./ban.php');
}}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">  <link rel="stylesheet" href="../assets/css/navbar.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="../assets/css/index2.css">
  <link rel="stylesheet" href="../assets/css/connection.css"/>
  <link rel="stylesheet" href="../assets/css/normalize.css"/>
  <title>Mindzone - <?php echo $page_titre;?></title>
</head>

<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <a href="index.php">
        <img src="../assets/img/logo.png">
      </a>
    </div>
    <?php if (!isset($_SESSION['email'])) { ?>
    <div class="navbar-links">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>
    <div class="navbar-buttons">
      <a href="connection.php" class="button">Login</a>
    </div>
    <?php } else { ?>
      <div class="navbar-links">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="profil.php"><?php echo $userinfo['nom']; ?></a></li>
      </ul>
    </div>
    <div class="navbar-buttons">
      <a href="./logout.php" class="button">Logout</a>
    </div>
    <?php } ?>
  </nav>