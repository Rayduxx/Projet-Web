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
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="../assets/css/connection.css"/>
  <link rel="stylesheet" href="../assets/css/normalize.css"/>
  <title>Mindzone - <?php echo $page_titre;?></title>
</head>

<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <a href="#">
        <img src="../assets/img/logo.png">
      </a>
    </div>
    <?php if (!isset($_SESSION['email'])) { ?>
    <div class="navbar-links">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="navbar-buttons">
      <a href="connection.php" class="button">Login</a>
    </div>
    <?php } else { ?>
      <div class="navbar-links">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="profil.php"><?php echo $userinfo['nom']; ?></a></li>
      </ul>
    </div>
    <div class="navbar-buttons">
      <a href="./logout.php" class="button">Logout</a>
    </div>
    <?php } ?>
  </nav>