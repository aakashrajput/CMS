<div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- widgets close -->

  <div class="widgets">
    <div class="popular">
      <h4>Popular Posts</h4>
      <?php
      $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY views DESC LIMIT 5";
      $p_run = mysqli_query($link,$p_query);
      if(mysqli_num_rows($p_run) > 0){
        while($p_row = mysqli_fetch_array($p_run)){
          $p_id = $p_row['id'];
          $p_date = getdate ($p_row['date']);
          $p_day = $p_date['mday'];
          $p_month = $p_date['month'];
          $p_year = $p_date['year'];
          $p_title = $p_row['title'];
          $p_image = $p_row['image'];
      ?>
      <hr>
      <div class="row">
        <div class="col-xs-4">
          <a href="post.php?post_id=<?php echo $p_id;?>"><img src="assets/img/<?php echo $p_image ?>" alt="img 1"></a>
        </div>
        <div class="col-xs-4 details">
          <a href="post.php?post_id=<?php echo $p_id;?>"><h6 class="popularpost-head"><?php echo $p_title ?></h6></a>
          <p class="popularpost-para"> <i class="far fa-clock"></i><?php echo "$p_day $p_month $p_year";?></p>
        </div>
      </div><!--end-->
    <?php }
      } else{
      echo "<h3>No Post Available</h3>";
    }?>
    </div>
  </div><!--widget end-->
  <div class="widgets">
    <div class="popular">
      <h4>Recent Posts</h4>
      <?php
      $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 5";
      $p_run = mysqli_query($link,$p_query);
      if(mysqli_num_rows($p_run) > 0){
        while($p_row = mysqli_fetch_array($p_run)){
          $p_id = $p_row['id'];
          $p_date = getdate ($p_row['date']);
          $p_day = $p_date['mday'];
          $p_month = $p_date['month'];
          $p_year = $p_date['year'];
          $p_title = $p_row['title'];
          $p_image = $p_row['image'];
      ?>
      <hr>
      <div class="row">
        <div class="col-xs-4">
          <a href="post.php?post_id=<?php echo $p_id;?>"><img src="assets/img/<?php echo $p_image ?>" alt="img 1"></a>
        </div>
        <div class="col-xs-4 details">
          <a href="post.php?post_id=<?php echo $p_id;?>"><h6 class="popularpost-head"><?php echo $p_title ?></h6></a>
          <p class="popularpost-para"> <i class="far fa-clock"></i><?php echo "$p_day $p_month $p_year";?></p>
        </div>
      </div><!--end-->
    <?php }
      } else{
      echo "<h3>No Post Available</h3>";
    }?>
    </div>
  </div><!--widget end-->
  <div class="widgets">
    <div class="popular">
      <h4>Categories</h4>
      <hr>
      <div class="row">
        <div class="col-xs-6">
          <ul>
            <?php
            $c_query = "SELECT * FROM categories";
            $c_run = mysqli_query($link,$c_query);
            if(mysqli_num_rows($c_run) > 0){
              $count = 2;
              while($c_row = mysqli_fetch_array($c_run)){
                $c_id = $c_row['id'];
                $c_category = $c_row['category'];
                $count = $count+1;
                if(($count % 2) == 1){
                    echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";
                }
              }

            } else {
                echo "<p>No Category</p>";
            }
            ?>
          </ul>
        </div>
        <div class="col-xs-6">
          <ul>
            <?php
            $c_query = "SELECT * FROM categories";
            $c_run = mysqli_query($link,$c_query);
            if(mysqli_num_rows($c_run) > 0){
              $count = 2;
              while($c_row = mysqli_fetch_array($c_run)){
                $c_id = $c_row['id'];
                $c_category = $c_row['category'];
                $count = $count+1;
                if(($count % 2) == 0){
                    echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";
                }
              }

            } else {
                echo "<p>No Category</p>"
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div><!--widget end-->

  <div class="widgets">
    <div class="popular">
      <h4>Social Icons</h4>
      <hr>
      <div class="row row2">
        <div class="col-xs-4">
          <a href="#"><i class="fab fa-facebook-f" style="font-size:60px;"></i></a>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-xs-4">
          <a href="#"><i class="fab fa-twitter" style="font-size:60px;"></i></a>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-xs-4">
          <a href="#"><i class="fab fa-instagram" style="font-size:60px;"></i></a>
        </div>
      </div>
    </div>
  </div><!--widget end-->
</div>
