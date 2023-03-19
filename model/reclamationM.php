<?php 
class Reclamation
{
    private int $IdRec;
    private string $typeRec;
    private string $descriptionRec;
     public function __construct($idr,$trec,$drec)
     {
    $this->IdRec=$idr;
    $this->typeRec=$trec;
    $this->descriptionRec=$drec;
     }
     public function GetIdRec()
     {
        return $this->IdRec;
     }
     public function GettypeRec()
     {
        return $this->typeRec;
     }
     public function GetdescriptionRec()
     {
        return $this->descriptionRec;
     }
     
}
?>