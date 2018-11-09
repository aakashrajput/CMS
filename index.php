<?php
include ("include/header.php");
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/slider-1.png" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slider 1</h5>
                    <p>slider one paragraph</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/slider-2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slider 2</h5>
                    <p>slider two paragraph</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/slider-3.png" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slider 3</h5>
                    <p>Slider 3 paragraph</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <?php

              $query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC";
              $run = mysqli_query($link,$query);
              if(mysqli_num_rows($run) > 0){
                while ($row = mysqli_fetch_array($run)){
                  $id = $row['id'];
                  $date = getdate ($row['date']);
                  $day = $date['mday'];
                  $month = $date['month'];
                  $year = $date['year'];
                  $title = $row['title'];
                  $author = $row['author'];
                  $author_image = $row['author_image'];
                  $categories = $row['categories'];
                  $tags = $row['tags'];
                  $post_data = $row['post_data'];
                  $views = $row['views'];
                  $status = $row['status'];
                  $image = $row['image'];
             ?>

            <div class="post">
              <div class="row">
                <div class="col-md-2 post-date">
                  <div class="day"><?php echo $day; ?></div>
                  <div class="month"><?php echo $month; ?></div>
                  <div class="year"><?php echo $year; ?></div>
                </div>
                <div class="col-md-8 post-title">
                  <a href="post.php?post_id=<?php echo $id; ?>"><h2><?php echo $title; ?></h2></a>
                  <p>Written By: <span><?php echo ucfirst($author); ?></span></p>
                </div>
                <div class="col-md-2 profile-picture">
                  <img src="assets/img/<?php echo $author_image; ?>" alt="profile picture" class="img-circle" />
                </div>
              </div>
              <a href="post.php?post_id=<?php echo $id; ?>"><img src="assets/img/<?php echo $image; ?>" alt="Post Image"></a>
              <p class="desc">
                <?php echo substr($post_data,0,300); ?> .........
              </p>
              <a href="post.php?post_id=<?php echo $id; ?>" class="btn btn-primary">Read More...</a>
              <div class="bottom">
                <span class="first"><i class="fa fa-folder"></i><a href="#"> <?php echo ucfirst($categories); ?></a></span>|
                <span class="second"><i class="fa fa-comment"></i><a href="#"> Comments</a></span>
              </div>
            </div>

            <?php
                }
                 }
                  else {
                    echo "<Center><h2>No Posts Available</h2></center>";
                  }
            ?>

            <center><nav aria-label="..." class="pagination1">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav></center>
        </div>
        <div class="col-md-4">
          <?php include("include/sidebar.php") ?>
          </div>
        </div>
      </div>
  </section>
<?php
  include ("include/footer.php");
?>
