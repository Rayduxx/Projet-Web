<?php
$page_titre = "Connection";
include './includes/header.php';
?>
<div class="container">
  <div class="forms-container">
    <div class="signin-signup">
      <?php
      if (isset($_SESSION['email'])) {
        header("Location: ./index.php");
      }
      if(isset($_POST['formconnexion'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);
        if(!empty($email) AND !empty($password)) {
          $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
          $requser->execute(array($email, $password));
          $userexist = $requser->rowCount();
          if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['email'] = $userinfo['email'];
            header("Location: ./index.php");
          } else {
            $erreur = "Votre email et/ou votre mot de passe sont incorrect !";
          }
        } else {
          $erreur = "Tout les champs doivent être complété ! ";
        }
      }
      ?>
      <form method="POST" class="sign-in-form">
        <h2 class="title">Sign in</h2>
        <?php if(isset($erreur)) {
						echo '<div><div class="alert alert-danger" role="alert"> Une erreur est survenu lors de votre inscription :' .$erreur.'</div></div>';
					}?>
					<?php if(isset($success)) {
						echo '<div><div class="alert alert-success" role="alert">' .$success.'<a href="./index.php"> Connectez vous</a></div></div>';
					}?>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="email" id="email" name="email" placeholder="Email" required />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" id="password" name="password" placeholder="Password" required />
        </div>
        <button type="submit" name="formconnexion" class="btn solid">Connect</button>
        <p class="social-text">Or Sign in with social platforms</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
        <?php
        if (isset($_SESSION['name'])) {
          header("Location: ./index.php");
        } else {

          if (isset($_POST['forminscription'])) {
            $name1 = htmlspecialchars($_POST['name1']);
            $prename1 = htmlspecialchars($_POST['prename1']);
            $email1 = htmlspecialchars($_POST['email1']);
            $password1 = sha1($_POST['password1']);
            if (!empty($_POST['name1']) and !empty($_POST['prename1']) and !empty($_POST['email1']) and !empty($_POST['password1'])) {
              $nomlength = strlen($name1);
              $namelength = strlen($prename1);
              if ($namelength <= 255 && $nomlength <= 255) {
                  if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
                    $reqemail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
                    $reqemail->execute(array($email1));
                    $mailexist = $reqemail->rowCount();
                    if ($mailexist == 0) {
                        $insertmbr = $bdd->prepare("INSERT INTO users(nom, prenom, email, password) VALUES(?, ?, ?, ?)");
                        $insertmbr->execute(array($name1, $prename1, $email1, $password1));
                        $success = "Votre compte a été crée avec succés !";
                    } else {
                      $erreur = "l'adresse email saisis est deja utilisé";
                    }
                  } else {
                    $erreur = "Votre addresse email n'est pas valide !";
                  }
              } else {
                $erreur = "Votre pseudonyme doit faire moins de 255 characteres !";
              }
            } else {
              $erreur = "Les champs sont incomplet !";
            }
          }
        }
        ?>
      </form>
      <form method="POST" class="sign-up-form">
        <h2 class="title">Sign up</h2>
        <?php if(isset($erreur)) {
						echo '<div><div role="alert"> Une erreur est survenu lors de votre inscription :' .$erreur.'</div></div>';
					}?>
					<?php if(isset($success)) {
						echo '<div><div role="alert">' .$success.'<a href="./connection.php"> Connectez vous</a></div></div>';
					}?>
        <div class="input-field nameinput">
          <i class="fas fa-user"></i>
          <input type="text" id="name1" name="name1" placeholder="Name" required />
        </div>
        <div class="input-field prenameinput">
          <i class="fas fa-user"></i>
          <input type="text" id="prename1" name="prename1" placeholder="Prename" required />
        </div>
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" id="email1" name="email1" placeholder="Email" required />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" id="password1" name="password1" placeholder="Password" required />
        </div>
        <button type="submit" name="forminscription" class="btn">Sign up </button>
        <p class="social-text">Or Sign up with social platforms</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>New here ?</h3>
        <p>
          Continue by creating a new account.
        </p>
        <button class="btn transparent" id="sign-up-btn">
          Sign up
        </button>
      </div>
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>One of us ?</h3>
        <p>
          Connect to your account.
        </p>
        <button class="btn transparent" id="sign-in-btn">
          Sign in
        </button>
      </div>
    </div>
  </div>
</div>
<script src="../assets/js/master.js"></script>