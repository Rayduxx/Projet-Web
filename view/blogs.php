
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/reclamation.css"> -->
    
    <title>BLOGS</title>
</head>
<body>




    <div class="blog-container">
        <div class="center">
            <form id="f" name="f" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  >
                <div class="inputbox">
                <input type="text" id="Idblog" name="Idblog" required="required">
                <lAbel>ID blog</lAbel>
                </div>
                <div class="inputbox">
                <input type="text" id="username" name="username" required="required">
                <lAbel>username</lAbel>
                </div>
                <div class="inputbox">
                    <textarea id="blogcentent" name="blogcentent" placeholder="blogcentent" ></textarea>
                </div>
                <div class="inputbox">
                  <input type="text" id="titre" name="titre" required="required">
                  <lAbel>titre</lAbel>
                </div>
                <div class="inputbox">
                  <input type="datetime-local" id="dateblog" name="dateblog" required="required">
                  <label>DATE</label>
                </div>
                <div class="inputbox">
                  <input type="text" id="typeblog" name="typeblog" required="required">
                  <span>typeblog</span>
                </div>
                
                <div class="inputbox">
                    <button type="submit"  >Submit</button> 
                 <br>
                 
                    <button type="Reset">Reset</button>
                  </div>
    </div>
    <!-- <script src="../assets/js/reclamation.js"></script> -->
</body>
</html>





<?php
include '../Controller/blogc.php';
include '../Model/blog.php';
$pc = new blogC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $r = new blogm($_POST['idblog'], $_POST['typeblog'], $_POST['blogcentent'], $_POST['titre'], $_POST['username'], $_POST['dateblog']);
    
        $pc->addBlog($r);
       // $pc->addcrud($c);
      }
?>