<?php
$page_titre = "blogs";
include './includes/header.php';
require_once '../config.php'

?>
<?php
$user_id = $_SESSION['id'];

if(!isset($user_id))
{
   header('location:connection.php ');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/blogs.css">
</head>
<body>
<div class="navbar-blog">
      <ul>
        <li><a href="BLOGS.php">VIEW POSTS </a></li>
        <li><a href="./ADD-BLOGS.php">ADD POSTS</a></li>
      </ul>
    </div>
    <section class="show-posts">

   <h1 class="heading">your posts</h1>

   <div class="box-container">

      <?php
         $select_posts = $bdd->prepare("SELECT * FROM `posts` WHERE user_id = ?");
         $select_posts->execute([$user_id]);
         if($select_posts->rowCount() > 0){
            while($fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC)){
               $post_id = $fetch_posts['id'];

            //    $count_post_comments = $conn->prepare("SELECT * FROM `comments` WHERE post_id = ?");
            //    $count_post_comments->execute([$post_id]);
            //    $total_post_comments = $count_post_comments->rowCount();

            //    $count_post_likes = $conn->prepare("SELECT * FROM `likes` WHERE post_id = ?");
            //    $count_post_likes->execute([$post_id]);
            //    $total_post_likes = $count_post_likes->rowCount();

      ?>
      <form method="post" class="box">
         <input type="hidden" name="post_id" value="<?= $post_id; ?>">
         <?php if($fetch_posts['image'] != ''){ ?>
            <img src="./uploaded_img<?= $fetch_posts['image']; ?>" class="image" alt="">
         <?php } ?>
         <div class="status" style="background-color:<?php if($fetch_posts['status'] == 'active'){echo 'limegreen'; }else{echo 'coral';}; ?>;"><?= $fetch_posts['status']; ?></div>
            <div class="title"><?= $fetch_posts['title']; ?></div>
         <div class="posts-content"><?= $fetch_posts['content']; ?></div>
         <div class="icons">
            <!-- <div class="likes"><i class="fas fa-heart"></i><span><?= $total_post_likes; ?></span></div>
            <div class="comments"><i class="fas fa-comment"></i><span><?= $total_post_comments; ?></span></div> -->
         </div>
         <div class="flex-btn">
            <a href="edit_post.php?id=<?= $post_id; ?>" class="option-btn">edit</a>
            <button type="submit" name="delete" class="delete-btn" onclick="return confirm('delete this post?');">delete</button>
         </div>
         <a href="read_post.php?post_id=<?= $post_id; ?>" class="btn">view post</a>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">no posts added yet! <a href="add_posts.php" class="btn" style="margin-top:1.5rem;">add post</a></p>';
         }
      ?>

   </div>


</section>
</body>
</html>