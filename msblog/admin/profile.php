<?php include "includes/admin_header.php" ?>

<?php

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $query = "SELECT * FROM users WHERE username = '{$username}' ";
  $select_user_profile_query = mysqli_query($connection, $query);

  while ($row=mysqli_fetch_array($select_user_profile_query)) {
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

?>
<div id="wrapper">

  <?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <?php
          if($_SESSION['user_role']=="admin"){
            ?>
            <h1 class="page-header">
              Welcome to admin panel
              <small><?php echo $_SESSION['username'] ?></small>
            </h1>

          <?php }else {
            ?>
            <h1 class="page-header">
              Welcome to subscriber panel
              <small><?php echo $_SESSION['username'] ?></small>
            </h1>

          <?php } ?>

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

            $query = "UPDATE users SET ";
            $query .= "user_firstname='{$user_firstname}', ";
            $query .= "user_lastname='{$user_lastname}', ";
            $query .= "user_role='{$user_role}', ";
            $query .= "username='{$username}', ";
            $query .= "user_email='{$user_email}', ";
            $query .= "user_password='{$user_password}' ";
            $query .= "WHERE username='{$username}' ";

            $edit_user_query=mysqli_query($connection,$query);
            if(!$edit_user_query){
              die("QUERY FAILED" . mysqli_error($connection));
            }


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

            <?php
            if($_SESSION['user_role']=="admin"){
              ?>

              <div class="form-group">
                <select class="" name="user_role">

                  <option value="subscriber"><?php echo $user_role; ?></option>

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

              <?php
            }else{
              ?>
              <div class="form-group">
                <select class="" name="user_role">

                  <option value="subscriber"><?php echo $user_role; ?></option>
                </select>
              </div>

            <?php } ?>


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
            <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
          </div>

        </form>


      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>
