<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CMS</title>
  <link rel="icon" type="image/png" href="assets/img/favicon-black.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Acme|Anton|Charmonman|Lobster|Pacifico|Srisakdi" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black">
        <a class="navbar-brand" href="#"><img src="assets/img/icon.png" alt="logo" width="70px">Poké</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file"></i> Pages</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Page 1</a>
              <a class="dropdown-item" href="#">Page 2</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list-ul"></i> Categories</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Category 1</a>
              <a class="dropdown-item" href="#">Category 2</a>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html"><i class="fas fa-phone"></i> Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="jumbotron">
      <div class="container">
        <div id="details" class="animated fadeInLeft">
          <h1 style="font-family: 'Pacifico', cursive;">Poké <span>Blog</span></h1>
          <p style="font-family: 'Pacifico', cursive;">Learn wth us all about Pokémon!</p>
        </div>
      </div>
      <img src="http://dualmonitorswallpaper.com/wp-content/uploads/2018/02/multi-monitor-wallpaper-pokemon.png" alt="heading image">
    </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=2weds'></script><div style='overflow:hidden;height:385px;width:100%;'><div id='gmap_canvas' style='height:385px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.net/'>embed google map in website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c518e0cf3f9bbaf6a34283c1aec06a38c3d47c9b'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(28.61559674039671,77.20902120000005),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.61559674039671,77.20902120000005)});infowindow = new google.maps.InfoWindow({content:'<strong>Poke Blog</strong><br>New Delhi<br>110021 Delhi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
            <div class="col-md-12 contact-form">
              <h2>Contact Form</h2>
              <form action="">
                <div class="form-group">
                  <label for="full-name">Full Name:</label>
                  <input type="text" id="full-name" class="form-control" placeholder="Full Name.">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea  class="form-control" placeholder="Your Message here..." id="message" cols="30" rows="10"></textarea>
                </div>

                <input type="submit" name="submit" value="submit" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
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
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="assets/img/favicon.png" alt="img 1"></a>
                  </div>
                  <div class="col-xs-4 details">
                    <a href="#"><h4 class="popularpost-head">This is Heading 4</h4></a>
                    <p class="popularpost-para"> <i class="far fa-clock"></i> 4 Feburary 2018</p>
                  </div>
                </div><!--end-->
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="assets/img/favicon.png" alt="img 1"></a>
                  </div>
                  <div class="col-xs-4 details">
                    <a href="#"><h4 class="popularpost-head">This is Heading 4</h4></a>
                    <p class="popularpost-para"> <i class="far fa-clock"></i> 4 Feburary 2018</p>
                  </div>
                </div><!--end-->
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="assets/img/favicon.png" alt="img 1"></a>
                  </div>
                  <div class="col-xs-4 details">
                    <a href="#"><h4 class="popularpost-head">This is Heading 4</h4></a>
                    <p class="popularpost-para"> <i class="far fa-clock"></i> 4 Feburary 2018</p>
                  </div>
                </div><!--end-->

              </div>
            </div>
            <div class="widgets">
              <div class="popular">
                <h4>Recent Posts</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="assets/img/favicon.png" alt="img 1"></a>
                  </div>
                  <div class="col-xs-4 details">
                    <a href="#"><h4 class="popularpost-head">This is Heading 4</h4></a>
                    <p class="popularpost-para"> <i class="far fa-clock"></i> 4 Feburary 2018</p>
                  </div>
                </div><!--end-->
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="assets/img/favicon.png" alt="img 1"></a>
                  </div>
                  <div class="col-xs-4 details">
                    <a href="#"><h4 class="popularpost-head">This is Heading 4</h4></a>
                    <p class="popularpost-para"> <i class="far fa-clock"></i> 4 Feburary 2018</p>
                  </div>
                </div><!--end-->
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="assets/img/favicon.png" alt="img 1"></a>
                  </div>
                  <div class="col-xs-4 details">
                    <a href="#"><h4 class="popularpost-head">This is Heading 4</h4></a>
                    <p class="popularpost-para"> <i class="far fa-clock"></i> 4 Feburary 2018</p>
                  </div>
                </div><!--end-->

              </div>
            </div><!--widget end-->
            <div class="widgets">
              <div class="popular">
                <h4>Categories</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <ul>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-6">
                    <ul>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
                      <li><a href="">Category</a></li>
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
          </div>
        </div>
      </div>
  </section>
  <footer>
    <div class="container">
      Copyright &copy; by <a href="https://aakashsingh.me/">Aakash Singh</a>. All Right Reserved
    </div>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
</html>
