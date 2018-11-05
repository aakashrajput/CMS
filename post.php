<?php
include ("include/header.php");
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <div class="row">
              <div class="col-md-2 post-date">
                <div class="day">16</div>
                <div class="month">Jan</div>
                <div class="year">2019</div>
              </div>
              <div class="col-md-8 post-title">
                <a href="#"><h2>This is demo heading for post one!</h2></a>
                <p>Written By: <span>IndianCharizard</span></p>
              </div>
              <div class="col-md-2 profile-picture">
                <img src="assets/img/icon.png" alt="profile picture" class="img-circle"/>
              </div>
            </div>
            <a href="#"><img src="assets/img/slider-3.png" alt="Post Image"></a>
            <p class="desc">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>

              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>

              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>
            </p>
            <div class="bottom">
              <span class="first"><i class="fa fa-folder"></i><a href="#"> Category</a></span>|
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
