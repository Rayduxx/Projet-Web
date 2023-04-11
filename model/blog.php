<?php
class blog 
{
    private int $idblog ; 
    private string  $blogcentent; 
    private string  $titre ; 
    private string  $typeblog ; 
    private string  $username ; 
    private date  $dateblog ; 
    
<<<<<<< Updated upstream
    public function __construct($idb,$titre,$blogc,$username ,$dateblog,$typeblog)
=======
    public function __constructor ($idb=null,$titre=null,$blogc=null,$username=null ,$dateblog=null,$typeblog=null)
>>>>>>> Stashed changes
    {
        $this->idblog =$idb ; 
        $this->titre  =$titre ; 
        $this->blogcentent =$blogc ; 
        $this->username  =$username ; 
        $this->dateblog =$dateblog ; 
        $this->typeblog =$typeblog ; 
    }
<<<<<<< Updated upstream
=======
    public function __construct(int $idb,string $titre,string $blogc,string $username ,date $dateblog,string $typeblog)
    {
        $this->idblog =$idb ; 
        $this->titre  =$titre ; 
        $this->blogcentent =$blogc ; 
        $this->username  =$username ; 
        $this->dateblog =$dateblog ; 
        $this->typeblog =$typeblog ; 
    }
    // getters
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
    // setter
    public function setidblog(int $idblog)
    {
         $this->idblog=$idblog;
    }
    public function settitre(string $titre)
    {
         $this->titre=$titre;
    }
    public function setblogcentent(string $blogcentent)
    {
         $this->blogcentent=$blogcentent;
    }
    public function setusername(string $username)
    {
         $this->username=$username;
    }
    public function setdate(date $dateblog)
    {
         $this->dateblog=$dateblog;
    }
    public function settypeblog(string $typeblog)
    {
         $this->typeblog=$typeblog;
    }

    
>>>>>>> Stashed changes
}






?>