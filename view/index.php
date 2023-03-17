<?php
$page_titre = "Accueil";
include "./includes/header.php";
?>
<main>
    <div class="contents">
        <div class="overlay">
            <img src="../assets/img/logo.png" class="hlogo">
            <h1>MIND ZONE</h1>
        </div>
        <div class="wellbeingtabs">
            <!-- <img src="../assets/img/wellbeingtab.svg" alt="Wellbeing" class="wellbeingtab"> -->
            <button id="monbouton"><h2>MIND ZONE</h2></button>
        </div>
    </div>
    <div class="contents2">
        <div class="wb-contents" id ="monelement">
            <div class="step1">
                <h2>We take care of our guests <br> MINDZOE is here for you , <br> whats are your problems ?</h2>
            </div>
            <form methode="post">
                <label for="anixiety"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >anexity</label>
                <label for="Alcohol"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >Alcohol</label>
                <label for="addiction and recovery"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >addiction and recovery</label>
                <label for="depression"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >depression</label>
                <label for="drug use"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >drug use</label>
                <label for="eating and body image"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >eating and body image</label>
                <label for="grief and loss"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >grief and loss</label>
                <label for="in crisis"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >in crisis</label>
                <label for="mental health care"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >mental health care</label>
                <label for="mental illness"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >mental illness</label>
                <label for="relationship and family violence"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >relationship and family violence</label>
                <label for="stress"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >stress</label>
                <label for="support needs"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >support needs</label>
                <label for="understanding mental health"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >understanding mental health</label>
                <label for="understanding wellness"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >understanding wellness</label>
                <label for="victim support"><input type="checkbox" id="anexiety" name="maCheckbox" value="valeur1" >victim support</label>
               
                
            </form>
            <div class="btns">
                <button>next</button>
                <button>pevious</button>
                
            </div>
            
        </div>
    </div>

    <script src="../assets/js/index.js"></script>
</main>
<?php include "./includes/footer.php"; ?>