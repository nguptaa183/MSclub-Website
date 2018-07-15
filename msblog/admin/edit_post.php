<?php

if(isset($_GET['p_id'])){
  $the_post_id = $_GET['p_id'] ;

}

$query="SELECT * FROM posts WHERE post_id=$the_post_id";
$select_posts_by_id=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($select_posts_by_id)){
  $post_id=$row['post_id'];
  $post_author=$row['post_author'];
  $post_title=$row['post_title'];
  $post_category_id=$row['post_category_id'];
  $post_status=$row['post_status'];
  $post_image=$row['post_image'];
  $post_content=$row['post_content'];
  $post_tags=$row['post_tags'];
  $post_comment_count=$row['post_comment_count'];
  $post_date=$row['post_date'];
}

if(isset($_POST['update_post'])){

  $post_author=$_POST['author'];
  $post_title=$_POST['title'];
  $post_category_id=$_POST['post_category_id'];
  $post_status=$_POST['post_status'];
  $post_image=$_FILES['image']['name'];
  $post_image_temp=$_FILES['image']['tmp_name'];
  $post_content=$_POST['post_content'];
  $post_tags=$_POST['post_tags'];

  move_uploaded_file($post_image_temp, "../Images/$post_image ");

  $post_title=mysqli_real_escape_string($connection,$post_title);
  $post_author=mysqli_real_escape_string($connection,$post_author);
  $post_tags=mysqli_real_escape_string($connection,$post_tags);
  $post_content=mysqli_real_escape_string($connection,$post_content);

  $query = "UPDATE posts SET ";
  $query .= "post_title='{$post_title}', ";
  $query .= "post_category_id='{$post_category_id}', ";
  $query .= "post_date=now(), ";
  $query .= "post_author='{$post_author}', ";
  $query .= "post_status='{$post_status}', ";
  $query .= "post_tags='{$post_tags}', ";
  $query .= "post_content='{$post_content}', ";
  $query .= "post_image='{$post_image}' ";
  $query .= "WHERE post_id={$the_post_id} ";

  $update_post = mysqli_query($connection,$query);
  if(!$update_post){
    die("QUERY FAILED" . mysqli_error($connection));
  }

  echo "<p class='bg-success'>Post Updated. <a href='../post.php?p_id={$the_post_id}'>View Posts</a></p>";

}
?>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title">Post Title</label>
    <input value="<?php echo $post_title; ?>" type="text" name="title" class="form-control">
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
    <input value="<?php echo $post_author; ?>" type="text" name="author" class="form-control" readonly>
  </div>

  <div class="form-group">
    <select class="" name="post_status">
      <option value="<?php echo $post_status; ?>"><?php echo $post_status; ?></option>

      <?php

      if($post_status == 'published'){
        echo "<option value='draft'>Draft</option>";
      }
      else {
        echo "<option value='published'>Published</option>";

      }

      ?>

    </select>
  </div>



  <!-- <div class="form-group">
  <label for="post_status">Post Status</label>
  <input value="" type="text" name="post_status" class="form-control">
</div> -->

<div class="form-group">
  <img src="../Images/<?php echo $post_image; ?>" width="100" alt="">
  <input type="file" name="image">
</div>

<div class="form-group">
  <label for="post_tags">Post Tags</label>
  <input value="<?php echo $post_tags; ?>" type="text" name="post_tags" class="form-control">
</div>

<div class="form-group">
  <label for="post_content">Post Content</label>
  <textarea name="post_content" class="form-control" id="" rows="10" cols="30">
    <?php echo $post_content; ?>
  </textarea>
</div>

<div class="form-group">
  <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
</div>

</form>
