<?php include "includes/db.php" ?>

<?php include "includes/header.php" ?>
<link rel="stylesheet" href="css/content.css">

<?php $postauthor=$_SESSION['user_firstname']." ".$_SESSION['user_lastname']; ?>
<?php $authoremail=$_SESSION['user_email']; ?>


<!-- Navigation -->
<?php include "includes/navigation.php" ?>

<!-- Page Content -->
<div id="content" class="container">

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
          

          <div style="text-align:justify; white-space:pre-line; word-wrap: break-word;"><p><?php echo $post_content ?></p></div>

          <hr>

         

        <?php }

      }else{
        header("Location:index.php");
      }
      ?>
</div>
    </div>
     

     



<!-- Blog Comments -->
<div class="row">
      <div class="col-md-6">
      <?php
      if(isset($_POST['create_comment'])){
        $the_post_id = $_GET['p_id'];
        $comment_author = $_POST['comment_author'];
        $comment_email = $_POST['comment_email'];
        $comment_content = $_POST['comment_content'];
        $comment_author=mysqli_real_escape_string($connection,$comment_author);
        $comment_email=mysqli_real_escape_string($connection,$comment_email);
        $comment_content=mysqli_real_escape_string($connection,$comment_content);
        if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)){
          $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
          $query .= "VALUES ($the_post_id, '$comment_author', '$comment_email', '$comment_content', 'approved', now() )";
          $create_comment_query = mysqli_query($connection,$query);
          if(!$create_comment_query){
            die("QUERY FAILED" . mysqli_error($connection));
          }
          $query ="UPDATE posts SET post_comment_count = post_comment_count + 1 ";
          $query .="WHERE post_id = $the_post_id ";
          $update_comment_count = mysqli_query($connection,$query);
          if(!$update_comment_count){
            die("QUERY FAILED" . mysqli_error($connection));
          }
        }
        else {
          echo "<script>alert('Fields cannot be empty')</script>";
        }
      }
      ?>

      <!-- Posted Comments -->
      <h3>Comments</h3><br>

      <?php
      $query ="SELECT * FROM comments WHERE comment_post_id=$the_post_id ";
      $query .="AND comment_status='approved' ";
      $query .="ORDER BY comment_id DESC";
      $select_comment_query=mysqli_query($connection,$query);
      if(!$select_comment_query){
        die("QUERY FAILED" . mysqli_error($connection));
      }
      while($row=mysqli_fetch_assoc($select_comment_query)) {
        $comment_id=$row['comment_id'];
        $comment_date=$row['comment_date'];
        $comment_content=$row['comment_content'];
        $comment_author=$row['comment_author'];
        $comment_email=$row['comment_email'];

        ?>



        <!-- Comment -->
        <div class="media">
          <div class="pull-left">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?php echo $comment_author; ?>
              <small><?php echo $comment_date; ?></small>
            </h4>
            <?php echo $comment_content; ?>
            
            
          </div>
        </div><br>

      <?php } ?>

      <!-- Comments Form -->
      
      <div class="well">
        <h3>Leave a Comment:</h3>
        <form role="form" action="" method="post">
          <div class="form-group">
            <label for="Author">Author</label>
            <input type="text" name="comment_author" class="form-control" value="<?php echo $postauthor; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="Author">Email</label>
            <input type="email" name="comment_email" class="form-control" value="<?php echo $authoremail; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="Author">Your Comment</label>
            <textarea class="form-control" rows="3" name="comment_content" required></textarea>
          </div>
          <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    </div>
  <!-- /.row -->

  

<hr id="hr">
  <?php include "includes/footer.php" ?>
