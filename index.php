<?php
$pagename = "Home";
  include('core/connection.php');
  include('inc/header.php');
?>
  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInUp" data-delay="200ms">The hearth of the farm is the true center of our universe.</h2>
                <p data-animation="fadeInUp" data-delay="400ms">Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                  Morbi arcu mi, dictum eu luala, dapibus
                  interdum mollis.</p>
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/7.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInDown" data-delay="200ms">The hearth of the farm is the true center of our universe.</h2>
                <p data-animation="fadeInDown" data-delay="400ms">Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                  Morbi arcu mi, dictum eu luala, dapibus
                  interdum mollis.</p>
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <section class="famie-benefits-area section-padding-100-0 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="benefits-thumbnail mb-50">
            <img src="img/bg-img/2.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="100ms">
            <img src="img/core-img/digger.png" alt="">
            <h5>Best Services</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="300ms">
            <img src="img/core-img/windmill.png" alt="">
            <h5>Farm Experiences</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="500ms">
            <img src="img/core-img/cereals.png" alt="">
            <h5>100% Natural</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="700ms">
            <img src="img/core-img/tractor.png" alt="">
            <h5>Farm Equipment</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="900ms">
            <img src="img/core-img/sunrise.png" alt="">
            <h5>Organic food</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Famie Benefits Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-md-8">
          <div class="about-us-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>About us</p>
              <h2><span>Let Us</span> Tell You Our Story</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum malesuda mina. Donec auctor nislec neque sagittis, sit amet dapibus pellentesque donal feugiat. Nulla mollis magna non
              sanaliquet, volutpat do zutum, ultrices consectetur, ultrices at purus.</p>
            <a href="#" class="btn famie-btn mt-30">Read More</a>
          </div>
        </div>

        <!-- Famie Video Play -->
        <div class="col-12 col-md-4">
          <div class="famie-video-play mb-100">
            <img src="img/bg-img/6.jpg" alt="">
            <!-- Play Icon -->
            <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i class="fa fa-play"></i></a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->


  <!-- ##### Our Products Area Start ##### -->
  <?php include('inc/ourproduct.php'); ?>
  <!-- ##### Our Products Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
  <section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/8.jpg');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="newsletter-content">
            <!-- Section Heading -->
            <div class="section-heading white text-center">
              <p>What we do</p>
              <h2><span>Our Produce</span> Is Mainstay For Us</h2>
              <img src="img/core-img/decor2.png" alt="">
            </div>
            <p class="text-white mb-50 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at diam convallis ligula cursus bibendum sed at enim. Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos
              himenaeos.</p>
          </div>
        </div>
      </div>
      <!-- Newsletter Form -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn famie-btn">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area End ##### -->

  <!-- ##### Farming Practice Area Start ##### -->
  <section class="farming-practice-area section-padding-100-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>Make the green world</p>
            <h2><span>Farming Practices</span> To Preserve Land & Water</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Single Farming Practice Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-farming-practice-area mb-50 wow fadeInUp" data-wow-delay="100ms">
            <!-- Thumbnail -->
            <div class="farming-practice-thumbnail">
              <img src="img/bg-img/9.jpg" alt="">
            </div>
            <!-- Content -->
            <div class="farming-practice-content text-center">
              <!-- Icon -->
              <div class="farming-icon">
                <img src="img/core-img/chicken.png" alt="">
              </div>
              <span>Farming practice for</span>
              <h4>Chicken Farmed For Meat</h4>
              <p>Donec nec justo eget felis facilisis ferme ntum. Aliquam portitor mauris sit amet orci. donec salim...</p>
            </div>
          </div>
        </div>

        <!-- Single Farming Practice Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-farming-practice-area mb-50 wow fadeInUp" data-wow-delay="200ms">
            <!-- Thumbnail -->
            <div class="farming-practice-thumbnail">
              <img src="img/bg-img/10.jpg" alt="">
            </div>
            <!-- Content -->
            <div class="farming-practice-content text-center">
              <!-- Icon -->
              <div class="farming-icon">
                <img src="img/core-img/pig.png" alt="">
              </div>
              <span>Farming practice for</span>
              <h4>Pig Farm Management</h4>
              <p>Donec nec justo eget felis facilisis ferme ntum. Aliquam portitor mauris sit amet orci. donec salim...</p>
            </div>
          </div>
        </div>

        <!-- Single Farming Practice Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-farming-practice-area mb-50 wow fadeInUp" data-wow-delay="300ms">
            <!-- Thumbnail -->
            <div class="farming-practice-thumbnail">
              <img src="img/bg-img/11.jpg" alt="">
            </div>
            <!-- Content -->
            <div class="farming-practice-content text-center">
              <!-- Icon -->
              <div class="farming-icon">
                <img src="img/core-img/cow.png" alt="">
              </div>
              <span>Farming practice for</span>
              <h4>Beef Cattle Farming</h4>
              <p>Donec nec justo eget felis facilisis ferme ntum. Aliquam portitor mauris sit amet orci. donec salim...</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- ##### Farming Practice Area End ##### -->




  <!-- ##### News Area Start ##### -->
  <section class="news-area bg-gray section-padding-100-0">
    <div class="container">
      <div class="row">

        <!-- Featured Post Area -->
        <div class="col-12 col-lg-6">
          <div class="featured-post-area mb-100 wow fadeInUp" data-wow-delay="100ms">
            <img src="img/bg-img/17.jpg" alt="">
            <!-- Post Content -->
            <div class="post-content">
              <h6>Post on <a href="#">18 Aug 2018</a> / <a href="#">Carlos Bacca</a></h6>
              <a href="#" class="post-title">Why innovation is key to maintaining our export market share</a>
            </div>
          </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-lg-6 mb-100">

          <!-- Single Blog Area -->
          <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
            <!-- Post Content -->
            <div class="post-content">
              <h6>Post on <a href="#">18 Aug 2018</a> / <a href="#">Peter Crough</a></h6>
              <a href="#" class="post-title">Rising cattle supplies see beef export lifted</a>
              <p>Maecenas facilisis quam orcit, velo porttitor arcu egestas eu. Maecenas donald imperdiet nibh, quis. Etiam non scelerisque exited sagittis...</p>
            </div>
          </div>

          <!-- Single Blog Area -->
          <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="500ms">
            <!-- Post Content -->
            <div class="post-content">
              <h6>Post on <a href="#">18 Aug 2018</a> / <a href="#">Peter Crough</a></h6>
              <a href="#" class="post-title">Cattle marts: Cows take a hit at the ringside</a>
              <p>Maecenas facilisis quam orcit, velo porttitor arcu egestas eu. Maecenas donald imperdiet nibh, quis. Etiam non scelerisque exited sagittis...</p>
            </div>
          </div>

          </div>
      </div>
    </div>
  </section>
  <!-- ##### News Area End ##### -->
 <?php
include('inc/footer.php');
 ?>