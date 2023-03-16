<?php include './includes/profil_header.php';

if (isset($_POST['formModification'])) {
    if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
        $email = htmlspecialchars($_POST['email']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);

        $namelength = strlen($nom);
        $prenomlength = strlen($prenom);
        if ($namelength <= 255 && $prenomlength <= 255) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $update = $bdd->prepare('UPDATE users SET nom = ?, prenom = ?, email = ? WHERE id = ?');
                $update->execute(array($nom, $prenom, $email, $userinfo['id']));
                $success = "Votre Modification a été effectué avec succés";
                header('Location: ./profil.php');
            } else {
                $erreur = "l'adresse mail saisit n'est pas Valide !";
            }
        } else {
            $erreur = "le nom et prenom depasse les 255 charactéres !";
        }
    } else {
        $erreur = "Veuillez garder tout les champs remplis !";
    }
}
?>
<div class="pacc">
    <div class="pacclabel">
        <p class="pacc-detail boldtext">Name : </p>
        <p class="pacc-detail boldtext">Prename : </p>
        <p class="pacc-detail boldtext">Email : </p>
    </div>
    <div class="paccedit">
        <form method="POST">
            <input type="text" id="nom" class="pacc-input" name="nom" value="<?php echo $userinfo['nom']; ?>"
                required />
            <input type="text" id="prenom" class="pacc-input" name="prenom" value="<?php echo $userinfo['prenom']; ?>"
                required />
            <input type="email" id="email" class="pacc-input" name="email" value="<?php echo $userinfo['email']; ?>"
                required />
        </form>
    </div>
</div>
<button type="submit" name="formModification" class="btneditprofil">Save</button>
<?php include './includes/footer.php'; ?>