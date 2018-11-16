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
    $tags = $row['tags'];
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
              <?php
                $r_query = "SELECT * FROM posts WHERE status = 'publish' and title LIKE '%$title%' LIMIT 3";
                $r_run = mysqli_query($link,$r_query);
                while ($r_row = mysqli_fetch_array($r_run)){
                  $r_id = $r_row['id'];
                  $r_title = $r_row['title'];
                  $r_image = $r_row['image'];
               ?>
              <div class="col-sm-4">
                <a href="post.php?post_id=<?php echo $r_id; ?>">
                  <img src="assets/img/<?php echo $r_image; ?>" alt="Slider one" />
                  <h4><?php echo $r_title; ?></h4>
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="author">
            <div class="row">
              <div class="col-sm-3">
                <img src="assets/img/<?php echo $author_image; ?>" class="img-circle" alt="author pic">
              </div>
              <div class="col-sm-9">
                <h4><?php echo ucfirst($author); ?></h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
          </div>
          <?php
            $c_query = "SELECT * FROM comments WHERE status = 'approve'and post_id = $post_id ORDER BY id DESC";
            $c_run = mysqli_query($link,$c_query);
            if(mysqli_num_rows($c_run) > 0){
          ?>
          <div class="comment">
            <h3>Comments</h3>
            <?php
              while($c_row = mysqli_fetch_array($c_run)){
                $c_id = $c_row['id'];
                $c_name = $c_row['name'];
                $c_username = $c_row['name'];
                $c_image = $c_row['image'];
                $c_comment = $c_row['comment'];
             ?>

            <hr>
            <div class="row single-comment">
              <div class="col-sm-2">
                <img src="assets/img/<?php echo $c_image; ?>" class="img/circle" alt="profie picture">
              </div>
              <div class="col-sm-10">
                <h4><?php echo ucfirst($c_username); ?></h4>
                <p><?php echo $c_comment; ?></p>
              </div>
            </div>
          <?php } ?>
          </div>
        <?php }
        if(isset($_POST['submit'])){
          $cs_name = $_POST['name'];
          $cs_email = $_POST['email'];
          //$cs_website = $_POST['website'];
          $cs_comment = $_POST['comment'];
          $cs_date = time();
          if(empty($cs_name) or empty($cs_email) or empty($cs_comment)){
            $error_msg = "All (*) Fields are required";
          } else {
            $cs_query = "INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `image`, `comment`, `status`) VALUES (NULL, '$cs_date', '$cs_name', 'user', '$post_id', '$cs_email', 'favicon.png', '$cs_comment', 'pending')";
            if(mysqli_query($link,$cs_query)){
              $msg = "Comment Submited and waiting for approval";
              $cs_name = "";
              $cs_email = "";
              //$cs_website = "";
              $cs_comment = "";
            } else {
              $error_msg = "Comment has not been submited";
            }
          }
        }
        ?>
          <div class="comment-box">
            <div class="row">
              <div class="col-xs-12">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="full-name">Full name:*</label>
                    <input type="text" value="<?php if(isset($cs_name)){echo $cs_name;} ?>" id="full-name" name="name" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email:*</label>
                    <input type="text" id="full-name" value="<?php if(isset($cs_email)){echo $cs_email;} ?>"  name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="comment">Comment:*</label>
                    <textarea  id="comment"   cols="30" name="comment" rows="10" placeholder="Your Comment Here"><?php if(isset($cs_comment)){echo $cs_comment;} ?>"</textarea>
                 </div>
                 <input type="submit" name="submit" class="btn btn-primary" value="submit comment">
                 <?php if(isset($error_msg)){
                   echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                 }else if(isset($msg)) {
                    echo "<span style='color:green;' class='pull-right'>$msg</span>";
                 } ?>
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
