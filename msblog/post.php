<?php include "includes/db.php" ?>

<?php include "includes/header.php" ?>
<link rel="stylesheet" href="css/content.css">


<!-- Navigation -->
<?php include "includes/navigation.php" ?>

<!-- Page Content -->
<div id="content" class="container" align="justify">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-lg-12">
      <?php

      if(isset($_GET['p_id'])){
        $the_post_id = $_GET['p_id'];

        $view_query ="UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = $the_post_id ";
        $send_query = mysqli_query($connection,$view_query);
        if(!$send_query){
          die("QUERY FAILED" . mysqli_error($connection));
        }

        $query="SELECT * FROM posts WHERE post_id = $the_post_id ";
        $select_all_posts_query=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_all_posts_query)){
          $post_id=$row['post_id'];
          $post_title=$row['post_title'];
          $post_author=$row['post_author'];
          $post_date=$row['post_date'];
          $post_image=$row['post_image'];
          $post_content=$row['post_content'];

          ?>

          <!-- First Blog Post -->
          <h2>
          <a href="#"><?php echo $post_title ?></a>
            <?php
    if($_SESSION['user_role']=="admin"){
      ?>
      <a href="admin/posts.php"><button type="button" class="btn btn-success">View Post</button></a>
    <?php } ?>
          </h2>
          <p class="lead">
            <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/64x64" alt="" style="margin-right:5px">
            </a> by <a href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author ?></a>
          </p>
          <p><span class="glyphicon glyphicon-time"></span> <?php echo "Posted on " . $post_date ?></p>
          
          <hr>
          <img class="img-responsive" src="Images/<?php echo $post_image ?>" alt="">
          

          <div style="text-align:justify; white-space:pre-line;"><p><?php echo $post_content ?></p></div>

          <hr>

         

        <?php }

      }else{
        header("Location:index.php");
      }
      ?>

     

     



      <!-- Posted Comments -->
     


      
    </div>
    </div>

  

  </div>
  <!-- /.row -->

<hr id="hr">
  <?php include "includes/footer.php" ?>
