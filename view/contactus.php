<?php
$page_titre = "Contact Us";
include "./includes/header.php";
?>

<section>
    <h6 class="h6mtt">MEET THE TEAM</h6>
    <div class="w3-content w3-display-container cont">

        <div class="profileAla mySlides">
           <div class="profileimage pbi"></div>
        </div>
        <div class="profile-slides mySlides">
           
        </div>
        
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
            style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
        </div>
    </div>
</section>
<?php include './includes/footer.php'; ?>