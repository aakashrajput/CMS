<?php
include ("include/header.php");

if(isset($_GET['post_id'])) {
  $post_id = $_GET['post_id'];
  $query = "SELECT * FROM posts where status = 'publish' and id = $post_id";
  $run = mysqli_query($link,$query);

  if(mysqli_num_rows($run) > 0) {
    $row = mysqli_fetch_array($run);
    $id = $row['id'];
    $date = getdate($row['date']);
    $day = $date['mday'];
    $month = $date['month'];
    $year = $date['year'];
    $title = $row['title'];
    $image = $row['image'];
    $author_image = $row['author_image'];
    $author = $row['author'];
    $categories = $row['categories'];
    $post_data = $row['post_data'];

  }else {
    header('location: index.php');
  }
}
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
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
                <img src="assets/img/<?php echo $author_image; ?>" alt="profile picture" class="img-circle"/>
              </div>
            </div>
            <a href="assets/img/<?php echo $image; ?>"><img src="assets/img/<?php echo $image; ?>" alt="Post Image"></a>
            <p class="desc">
              <?php echo $post_data; ?>
            </p>
            <div class="bottom">
              <span class="first"><i class="fa fa-folder"></i><a href="#"> <?php echo ucfirst($categories); ?></a></span>
              <span class="second"><i class="fa fa-comment"></i><a href="#"> Comments</a></span>
            </div>
          </div>
          <div class="related-posts">
            <h3>Related Posts</h3><hr>
            <div class="row">
              <div class="col-sm-4">
                <a href="#">
                  <img src="assets/img/slider-1.png" alt="Slider one" />
                  <h4>Post One Heading.</h4>
                </a>
              </div>
              <div class="col-sm-4">
                <a href="#">
                  <img src="assets/img/slider-1.png" alt="Slider one" />
                  <h4>Post One Heading.</h4>
                </a>
              </div>
              <div class="col-sm-4">
                <a href="#">
                  <img src="assets/img/slider-1.png" alt="Slider one" />
                  <h4>Post One Heading.</h4>
                </a>
              </div>
            </div>
          </div>
          <div class="author">
            <div class="row">
              <div class="col-sm-3">
                <img src="assets/img/icon.png" class="img-circle" alt="author pic">
              </div>
              <div class="col-sm-9">
                <h4>Indian Charizard</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
          </div>
          <div class="comment">
            <h3>Comments</h3><hr>
            <div class="row single-comment">
              <div class="col-sm-2">
                <img src="assets/img/icon.png" class="img/circle" alt="profie picture">
              </div>
              <div class="col-sm-10">
                <h4>Indian Charizard</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

            <div class="row single-comment">
              <div class="col-sm-2">
                <img src="assets/img/icon.png" class="img/circle" alt="profie picture">
              </div>
              <div class="col-sm-10">
                <h4>Mega Charizard</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

          </div>
          <div class="comment-box">
            <div class="row">
              <div class="col-xs-12">
                <form action="">
                  <div class="form-group">
                    <label for="full-name">Full name:*</label>
                    <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email:*</label>
                    <input type="text" id="full-name" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="comment">Comment:*</label>
                    <textarea name="" id="comment" cols="30" rows="10" placeholder="Your Comment Here"></textarea>
                 </div>
                 <input type="submit" name="submit" class="btn btn-primary" value="submit comment">
                </form>
              </div>
            </div>
          </div>
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
