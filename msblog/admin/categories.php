
<?php include "includes/admin_header.php" ?>


<div id="wrapper">

  <?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to admin
            <small>Author</small>
          </h1>

          <!-- form -->
          <div class="col-xs-6">

            <?php insert_categories(); ?>

            <form action="" method="post">
              <div class="form-group">
                <label for="cat-title">Add Category</label>
                <input type="text" name="cat_title" class="form-control">
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
              </div>
            </form>

            <?php
            //update and include query

            if(isset($_GET['edit'])){
              $cat_id = $_GET['edit'];

              include "includes/update_cat.php";
            }
            ?>

          </div>

          <div class="col-xs-6">

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Title</th>
                </tr>
              </thead>
              <tbody>
                <?php
                //find all categories query
                findallcategories();

                ?>

                <?php
                //Delete query
                deletequery();
                ?>

              </tbody>
            </table>
          </div>
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
