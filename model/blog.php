<?php
class blog 
{
    private int $idblog ; 
    private string  $blogcentent; 
    private string  $titre ; 
    private string  $typeblog ; 
    private string  $username ; 
    private date  $dateblog ; 
    
    public function __construct($idb,$titre,$blogc,$username ,$dateblog,$typeblog)
    {
        $this->idblog =$idb ; 
        $this->titre  =$titre ; 
        $this->blogcentent =$blogc ; 
        $this->username  =$username ; 
        $this->dateblog =$dateblog ; 
        $this->typeblog =$typeblog ; 
    }
    public function GetIdBlog()
    {
       return $this->idblog;
    }
    public function Gettitre()
    {
       return $this->titre;
    }
    public function Getblogcentent()
    {
       return $this->blogcentent;
    }
    public function Getusername()
    {
       return $this->username;
    }
    public function Getdate()
    {
       return $this->dateblog;
    }
    public function Gettypeblog()
    {
       return $this->typeblog;
    }
}






?>