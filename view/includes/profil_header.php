<?php
$page_titre = "Profil";
include 'header.php';
if (!isset($userinfo['id'])) {
    header("Location: ./login.php");
}
?>
<div class="pheader">
    <h2 class="p-w-title">Welcome
        <?php echo $userinfo['nom'];
        echo " ";
        echo $userinfo['prenom']; ?>
    </h2>
    <nav class="pnavbar pnavbar-expand-md pnavbar-light prounded pnav pjustify-content-center ">
        <ul class="pnav pnav-tabs">
            <li class="pnav-item">
            <li><a class="pnav-link" href="./profil.php">Profil</a></li>
            </li>
            <li class="pnav-item">
            <li><a class="pnav-link" href="./profil_edit.php">Edit Profil</a></li>
            </li>
            <?php
            if ($userinfo['isAdmin'] == 1) { ?>
                <li class="pnav-item">
                <li><a class="pnav-link" href="./admin/html/dashboard.php">Admin Dashboard</a></li>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>