<?php include "includes/admin_header.php" ?>
<?php ob_start(); ?>


<?php
if(!$connection){
  die("database not connected");
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

        </div>
      </div>
      <!-- /.row -->
      <?php
      if($_SESSION['user_role']=="admin"){
        ?>
        <?php include "admin_widgets.php"; ?>
      <?php } ?>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/admin_footer.php" ?>
