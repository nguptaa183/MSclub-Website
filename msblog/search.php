<?php include "includes/db.php" ?>

<?php include "includes/header.php" ?>
<link rel="stylesheet" href="css/content.css">


<!-- Navigation -->
<?php include "includes/navigation.php" ?>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div id="content" class="col-lg-12">

      <?php

      if(isset($_POST['submit'])){
        $search = $_POST['search'];

        $search=mysqli_real_escape_string($connection,$search);


        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
        $search_query = mysqli_query($connection,$query);
        if(!$search_query){
          die("query failed" . mysqli_error($connection));
        }

        $count=mysqli_num_rows($search_query);
        if($count == 0){
          echo "<h1> NO RESULT</h1>";
        }
        else {

          while($row=mysqli_fetch_assoc($search_query)){
            $post_title=$row['post_title'];
            $post_author=$row['post_author'];
            $post_date=$row['post_date'];
            $post_image=$row['post_image'];
            $post_content=$row['post_content'];

            ?>


            <!-- First Blog Post -->
            <div class="jumbotron">

              <h2>
                <a href="#"><?php echo $post_title ?></a>
              </h2>
              <p class="lead">
                by <a href="index.php"><?php echo $post_author ?></a>
              </p>
              <p><span class="glyphicon glyphicon-time"></span> <?php echo "Posted on " . $post_date ?></p>

              <img class="img-responsive" src="Images/<?php echo $post_image ?>" alt="">

              <p><?php echo $post_content ?></p>
              <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

              <hr>
            </div>

          <?php }
        }

      }
      ?>

    </div>




  </div>
  <!-- /.row -->

  <hr>
  <?php include "includes/footer.php" ?>
