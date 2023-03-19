<?php 
require "../config.php";
require "../model/reclamationM.php";
//affichage reclamation
function afficherReclamation(){
    $sql = "SELECT * FROM reclamation";
    $db = config::getConnection();
    try{
      $affichage = $db->query($sql);
      return $affichage;
    } catch (Exception $e){
      die('Erreur :'. $e->getMessage());
    }
  }
  //suppression reclamation
  function supprimerReclamation($IdRec){
    $db = config::getConnection();
    $sql = "DELETE FROM reclamation WHERE IdR=:IdRec";

    try {
        $req = $db->prepare($sql);
        $req->bindValue(':IdR', $IdRec);
        $req->execute();
    } catch (PDOException $e) {
        die('Erreur: '.$e->getMessage());
    }
}
//Modification reclamation
function modifierReclamation($IdRec)
{
    $conn = config::getConnexion();
    $sql="UPDATE reclamation SET IdR=:IdRec, TypeR=:TypeR, DescriptionR=:DescriptionR   WHERE IdR=:IdRec";

    try {
        $req = $db->prepare($sql);
        $req->bindValue(':IdR', $IdRec);
        
        $req->bindValue(':IdR', $reclam->GetIdRec());
        $req->bindValue(':typeR', $reclam->GettypeRec());
        $req->bindValue(':descriptionR', $reclam->GetdescriptionRec());
        $req->execute();
    } catch (PDOException $e) {
        die('Erreur: '.$e->getMessage());
    }
}
?>