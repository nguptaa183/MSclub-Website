<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./blog.php">
        <span><img src="./Images/msclublogo.png" width="25" height="25" style="float:left;margin-top:-4px;margin-right:3px;"/></span></a>
      </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags" style="margin-right:3px;"></i>CATEGORIES<i class="fa fa-fw fa-caret-down"></i></a>
            <ul class="dropdown-menu">
              <?php
              $query="SELECT * FROM categories";
              $select_all_categories_query=mysqli_query($connection,$query);
              while($row=mysqli_fetch_assoc($select_all_categories_query)){
                $cat_title=$row['cat_title'];
                $cat_id=$row['cat_id'];

                echo "<li><a href='./category_page.php?category=$cat_id'>$cat_title</a></li>";
              }?>
            </ul>
          </li>

          <?php
          // if(!isset($_SESSION['user_role'])){
          //   if(isset($_GET['p_id'])){
          //     $the_post_id= $_GET['p_id'];
          //     echo "<li><a href='admin/posts.php?source=edit_post&p_id={$the_post_id}'>Edit Post</a></li>";
          //   }
          // }
          ?>

        </ul>
        <form action="search.php" method="post" class="navbar-form navbar-right">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" name="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['user_role'])){
            $name=strtoupper($_SESSION['user_firstname']);
            echo "<li><a href='admin'>Hi {$name}</a></li>";

          }else{
            echo "<li><a href='loginpage.php'><i class='fa fa-user' style='margin-right:4px;'></i>Log In</a></li>";
            echo "<li><a href='registration.php'><i class='fa fa-user-plus' style='margin-right:4px;'></i>Sign Up</a></li>";
          }
          ?>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</div>


