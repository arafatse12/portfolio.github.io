<?php
 include_once 'includes/header.php';
?>
<body>

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->

  <div id="app">
  <!-- header navigation -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#!" class="left brand-logo"><img src="assets/front/images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <i class="mdi-navigation-more-vert right"></i>
                      </a>
                    </li>
                  </ul>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="assets/front/images/person.png" alt="">
                        </div>
                        <h3>John Doe</h3>
                        <h5>Creative UI/UX Expert</h5>
                      </div>
                    </li><!-- mini profile end-->

                    <li><a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
                    <li><a href="blog-with-sidebar.html"><i class="fa fa-pencil fa-fw"></i>Blog with Sidebar</a>
                    </li>
                    <li><a href="blog.php"><i class="fa fa-pencil fa-fw"></i>Blog Full width</a>
                    </li>
                    <li><a href="single.html"><i class="fa fa-pencil fa-fw"></i>Single Blog</a>
                    </li>
                  </ul>
                  <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li><a href="#">Demo link 1</a>
                    </li>
                    <li><a href="#">Demo link 2</a>
                    </li>
                    <li><a href="#">Demo link 3</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header> <!-- header navigation end -->

    <!-- Banner start -->
    <section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text">
            <div class="col-sm-8 col-md-8 col-lg-8">
              <h2 class="title">BLOG</h2>
              <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
            </div>
          </div>
        </div>
      </div>
    </section> <!--./Banner end-->

    <!-- Blog Post Container-->
    <section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
          <div id="blog-posts" class="clearfix all-blog-post blog-inner without-sidebar">
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="single.html"><img class="activator" src="http://placehold.it/350x200" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="http://tinyurl.com/jdymnat" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article> <!--./single blog post-->

            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <div class="player" id="audio1" data-file-sec="audios/audio.mp3" data-height="40"></div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Audio Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb videoPost">
                      <iframe src="//player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Vimeo Video Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="single.html"><img class="activator" src="http://placehold.it/350x200" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <div class="thumb-slides-container">
                        <img class="activator" src="http://placehold.it/350x200" alt="">
                        <img class="activator" src="http://placehold.it/350x200" alt="">
                        <img class="activator" src="http://placehold.it/350x200" alt="">
                      </div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Slider Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="single.html"><img class="activator" src="http://placehold.it/350x200" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <div class="thumb-slides-container">
                        <img class="activator" src="http://placehold.it/350x200" alt="">
                        <img class="activator" src="http://placehold.it/350x200" alt="">
                        <img class="activator" src="http://placehold.it/350x200" alt="">
                      </div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Slider Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb videoPost">
                      <div class="player" id="video1" data-file-sec="videos/video.mp4" data-image-src="assets/front/images/video-placeholder.png" data-aspectratio="16:9"></div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Video Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb videoPost">
                      <iframe src="https://www.youtube.com/embed/hQfNtnKm5nA" allowfullscreen></iframe>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The YouTube Video Post</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                  <a href="single.html" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
          </div>
        </div>
      </div><!--./container end-->
    </section> <!-- ./Blog Post Container end-->

     <!-- Footer Start-->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>
              </ul>
              <div class="right copyright">
                <p>MaterialX &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> <!-- Footer end-->
  </div> <!--#app end-->

<?php
include_once 'includes/footer.php';
?>