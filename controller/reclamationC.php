<?php

include '../config.php';

class ReclamationC {
    public function listReclamation() {
        $bdd = config::getConnexion();
        try{
          
           $liste =$bdd->query('SELECT * FROM reclamation');//query fusion de prepare,execute et fetch all
           return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function getReclamation($idR)
    {
        $bdd = config::getConnexion();
        try{
          
           $req = $bdd->prepare('SELECT * FROM reclamation WHERE idR=:idR');
           $req->execute([
            'idR' => $idR
        ]);    
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    /*ajout*/
   public function addReclamation($reclamation) {
         $bdd = config::getConnexion();
         try {
            $req = $bdd->prepare('INSERT INTO reclamation VALUES ( :i, :t, :d)');
            $req->execute([
                'i' => $reclamation->getidR(),
                't' => $reclamation->gettypeR(),
                'd' => $reclamation->getdescriptionR(),
               
            ]);

         } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
         }
    }
    /*supp*/
    public function DeleteReclamation($idR) {
        $bdd = config::getConnexion();
        try {
           $query = $bdd->prepare('DELETE FROM reclamation where idR = :idR');
           $query->execute([ 'idR' => $idR]);

        } catch(Exception $e) {
           die('Error: ' . $e->getMessage());
    }  
}
/*modifier*/
public function UpdateReclamation($idR, $reclamation)
{
    $bdd= config::getConnexion();
    try {
       $query = $bdd->prepare('UPDATE reclamation SET idR = :i, typeR = :t, descriptionR = :d where idR = :idR');
       $query->execute([ 'idR' => $idR,
            'i' => $reclamation->getidR(),
            't' => $reclamation->gettypeR(),
            'd' => $reclamation->getdescriptionR(),

    ]);

    } catch(Exception $e) {
       die('Error: ' . $e->getMessage());
}  
}


}


?>