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
						echo '<div><div class="alert alert-danger" role="alert"> Error :' .$erreur.'</div></div>';
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
        <a style="margin-top:10px; margin-bottom:10px;" href="forgetpwd.php">Forget Password</a>
        <p class="social-text">Or Sign in with social platforms</p>
        <div class="social-media">
          <a href="#" class="social-icon">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATpJREFUSEu1lYsNwjAMRI9NYBJgE5gEmASYBDYBNoFXJZGbOp8isISCmthn+y7OQn+2xZ/jqwdgI4nfOqxPSXdJr7Dyv2g1gKWkcwhaiwHgVhLrxEoAR0mHGe0j+FUSfiPzAHqDE5QqrZ1ykBwAh0clc4IS5GLO2ITY3wduhiM5wK3R85XT67xiQDg3AdgFUksFkDXZRaNafKK6rB+kD+qyFbR6b/vbSiadtQBIEseSkX3sfSsZsqeKUQWQm6vCgs0BSDzYCjyAEWGF0krCGGJbAO9gD4CXWBJEi+Q4BkjGjgLbSu/euAAMNKr4BcmJrzkXrZfkpCDvJtdGRS9AumQeAN9KGu8BaA672H8PpAVg9xOPcx6cEsBkglqV9DyZcahBXnweGSl8R47uS+ZN04pCv9/qqeD76B/PN4+GURm4OV6aAAAAAElFTkSuQmCC"/>
          </a>
          <a href="#" class="social-icon">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWBJREFUSEu1lY1NAzEMhV83gUkKm8AktJMAkwCTwCZU3ymOXv7ucpXOUlQ1sf38XmLfSQfb6eD8mgF4ksQ6p98/SawfSd9pDetcA3iQ9J6SrhEF7DmBNn4jgIuktx3yAfIpibjCegAvqfId+bPrtQapAZDlN7mj76skAIMNlWL4YSTEj3PuiXNi2FusBvgyzT+ScySM5L3/Lil+jz2AWhoH2JKLx0B8GJe+sHAGNUB22sqeJAtpQ7rlwh3AqyhoTgDg4vJSPQUWAFQQl5cdJpPj1i3QGTjAPQw8PhfvAE7xHoB/Y5sfiAPU3bvnFQ1jHYBGgYVb05nVOXfmjbj6TOMlEEQ3AkiHxvRkz5vNJXXc4oGMRkVMyBgBMTY8Ud1cTfW9UcFe6LklT2/iwpK7y7Y1rkMeRnERaIVEsib5iEEE+AenxyYYNBN0hoH7RHf7BXM+2i8e2sw3ece0aF0PB7gBWc9YGRupb4AAAAAASUVORK5CYII="/>
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
            $security = htmlspecialchars($_POST['security']);
            if (!empty($_POST['name1']) and !empty($_POST['prename1']) and !empty($_POST['email1']) and !empty($_POST['password1']) and !empty($_POST['security'])) {
              $nomlength = strlen($name1);
              $namelength = strlen($prename1);
              if ($namelength <= 255 && $nomlength <= 255) {
                  if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
                    $reqemail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
                    $reqemail->execute(array($email1));
                    $mailexist = $reqemail->rowCount();
                    if ($mailexist == 0) {
                        $insertmbr = $bdd->prepare("INSERT INTO users(nom, prenom, email, password, security) VALUES(?, ?, ?, ?)");
                        $insertmbr->execute(array($name1, $prename1, $email1, $password1, $security));
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
						echo '<div><div role="alert"> Error :' .$erreur.'</div></div>';
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
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="text" id="security" name="security" placeholder="Security: First pet name" required />
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