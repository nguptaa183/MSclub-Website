
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
    $post_content = substr($row['post_content'], 0, 200);
    $post_status = $row['post_status'];


    if ($post_status == 'published') {

        ?>
            <div class="post-slide">
                <img src="http://via.placeholder.com/140x100" alt="">
                <div class="post-date">
                <!-- <span class="month">post_suthor</span> -->
                <span class="date"><?php echo $post_date ?></span>
                </div>
                <h3 class="post-title">
                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
                </h3>

                <div style="text-align:justify; word-wrap: break-word; word-break: break-all;">
                  <p class="post-description">
                  <?php echo $post_content ?>
                    </p>
                </div>

              </p>
              <a href="msblog/post.php?p_id=<?php echo $post_id; ?>" class="read-more">read more
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>


  <!-- blogging cards closed -->

      <?php }}?>

      </div>
        </div>
      </div>
    </div>
  </section>






