<?php ob_start(); ?>

<?php

$postauthor=$_SESSION['user_firstname']." ".$_SESSION['user_lastname'];

if(isset($_POST['create_post'])){

  $post_title=$_POST['title'];
  $post_author=$_POST['author'];
  $post_category_id=$_POST['post_category_id'];
  $post_status=$_POST['post_status'];

  $post_image=$_FILES['image']['name'];
  $post_image_temp=$_FILES['image']['tmp_name'];

  $post_tags=$_POST['post_tags'];
  $post_content=$_POST['post_content'];
  $post_date=date('d-m-y');
  // $post_comment_count=4;

  move_uploaded_file($post_image_temp, "../Images/$post_image" );

  $post_title=mysqli_real_escape_string($connection,$post_title);
  $post_author=mysqli_real_escape_string($connection,$post_author);
  $post_tags=mysqli_real_escape_string($connection,$post_tags);
  $post_content=mysqli_real_escape_string($connection,$post_content);


  $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status) ";
  $query .= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_status}') ";

  $create_post_query = mysqli_query($connection, $query);
  if(!$create_post_query){
    die("QUERY FAILED" . mysqli_error($connection));
  }

  $the_post_id=mysqli_insert_id($connection);
  echo "<p class='bg-success'>Post Added. <a href='../post.php?p_id={$the_post_id}'>View Posts</a></p>";

}

?>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" name="title" class="form-control" required>
  </div>

  <div class="form-group">
    <select class="" name="post_category_id">
      <?php
      $query="SELECT * FROM categories ";
      $select_categories=mysqli_query($connection,$query);

      if(!$select_categories){
        die("QUERY FAILED" . mysqli_error($connection));
      }

      while($row=mysqli_fetch_assoc($select_categories)){
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];

        echo "<option value='$cat_id'>$cat_title</option>";

      }
      ?>
    </select>
  </div>

  <div class="form-group">
  <label for="title">Post Author</label>
  <input value='<?php echo $postauthor; ?>' type='text' name='author' class='form-control' readonly>
  </div>

  <?php
  if($_SESSION['user_role']=="admin"){
    ?>
    <div class="form-group">
      <select class="" name="post_status">
        <option value="draft">Post Status</option>
        <option value="published">Published</option>
        <option value="draft">Draft</option>
      </select>

    </div>
  <?php }
  else{
    ?>
    <div class="form-group">
      <select class="" name="post_status">
        <option value="draft">Post Status</option>
        <option value="draft">Draft</option>
      </select>

    </div>
  <?php } ?>

  <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" name="image">
  </div>

  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" name="post_tags" class="form-control" placeholder="Tags related to your post title" required>
  </div>

  <div class="form-group">
    <label for="post_content">Post Content</label>
     <textarea name="post_content" class="form-control" rows="10" cols="30" required></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
  </div>

</form>
