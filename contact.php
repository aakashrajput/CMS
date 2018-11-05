<?php
include ("include/header.php");
?>
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
            <?php include ("include/sidebar.php") ?>
        </div>
        </div>
      </div>
  </section>
  <?php
    include ("include/footer.php");
  ?>
