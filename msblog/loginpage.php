<?php include "includes/db.php";?>
<?php include "includes/header.php";?>
<?php ob_start();?>

<link rel="stylesheet" href="css/content.css">

<!-- navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="./blog.php" style="color: white;">
        <span><img src="./Images/msclublogo.png" width="25" height="25" style="float:left;margin-top:-4px;margin-right:3px;"/></span></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags" style="margin-right:3px;"></i>CATEGORIES<i class="fa fa-fw fa-caret-down"></i></a>
            <ul class="dropdown-menu">
              <?php
$query = "SELECT * FROM categories";
$select_all_categories_query = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];

    echo "<li><a href='./category_page.php?category=$cat_id'>$cat_title</a></li>";
}?>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="registration.php"><i class="fa fa-user-plus" style="margin-right:4px;"></i>Sign Up</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>


  <!-- login -->
  <section id="login">
    <div id="content" class="container">
      <div class="row">
      <div class="col-md-offset-3 col-md-6">
          <div class="form-wrap">
            <div class="jumbotron">
              <h1 class="text-center">Log In</h1>
              <hr>
              <form action="includes/login.php" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input name="username" type="text" class="form-control" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input name="password" type="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-group text-center">
                  <input type="submit" name="login" id="btn-login" class="btn btn-lg btn-success" value="Log In">
                </div>
              </form>
            </div>
</div>
</div>
      </div> 
    </div>
  </section> 

  <?php include "includes/footer.php";?>
