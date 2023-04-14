<?php
require "../config.php";
require "../model/blog.php";
class blogC
{
    // function AjouterBlog()
    // {
    //   $sql="INSERT INTO blog (idblog,titre ,blogcentent,typeblog,username,dateblog)
    //          VALUES (:idblog,:titre,:blogcentent,:typeblog,:username,:dateblog)";
    //          $bdd = config::getConnection();
    //          try{
    //           $ajout=$bdd->query($sql);
    //           return $ajout;
    //          } catch (Exception $e){
    //           die ('Erreur :'. $e->getMessage());
    //          }
    // }
    // function afficherReclamation(){
    //     $sql = "SELECT * FROM reclamation";
    //     $db = config::getConnection();
    //     try{
    //       $affichage = $db->query($sql);
    //       return $affichage;
    //     } catch (Exception $e){
    //       die('Erreur :'. $e->getMessage());
    //     }
    //   }
      public function listBlog() {
        $bdd = config::getConnexion();
        try{
          
           $liste =$bdd->query('SELECT * FROM BLOGS');//query fusion de prepare,execute et fetch all
           return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function getBlogs($idblog)
    {
        $bdd = config::getConnexion();
        try{
          
           $req = $bdd->prepare('SELECT * FROM BLOGS WHERE idblog=:idblog');
           $req->execute(['idblog' => $idblog]);    
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
                            // ADDBLOG \\
    public function addBlog($blog) {
        $bdd = config::getConnexion();
        try {
           $req = $bdd->prepare('INSERT INTO BLOGS VALUES ( :idb, :titre, :blogc,:username,:dateblog,:typeblog)');
           $req->execute([
               'idb' => $reclamation->GetIdBlog(),
               'titre' => $reclamation->Gettitre(),
               'blogc' => $reclamation->Getblogcentent(),
               'username' => $reclamation->Getusername(),
               'dateblog' => $reclamation->Getdate(),
               'typeblog' => $reclamation->Gettypeblog(),   
           ]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
         }
    }
                                // SUPPBLOGS\\
    public function DeleteBlog($idblog) {
      $bdd = config::getConnexion();
        try {
           $query = $bdd->prepare('DELETE FROM BLOGS where idblog = :idblog');
           $query->execute([ 'idblog' => $idblog]);

        } catch(Exception $e) {
           die('Error: ' . $e->getMessage());
        }  
    }




}










?>