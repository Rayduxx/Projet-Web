<?php
require "../config.php";
require "../model/reclamationM.php";
class blogC
{
    function AjouterBlog()
    {
      $sql="INSERT INTO blog (idblog,titre ,blogcentent,typeblog,username,dateblog)
             VALUES (:idblog,:titre,:blogcentent,:typeblog,:username,:dateblog)";
             $bdd = config::getConnection();
             try{
              $ajout=$bdd->query($sql);
              return $ajout;
             } catch (Exception $e){
              die ('Erreur :'. $e->getMessage());
             }
    }
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





}










?>