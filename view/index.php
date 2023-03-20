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
            <form methode="POST" action="../controller/formulaire.php">
                <label for="anixiety"><input type="checkbox" id="anexiety" name="ch[]" value="anexity" >anexity</label>
                <label for="Alcohol"><input type="checkbox" id="anexiety" name="ch[]" value="Alcohol" >Alcohol</label>
                <label for="addiction and recovery"><input type="checkbox" id="anexiety" name="ch[]" value="addiction and recovery" >addiction and recovery</label>
                <label for="depression"><input type="checkbox" id="anexiety" name="ch[]" value="depression" >depression</label>
                <label for="drug use"><input type="checkbox" id="anexiety" name="ch[]" value="drug use" >drug use</label>
                <label for="eating and body image"><input type="checkbox" id="anexiety" name="ch[]" value="eating and body image" >eating and body image</label>
                <label for="grief and loss"><input type="checkbox" id="anexiety" name="ch[]" value="grief and loss" >grief and loss</label>
                <label for="in crisis"><input type="checkbox" id="anexiety" name="ch[]" value="in crisis" >in crisis</label>
                <label for="mental health care"><input type="checkbox" id="anexiety" name="ch[]" value="mental health care" >mental health care</label>
                <label for="mental illness"><input type="checkbox" id="anexiety" name="ch[]" value="mental illness" >mental illness</label>
                <label for="relationship and family violence"><input type="checkbox" id="anexiety" name="ch[]" value="relationship and family violence" >relationship and family violence</label>
                <label for="stress"><input type="checkbox" id="anexiety" name="ch[]" value="stress" >stress</label>
                <label for="support needs"><input type="checkbox" id="anexiety" name="ch[]" value="support needs" >support needs</label>
                <label for="understanding mental health"><input type="checkbox" id="anexiety" name="ch[]" value="understanding mental health" >understanding mental health</label>
                <label for="understanding wellness"><input type="checkbox" id="anexiety" name="ch[]" value="understanding wellness" >understanding wellness</label>
                <label for="victim support"><input type="checkbox" id="anexiety" name="ch[]" value="victim support" >victim support</label>
               
                
            </form>
            <div class="btns">
                <button type="submit">NEXT</button> 
                <button>pevious</button>
                
            </div>
            
        </div>
    </div>

    <script src="../assets/js/index.js"></script>
</main>
<?php include "./includes/footer.php"; ?>