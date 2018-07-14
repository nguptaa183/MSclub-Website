<?php

if(isset($_GET['edit_user'])){
  $the_user_id=$_GET['edit_user'];

  $query="SELECT * FROM users WHERE user_id=$the_user_id ";
  $select_users_query=mysqli_query($connection,$query);

  while($row=mysqli_fetch_assoc($select_users_query)){
    $user_id=$row['user_id'];
    $username=$row['username'];
    $user_password=$row['user_password'];
    $user_firstname=$row['user_firstname'];
    $user_lastname=$row['user_lastname'];
    $user_email=$row['user_email'];
    $user_image=$row['user_image'];
    $user_role=$row['user_role'];
  }
}

if(isset($_POST['edit_user'])){

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

  $query = "SELECT randSalt FROM users";
  $select_randsalt_query=mysqli_query($connection,$query);
  if(!$select_randsalt_query){
    die("QUERY FAILED" . mysqli_error($connection));
  }

  $row = mysqli_fetch_array($select_randsalt_query);
  $salt = $row['randSalt'];
  $hashed_password = crypt($user_password,$salt);


  $query = "UPDATE users SET ";
  $query .= "user_firstname='{$user_firstname}', ";
  $query .= "user_lastname='{$user_lastname}', ";
  $query .= "user_role='{$user_role}', ";
  $query .= "username='{$username}', ";
  $query .= "user_email='{$user_email}', ";
  $query .= "user_password='{$hashed_password}' ";
  $query .= "WHERE user_id={$the_user_id} ";

  $edit_user_query=mysqli_query($connection,$query);
  if(!$edit_user_query){
    die("QUERY FAILED" . mysqli_error($connection));
  }

  echo "<p class='bg-success text-center'>User Updated</p>";

}

?>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title">Firstname</label>
    <input type="text" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>">
  </div>

  <div class="form-group">
    <label for="post_status">Lastname</label>
    <input type="text" name="user_lastname" class="form-control" value="<?php echo $user_lastname; ?>">
  </div>

  <div class="form-group">
    <select class="" name="user_role">

      <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>

      <?php
      if($user_role == 'admin'){
        echo "<option value='subscriber'>subscriber</option>";
      }

      else{
        echo "<option value='admin'>admin</option>";
      }

      ?>

    </select>
  </div>

  <!-- <div class="form-group">
  <label for="post_status">Post Images</label>
  <input type="file" name="image">
</div> -->

<div class="form-group">
  <label for="post_tags">Username</label>
  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
</div>

<div class="form-group">
  <label for="post_content">Email</label>
  <input type="email" name="user_email" class="form-control" value="<?php echo $user_email; ?>">
</div>

<div class="form-group">
  <label for="post_content">Password</label>
  <input type="password" name="user_password" class="form-control" value="<?php echo $user_password; ?>">
</div>

<div class="form-group">
  <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
</div>

</form>
