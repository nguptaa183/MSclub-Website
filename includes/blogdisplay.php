
    <!-- Blog Entries Column -->
    <h1 class="title text-center" style="margin: 30px">Blog</h1>
    <!-- blogging cards -->
<section id="blog">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
   

    <?php
$query = "SELECT * FROM posts ORDER BY post_id DESC";
$select_all_posts_query = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_content = substr($row['post_content'], 0, 200);
    $post_status = $row['post_status'];


    if ($post_status == 'published') {

        ?>


          <div class="post-slide">
                    <div class="post-img">
                        <img src="http://via.placeholder.com/140x100" alt="">
                        <!-- <div class="over-layer">
                            <ul class="post-link">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#"><?php echo $post_title ?></a></h3>
                        <ul class="post-info">
                            <li><i class="far fa-comments"></i></li>
                            <li><i class="far fa-clock"></i> <?php echo $post_date ?></li>
                            <li><i class="far fa-user"></i> <?php echo $post_author ?></li>
                        </ul>
                        <div style="text-align:justify; word-wrap: break-word; word-break: break-all;">
                            <p class="post-description">
                                <?php echo $post_content ?>
                            </p>
                        </div>
                        <a href="#" class="read-more">read more <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
 


  <!-- blogging cards closed -->

      <?php }}?>

      </div>
        </div>
      </div>
    </div>
  </section>









              
                