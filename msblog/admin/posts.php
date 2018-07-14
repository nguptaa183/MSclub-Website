
<?php include "includes/admin_header.php" ?>


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

          if(isset($_GET['source'])){
            $source=$_GET['source'];

          }
          else {
            $source='';
          }

          switch ($source) {
            case 'add_posts':
            include "add_posts.php";

            break;

            case 'edit_post':
            include "edit_post.php";

            break;

            case '200':
            echo "NICE 200";

            break;

            default:
            include "view_all_posts.php";
            break;
          }

          ?>

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
