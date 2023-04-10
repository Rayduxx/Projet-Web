<?php 
$titre="reclamation";
?>
<main>
    <form action="" method="post">
            <label>Id Reclamation <span color="red" >*</span></label>
            <input type="text" minlength="4" maxlength="8" size="20" placeholder="Id de reclamation" required>
            <label>Type de reclamation <span color="red" >*</span></label>
            <input type="text" minlength="4" maxlength="8" size="20" placeholder="Type de reclamation" required>
            <label>Description de réclamation <span >*</span></label>
            <textarea  name="descriptionRec" rows="3" cols="20" placeholder="Veuillez écrire votre description" required></textarea>
            <button class="buttonS" style="vertical-align:middle" type="submit">Submit</button>
        <button type="reset">Reset</button>
        </form>
        </main>