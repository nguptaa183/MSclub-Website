<?php include "includes/db.php" ?>

<?php include "includes/header.php" ?>

<!-- Navigation -->
<?php include "includes/navigation.php" ?>

<section class="first">
<div class="mcc">
<h1 class="text-center">Microsoft Campus Club Blog</h1>
<h4 class="text-center">National Institute of Technology, Rourkela</h4>
</div>
</section>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->

    <?php
    $query="SELECT * FROM posts ORDER BY post_id DESC";
    $select_all_posts_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_all_posts_query)){
      $post_id=$row['post_id'];
      $post_title=$row['post_title'];
      $post_author=$row['post_author'];
      $post_date=$row['post_date'];
      $post_image=$row['post_image'];
      $post_content=substr($row['post_content'],0,500);
      $post_status=$row['post_status'];

      if($post_status == 'published'){

        ?>
        <!-- <div class="col-md-6"> -->
        <div class="jumbotron" align="justify" style="margin:20px;">

          <!-- First Blog Post -->
          <h2>
            <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
            <?php
    if($_SESSION['user_role']=="admin"){
      ?>
      <a href="admin/posts.php"><button type="button" class="btn btn-success">View Post</button></a>
      <a href="admin/posts.php?source=edit_post&p_id=<?php echo $post_id; ?>"><button type="button" class="btn btn-warning">Edit Post</button></a>

      
    <?php } ?>
          </h2>
          <p class="lead">
            <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/64x64" alt="" style="margin-right:5px">
            </a> by <a href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author ?></a>
          </p>
          <p><span class="glyphicon glyphicon-time"></span> <?php echo "Posted on " . $post_date ?></p>

          <a href="post.php?p_id=<?php echo $post_id; ?>">
            <img class="img-responsive" src="Images/<?php echo $post_image ?>" alt="" height="auto" width="100%">
          </a>

          <div style="text-align:justify; white-space:pre-line; word-wrap: break-word; word-break: break-all;"><p style="font-size:18px;"><?php echo $post_content ?></p></div>
          <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

          <hr>
        </div>
        <!-- </div> -->

      <?php } }?>

      <!-- </div> -->
    </div>


    <!-- /.row -->

    <hr id="hr">
    <?php include "includes/footer.php" ?>
