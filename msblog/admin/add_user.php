<?php

if(isset($_POST['create_user'])){

  $user_firstname=$_POST['user_firstname'];
  $user_lastname=$_POST['user_lastname'];
  $user_role=$_POST['user_role'];
  $username=$_POST['username'];
  $user_email=$_POST['user_email'];
  $user_password=$_POST['user_password'];


  $user_firstname=mysqli_real_escape_string($connection,$user_firstname);
  $user_lastname=mysqli_real_escape_string($connection,$user_lastname);
  $username=mysqli_real_escape_string($connection,$username);
  $user_email=mysqli_real_escape_string($connection,$user_email);
  $user_password=mysqli_real_escape_string($connection,$user_password);


  // $user_image=$row['user_image'];
  // $post_comment_count=4;

  //   move_uploaded_file($post_image_temp, "../images/$post_image ");

  $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password ) ";
  $query .= "VALUES('$user_firstname', '$user_lastname', '$user_role', '$username', '$user_email', '$user_password' ) ";

  $create_user_query = mysqli_query($connection, $query);
  if(!$create_user_query){
    die("QUERY FAILED" . mysqli_error($connection));
  }

  echo "<p class='bg-success'>User Created: " . " " . "<a href='users.php'>View Users</a></p> ";

}

?>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title">Firstname</label>
    <input type="text" name="user_firstname" class="form-control">
  </div>

  <div class="form-group">
    <label for="post_status">Lastname</label>
    <input type="text" name="user_lastname" class="form-control">
  </div>

  <div class="form-group">
    <select class="" name="user_role">

      <option value="subscriber">Select Options</option>
      <option value="admin">Admin</option>
      <option value="subscriber">Subscriber</option>

    </select>
  </div>



  <!-- <div class="form-group">
  <label for="post_status">Post Images</label>
  <input type="file" name="image">
</div> -->

<div class="form-group">
  <label for="post_tags">Username</label>
  <input type="text" name="username" class="form-control">
</div>

<div class="form-group">
  <label for="post_content">Email</label>
  <input type="email" name="user_email" class="form-control">
</div>

<div class="form-group">
  <label for="post_content">Password</label>
  <input type="password" name="user_password" class="form-control">
</div>

<div class="form-group">
  <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
</div>

</form>
