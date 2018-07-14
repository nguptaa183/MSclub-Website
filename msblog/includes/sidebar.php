<div class="col-md-4">


  <!-- Blog Categories Well -->
  <div class="well">

    <?php
    $query="SELECT * FROM categories";
    $select_categories_sidebar=mysqli_query($connection,$query);

    ?>

    <h4>Blog Categories</h4>
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled">
          <?php
          while($row=mysqli_fetch_assoc($select_categories_sidebar)){
            $cat_title=$row['cat_title'];
            $cat_id=$row['cat_id'];

            echo "<li><a href='./category_page.php?category=$cat_id'>
            {$cat_title}
            </a></li>";
          }

          ?>

        </ul>
      </div>

    </div>
    <!-- /.row -->
  </div>


</div>
