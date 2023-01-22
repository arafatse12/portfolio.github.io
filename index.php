<?php
include_once 'view/front/includes/header.php';
include_once 'vendor/autoload.php';
use App\admin\About\About;
$object = new About();
$user=$object->index();

?>

<body>

  <!-- Preloader --> 
   <!-- <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>--><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="assets/front/images/" alt="">
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
                            <img src="assets/front/images/pic.jpg" alt="">
                        </div>
                        <h3><?= $user['name']?> </h3>
                        <h5>Creative Web Designer & Developer</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                    </li>
                    <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title"><span>KAZI ARAFAT MIA</span></h1>
                    <h2 class="home-subtitle">WEB DESIGNER & DEVELOPER</h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">My Story</h3>
                <p><?= $user['story']?><br />
               </p>
                <a class="waves-effect waves-light btn-large brand-bg white-text" href="arafat11.pdf"><i class="mdi-content-archive left"></i> Download Resume</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="assets/front/images/pic.jpg" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Personal Information</h3>
                <h5><span>Name :</span> <?= $user['name']?></h5>
                <h5><span>Age :</span> <?= $user['age']?></h5>
                <h5><span>Phone :</span> <?= $user['phone']?></h5>
                <h5><span>Email :</span> <?= $user['email']?></h5>
                <h5><span>Address :</span> <?= $user['address']?></h5>
              </div>

              <div class="about-social">
                <ul>
                  <li>
                    <a href="<?= $user['facebook_url']?>" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="<?= $user['twitter_url']?>" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="<?= $user['google_plus_url']?>" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                   </li>
                  <li>
                    <a href="<?= $user['linkedin_url']?>" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="<?= $user['pinterest_url']?>" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Skills</h2>
                  <p class="regular-text">I am a Software Developer.Develop a dynamic web Application using PHP, MySQL, HTML5,CSS3 and bootstrap</p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">HTML5</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="70%">
                            <div class="skill-visiable">
                              <span class="skill-title">CSS3</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">70%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="75%">
                            <div class="skill-visiable">
                              <span class="skill-title">OOP-PHP</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">75%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="50%">
                            <div class="skill-visiable">
                              <span class="skill-title">BOOTSTRAP</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">50%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="25%">
                            <div class="skill-visiable">
                              <span class="skill-title">JAVASCRIPT</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">25%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="30%">
                            <div class="skill-visiable">
                              <span class="skill-title">LARAVEL</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">30%</span>
                        </div>
                      </div>
                    </div>
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="40%">
                            <div class="skill-visiable">
                              <span class="skill-title">WORDPRESS</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">40%</span>
                        </div>
                      </div>
                    </div>


                </div>
              </div>

            </div>
          </div>
          <div class="btn-wrapp skl-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>

      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">Experience</h2>
                      <p class="regular-text">I am a Software Developer at Savvy Techmart to(1st July 2017-till now).</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">July 2017 - Present</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="http://placehold.it/400x300" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Software Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Just sit right back and you'll hear a tale a tale of a fateful trip started from this tropic port aboard this tiny ship. Love exciting and new.</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Software Developer<i class="mdi-navigation-close right"></i></span>
                                  <p>http://www.savvytechmart.com/</p>
                                </div>
                                <p class="rev-content">
                                    Just sit right back and you'll hear a tale a tale of a fateful trip started from this tropic port aboard this tiny ship. Love exciting and new.                                </p>
                              </div>
                            </div>
                          </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp exp-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
              </div>
            </div>
          </div>
      </section>

      <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
          <div class="row">
            <div class="education-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head education-text">
                    <div class="col-sm-12">
                      <h2 class="title">Education</h2>
                      <p class="regular-text">I am Kazi Arafat Mia,I have completed SSC in 2009 at Shibchar Nandakumar Institution(NKI).Also completed to HSC in 2011 at BCIC College.And also completed to B.SC. in CSE in 2016 at Bangladesh University of Business and Technology(BUBT) </p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper">

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2012 - 2016</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="http://placehold.it/400x300" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text"> B.Sc. in CSE<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Bangladesh University of Business and Technology(BUBT)</p>
                              </div>
                              <!-- Reveal content-->
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">B.Sc. in CSE<i class="mdi-navigation-close right"></i></span>
                                  <p>Bangladesh University of Business and Technology(BUBT)</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education end -->

                          <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2009 - 2011</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="http://placehold.it/400x300" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">HSC<i class="mdi-navigation-more-vert right"></i></span>
                                <p>BCIC College</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">HSC<i class="mdi-navigation-close right"></i></span>
                                  <p>BCIC College</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2009</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="http://placehold.it/400x300" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">SSC<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Shibchar Nandakumar Institution(NKI)</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">SSC<i class="mdi-navigation-close right"></i></span>
                                  <p>Shibchar Nandakumar Institution(NKI)</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="title">PORTFOLIO</h2>
                <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                  <li class="active"><a href="#" data-target="*">All</a>
                  </li>
                  <li><a href="#" data-target=".category-1">Art</a>
                  </li>
                  <li><a href="#" data-target=".category-2">Accessories</a>
                  </li>
                  <li><a href="#" data-target=".category-3">Design</a>
                  </li>
                  <li><a href="#" data-target=".category-4">Fashion</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
      </div>
      <div id="portfolioModal" class="modal white">
        <div class="model-img"></div>
        <div class="modal-content">
          <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
          <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
        </div>

        <div class="modal-footer">
          <a href="http://tinyurl.com/jdymnat" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
          <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
        </div>
      </div>

      <div class="portfolio-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="protfolio-msnry">
              
              <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-3">
                  <a href="http://savvytechmart.com/Clippingpath/Clipping/views/index.php"  data-image-source="http://savvytechmart.com/Clippingpath/Clipping/views/index.php" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="http://savvytechmart.com/Clippingpath/Clipping/views/index.php"> <!-- Portfolio pop-up content-->
                    <div class="protfolio-image">
                      <img src="1.png" alt="portfolio"> <!-- portfolio thumbnail-->
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Clipping_path </h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-2 category-1">
                  <a href="#" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="On going" data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="3.PNG" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Trip Planner</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-2">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="http://placehold.it/390x280" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-3">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="http://placehold.it/390x280" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-3 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="http://placehold.it/390x280" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-2 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="http://placehold.it/390x280" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

              </ul>
              <!-- portfolio load more button-->
              <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="fa fa-file"></i>
                      <span class="num countNumb">100</span>
                    </div>
                    <div class="context">Files</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-travel"></i>
                      <span class="num countNumb">10</span>
                    </div>
                    <div class="context">Project Completed</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="fa fa-line-chart"></i>
                      <span class="num countNumb">10000</span>
                    </div>
                    <div class="context">Line Codes</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
          </div>
        </div>

      </div>  <!-- .container end -->
    </div>
    </section>

    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
                    <p class="regular-text">Software Developer</p>
                    <ul class="clearfix contact-info">
                      <li><a href="">44/7/A & 44/7/B, Karim Tower (3rd floor)
							West Panthapath, Dhaka-1205, Bangladesh</a>
                      </li>
					  <li><a href="">+88029121292</a>
                      </li>
                      <li><a href="http://savvytechmart.com">Savvy Techmart</a>
                      </li>
                    </ul>
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
                  <div class="col-sm-7">
                      <section class="google-maps-area">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8700508915763!2d90.38311731498138!3d23.752012984588465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d843d4e0b3007c5!2sSavvy+Techmart!5e0!3m2!1sen!2s!4v1470206553062" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                      </section>

                  </div>

                <!-- Contact Form start -->
                  <div class="col-sm-5">
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form action="store.php" method="post">
                        <div class="input-field">
                          <input id="contact_name" type="text" name="contactName" class="validate input-box" required>
                          <label for="contact_name"  class="input-label">Name</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="contactEmail" class="validate input-box" required >
                          <label for="email" class="input-label" >Email</label>
                        </div>
                        <div class="input-field">
                          <input id="subject" type="text" name="contactSubject" class="validate input-box" required>
                          <label for="subject"  class="input-label">Subject</label>
                        </div>
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;" required></textarea>
                          <label for="textarea1"  class="input-label">Message</label>
                        </div>
                        <div class="input-field">
                          <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="<?= $user['facebook_url']?>" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="<?= $user['linkedin_url']?>" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="<?= $user['twitter_url']?>" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="<?= $user['google_plus_url']?>" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="<?= $user['pinterest_url']?>" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>Arafat2017 &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->

<?php
include_once 'view/front/includes/footer.php'
?>