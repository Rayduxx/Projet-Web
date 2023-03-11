<?php include './includes/profil_header.php'; ?>
<div class="pacc">
    <div class="pacclabel">
        <p class="pacc-detail boldtext">Name : </p>
        <p class="pacc-detail boldtext">Prename : </p>
        <p class="pacc-detail boldtext">Email : </p>
        <p class="pacc-detail boldtext">Account type : </p>
        <p class="pacc-detail boldtext">Creation date : </p>
    </div>
    <div class="paccdetails">
        <p class="pacc-detail">
            <?php echo $userinfo['nom']; ?>
        </p>
        <p class="pacc-detail">
            <?php echo $userinfo['prenom']; ?>
        </p>
        <p class="pacc-detail">
            <?php echo $userinfo['email']; ?>
        </p>
        <p class="pacc-detail">
            <?php
            if ($userinfo['typeCompte'] == 0) {
                echo "User";
            } else if ($userinfo['isAdmin'] == 1) {
                echo "Admin";
            } else {
                echo "Agent";
            }
            ?>
        </p>
        <p class="pacc-detail">
            <?php echo date('d/m/Y', strtotime($userinfo['datecreation'])); ?>
        </p>
    </div>
</div>
<?php include './includes/footer.php'; ?>