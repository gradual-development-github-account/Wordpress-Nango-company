<?php
/*
Template Name: About page
*/
?>

<?php get_template_part('template-parts/head-page'); ?>


<div class="theme  components  template-parts  pages  page-2
            theme  components  template-parts  page-about
            theme  modificators  containers  fullscreen
            vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-space-between">

  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/headers/header-2', $part_name = 'header-2' ); ?>
  </div>

  <main class="theme  modificators  containers  full-width">

    <section class="theme  modificators  sections  section-1">
      <div class="vendor  components  flexboxgrid  container-1200
                  vendor modificators  flexboxgrid  container--center">
        <div class="vendor  components  flexboxgrid  row">
          <div class="vendor  components  flexboxgrid  col  col-xs-12">
            <div class="">
              <h1 class="theme  components  titles  titles-with-line  titles-with-line-1
                         theme  modificators  fonts  font-family-4  fonts-titles--lg
                         theme  modificators  margins  margin-title--sm">
                <span class="text">About us</span>
                <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
              </h1>
              <p class="theme  modificators  fonts  font-family-3  fonts-titles--xs-up">Who we are</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="theme  modificators  sections  section-1">
      <div class="vendor  components  flexboxgrid  container-1200
                  vendor modificators  flexboxgrid  container--center">
        <div class="vendor  components  flexboxgrid  row">
          <div class="vendor  components  flexboxgrid  col  col-md-6">

            <div class="page-about__image-about  
                        theme  components  images  image-wrapper
                        theme  components  containers  relative-container">
              <img class="theme  modificators  images  image--max-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/pages/about/images/about-1-vertical_01.jpg'; ?>" alt="alt">
              <svg class="theme  components  images-frame  image-frame-1
                          theme  components  containers  absolute-container
                          theme  modificators  containers  containers--absolute-alignment
                          theme  modificators  gradients  svg-stroke-gradient-1">
                <linearGradient class="svg-gradient">
                  <stop class="svg-gradient--start" offset="0%" stop-color=""></stop>
                  <stop class="svg-gradient--end" offset="100%" stop-color=""></stop>
                </linearGradient>
                <rect class="svg-path  image-frame-1__path"
                      width="100%"  height="100%"></rect>
              </svg>
            </div>

          </div>


          <div class="vendor  components  flexboxgrid  col  col-md-6">
            <h2 class="theme  modificators  fonts  font-family-3  fonts-titles--md
                       theme  modificators  margins  margin-title--md-1">
              The Most Creative <br>
              and Quality for Your Project
            </h2>
            <p class="theme  modificators  fonts  fonts-paragraph--justify
                      theme  modificators  fonts  fonts-paragraphs--md">
              Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
            </p>

            <!-- Swiper -->
            <div class="vendor  components    swiper-slider  swiper-container
                        js-swiper-slider-tabs-1">
              <!-- Swiper Pagination -->
              <div class="page-about__tabs
                          vendor  components  swiper-pagination
                          vendor  components  swiper-pagination-2
                          theme  modificators  fonts  font-family-3  fonts-tab-headers-md--up
                          js-swiper-slider-tabs-1__pagination"></div>
              <!-- Swiper Slides -->
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <p class="theme  modificators  fonts  fonts-paragraph--justify">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                  </p>
                </div>
                <div class="swiper-slide">
                  <p class="theme  modificators  fonts  fonts-paragraph--justify">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                  </p>
                  <p class="theme  modificators  fonts  fonts-paragraph--justify">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                  </p>
                </div>
                <div class="swiper-slide">
                  <p class="theme  modificators  fonts  fonts-paragraph--justify">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                  </p>
                  <p class="theme  modificators  fonts  fonts-paragraph--justify">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                  </p>
                  <p class="theme  modificators  fonts  fonts-paragraph--justify">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                  </p>
                </div>               
              </div>
              <!-- Swiper Tab titles -->
              <div style="display: none;">
                <span class="js-swiper-slider-tabs-1__pagination-title">Who we are desc</span>
                <span class="js-swiper-slider-tabs-1__pagination-title">History desc</span>
                <span class="js-swiper-slider-tabs-1__pagination-title">Our servicies desc</span>
              </div>
            </div>
            <!-- Swiper -->
            
          </div>
        </div>
      </div>
    </section>


    <section class="theme  modificators  sections  section-1">
      <div class="vendor  components  flexboxgrid  container-fluid">
        <div class="vendor  components  flexboxgrid  row">
          <div class="vendor  components  flexboxgrid  col  col-xs-12">

            <div class="theme  components  video-contents  video-content-1">
              <video
                  class="video-content-1__video"
                  preload="auto"
                  poster=""
                  data-setup='{}'>
                <source src="<?php echo get_template_directory_uri() . '/sources/theme/video/sample-1-avito.mp4' ?>" type="video/mp4">
                </source>
              </video>
              <div class="video-content-1__controls">
                <button class="theme  modificators  gradients  button-gradient-1
                               controls__button-play-pause" type="button"
                        onclick="playPause( this )">
                  <svg class="button__icon  button__icon--play  active
                              theme  modificators  gradients  svg-fill-gradient-1"
                       viewBox="0 0 32 32">
                    <linearGradient class="svg-gradient">
                      <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                      <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                    </linearGradient>
                    <title>play-alt-1</title>
                    <path class="page-about__video-button-icon  svg-path" fill="#000000"
                          d="M0 15.995c-0.015 9.291 7.706 15.937 16.011 15.803 8.194 0.127 15.974-6.399 15.989-15.756 0.014-9.26-7.597-15.683-15.701-15.831-8.498-0.155-16.284 6.466-16.299 15.784zM13.034 8.708c3.621 2.22 7.218 4.424 10.856 6.655 0.63 0.386 0.634 1.304 0.005 1.69l-10.862 6.661c-0.659 0.405-1.507-0.070-1.507-0.844v-13.319c-0.001-0.773 0.849-1.247 1.508-0.842z"></path>
                  </svg>
                  <svg class="button__icon  button__icon--pause
                              theme  modificators  gradients  svg-fill-gradient-1"
                       viewBox="0 0 32 32">
                    <linearGradient class="svg-gradient">
                      <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                      <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                    </linearGradient>
                    <title>pause</title>
                    <path class="svg-path" fill="#000000"
                          d="M16 0c-8.836 0-16 7.164-16 16s7.164 16 16 16 16-7.164 16-16-7.162-16-16-16zM13.493 20.929c0 0.99-0.803 1.793-1.793 1.793s-1.793-0.803-1.793-1.793v-9.915c0-0.99 0.803-1.793 1.793-1.793s1.793 0.803 1.793 1.793v9.915zM21.826 20.929c0 0.99-0.803 1.793-1.793 1.793s-1.793-0.803-1.793-1.793v-9.915c0-0.99 0.803-1.793 1.793-1.793s1.793 0.803 1.793 1.793v9.915z"></path>
                  </svg>
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="theme  modificators  sections  section-1">
      <div class="vendor  components  flexboxgrid  container-1200
                  vendor modificators  flexboxgrid  container--center">
        <div class="vendor  components  flexboxgrid  row">
          <div class="vendor  components  flexboxgrid  col  col-md-6">
            <div class="page-about__gallery
                        vendor  components  flexboxgrid  row">

              <?php 
              $our_team_gallery = rwmb_meta( 'nango_about_team-gallery', array(), get_the_ID() );

              if ( !empty( $our_team_gallery ) ) {
                  foreach ( $our_team_gallery as $image ) {
              ?>

              <div class="page-about__gallery-cols
                          vendor  components  flexboxgrid  col  col-md-6">
                <div class="page-about__gallery-image
                            theme  components  images-with-hover  images-with-hover-1">
                  <div class="page-about__gallery-image  image-wrapper
                              images-with-hover-1__image-wrapper">
                    <img class="images-with-hover-1__image
                                theme  modificators  images-with-hover  image--full-width" src="<?php echo esc_url( $image['full_url'] ) ?>" alt="alt">
                  </div>
                  <div class="page-about__gallery-image  page-hover-block
                              images-with-hover-1__hover-block">
                    <div class="page-about__gallery-image  page-hover-block__mask
                                hover-block__mask
                                theme  modificators  gradients  background-gradient-1"></div>
                    <div class="page-about__gallery-image  page-hover-block__text
                                hover-block__text
                                vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-center  container--align-items-center">
                      <b class="page-about__gallery-image  page-hover-block__text  page-text__title
                                theme  modificators  titles  title--block
                                theme  modificators  fonts  font-family-4  fonts-titles--xs">Edward Gray</b>
                      <span class="page-about__gallery-image  page-hover-block__text  page-text__sub-title
                                   theme  modificators  titles  title--block">Designer</span>
                      <div>
                        <a class="page-about__gallery-image  page-hover-block__text  page-icons
                                  theme  components  containers  inline-block-container" href="#">
                          <svg class="theme  modificators  gradients  svg-fill-gradient-2"
                               width="25px"  height="25px"  x="0px"  y="0px"
                               viewBox="0 0 56.693 56.693"
                               style="enable-background:new 0 0 56.693 56.693;">
                            <linearGradient class="svg-gradient">
                              <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                              <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                            </linearGradient>
                            <path class="svg-path"  fill="#111111"  d="M54.082,15.5495c-1.8115,0.8047-3.7597,1.3477-5.8051,1.5913c2.0874-1.25,3.6894-3.2305,4.4443-5.5918
                              c-1.9531,1.1587-4.1152,2-6.418,2.4536c-1.8432-1.9643-4.4702-3.1919-7.3769-3.1919c-5.5816,0-10.1069,4.5254-10.1069,10.107
                              c0,0.792,0.0893,1.563,0.2617,2.3027c-8.3999-0.4209-15.8477-4.4443-20.8325-10.5596c-0.8697,1.4922-1.3682,3.2281-1.3682,5.0811
                              c0,3.5063,1.7842,6.5996,4.4961,8.4126c-1.6563-0.0532-3.2154-0.5073-4.5777-1.2647c-0.0009,0.042-0.0009,0.0845-0.0009,0.128
                              c0,4.896,3.4839,8.9809,8.1079,9.9101c-0.8482,0.2305-1.7412,0.3545-2.6631,0.3545c-0.6519,0-1.2847-0.063-1.9019-0.1816
                              c1.2867,4.0151,5.0191,6.9375,9.441,7.019c-3.459,2.711-7.8165,4.3267-12.5523,4.3267c-0.8154,0-1.6196-0.0484-2.4106-0.1411
                              c4.4736,2.8681,9.7856,4.541,15.4931,4.541c18.5908,0,28.7559-15.4009,28.7559-28.7569c0-0.4375-0.0088-0.8745-0.0283-1.3076
                              C51.0137,19.3571,52.728,17.5769,54.082,15.5495z"/>
                          </svg>
                        </a>
                        <a class="page-about__gallery-image  page-hover-block__text  page-icons
                                  theme  components  containers  inline-block-container" href="#">
                          <svg class="theme  modificators  gradients  svg-fill-gradient-2"
                               width="25px"  height="25px"  x="0px"  y="0px"
                               viewBox="0 0 56.693 56.693"
                               style="enable-background:new 0 0 56.693 56.693;">
                            <linearGradient class="svg-gradient">
                              <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                              <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                            </linearGradient>
                            <path class="svg-path"  fill="#111111"  d="M49.265,4.667H7.145c-2.016,0-3.651,1.596-3.651,3.563v42.613c0,1.966,1.635,3.562,3.651,3.562h42.12
                            c2.019,0,3.654-1.597,3.654-3.562V8.23C52.919,6.262,51.283,4.667,49.265,4.667z M18.475,46.304h-7.465V23.845h7.465V46.304z
                             M14.743,20.777h-0.05c-2.504,0-4.124-1.725-4.124-3.88c0-2.203,1.67-3.88,4.223-3.88c2.554,0,4.125,1.677,4.175,3.88
                            C18.967,19.052,17.345,20.777,14.743,20.777z M45.394,46.304h-7.465V34.286c0-3.018-1.08-5.078-3.781-5.078
                            c-2.062,0-3.29,1.389-3.831,2.731c-0.197,0.479-0.245,1.149-0.245,1.821v12.543h-7.465c0,0,0.098-20.354,0-22.459h7.465v3.179
                            c0.992-1.53,2.766-3.709,6.729-3.709c4.911,0,8.594,3.211,8.594,10.11V46.304z"/>
                          </svg>
                        </a>
                        <a class="page-about__gallery-image  page-hover-block__text  page-icons
                                  theme  components  containers  inline-block-container" href="#">
                          <svg class="theme  modificators  gradients  svg-fill-gradient-2"
                               width="25px"  height="25px"  x="0px"  y="0px"
                               viewBox="0 0 56.693 56.693"
                               style="enable-background:new 0 0 56.693 56.693;">
                            <linearGradient class="svg-gradient">
                              <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                              <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                            </linearGradient>
                            <path class="svg-path"  fill="#111111"  d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029
                            c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77
                            L40.43,21.739z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  }
              }
              ?>

            </div>
          </div>
          <div class="vendor  components  flexboxgrid  col  col-md-6">
            <h2 class="theme  components  titles  titles-with-line  titles-with-line-1
                       theme  modificators  fonts  font-family-4  fonts-titles--md
                       theme  modificators  margins  margin-title--md-1">
              <span class="text">Our team</span>
              <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
            </h2>
            <p class="theme  modificators  fonts  fonts-paragraph--justify
                      theme  modificators  fonts  fonts-paragraphs--md
                      theme  modificators  margins  margin-paragraph--md-1">
              Sea nostro incorrupte definitionem an, ponderum delicata eam no. Impedit democritum per no, ea unum percipit convenire vix, wisi tantas percipitur no quo. Inermis graecis habemus sit ex, et inani dicit usu, eu regione pertinacia sea.
            </p>
            <a class="theme components  links  links-with-svg
                      theme  modificators  colors  links-color-1
                      theme  modificators  fonts  font-family-4  fonts-links--lg" href="#">
              <span class="text">Read more</span>
              <svg  class="icon" 
                    width="32" height="32" 
                    viewBox="0 0 32 32">
                <title>block-right</title>
                <path d="M30 2h-28.013v28h28.010v-28zM10.333 25.414l9.686-9.414-9.69-9.414 0.797-0.813 10.534 10.227-10.534 10.24-0.794-0.826z"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section class="theme  modificators  sections  section-1">
      <div class="vendor  components  flexboxgrid  container-1200
                  vendor modificators  flexboxgrid  container--center">
        <div class="vendor  components  flexboxgrid  row">
          <div class="vendor  components  flexboxgrid  col  col-md-6">
            <h2 class="theme  components  titles  titles-with-line  titles-with-line-1
                       theme  modificators  fonts  font-family-4  fonts-titles--md
                       theme  modificators  margins  margin-title--md-1">
              <span class="text">Our skills</span>
              <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
            </h2>
            <p class="theme  modificators  fonts  fonts-paragraph--justify
                      theme  modificators  fonts  fonts-paragraphs--md
                      theme  modificators  margins  margin-paragraph--md-1">
              Ea unum percipit convenire vix, wisi tantas percipitur no quo. Inermis graecis habemus sit ex, et inani dicit usu, eu cia sea.1
            </p>
            <div class="vendor  components  flexboxgrid  row">
              <div class="vendor  components  flexboxgrid  col  col-md-6">
                <!--Progress bar-->
                <div class="page-about__progress-bar
                            theme  components  progress-bars  progress-bar-1
                            js-progress-bars">
                  <div class="page-about__progress-bar  header  progress-bar-1__header">
                    <span class="theme  modificators  fonts  font-family-4  fonts-progress-bars-text">Graphics Design</span>
                    <div class="theme  modificators  fonts  font-family-3  fonts-progress-bars-value">
                      <span class="js-progress-bars__value">50</span>%
                    </div>
                  </div>
                  <div class="progress-bar-1__body
                              theme  modificators  progress-bars  body--xs">
                    <div class="body__progress
                                theme  modificators  gradients  background-gradient-0-deg
                                js-progress-bars__progress"></div>
                  </div>
                </div>
                <!--Progress bar-->
                <!--Progress bar-->
                <div class="page-about__progress-bar
                            theme  components  progress-bars  progress-bar-1
                            js-progress-bars">
                  <div class="page-about__progress-bar  header  progress-bar-1__header">
                    <span class="theme  modificators  fonts  font-family-4  fonts-progress-bars-text">Graphics Design</span>
                    <div class="theme  modificators  fonts  font-family-3  fonts-progress-bars-value">
                      <span class="js-progress-bars__value">75</span>%
                    </div>
                  </div>
                  <div class="progress-bar-1__body
                              theme  modificators  progress-bars  body--xs">
                    <div class="body__progress
                                theme  modificators  gradients  background-gradient-0-deg
                                js-progress-bars__progress"></div>
                  </div>
                </div>
                <!--Progress bar-->
                <!--Progress bar-->
                <div class="page-about__progress-bar
                            theme  components  progress-bars  progress-bar-1
                            js-progress-bars">
                  <div class="page-about__progress-bar  header  progress-bar-1__header">
                    <span class="theme  modificators  fonts  font-family-4  fonts-progress-bars-text">Graphics Design</span>
                    <div class="theme  modificators  fonts  font-family-3  fonts-progress-bars-value">
                      <span class="js-progress-bars__value">75</span>%
                    </div>
                  </div>
                  <div class="progress-bar-1__body
                              theme  modificators  progress-bars  body--xs">
                    <div class="body__progress
                                theme  modificators  gradients  background-gradient-0-deg
                                js-progress-bars__progress"></div>
                  </div>
                </div>
                <!--Progress bar-->
              </div>
              <div class="vendor  components  flexboxgrid  col  col-md-6">
                <!--Progress bar-->
                <div class="page-about__progress-bar
                            theme  components  progress-bars  progress-bar-1
                            js-progress-bars">
                  <div class="page-about__progress-bar  header  progress-bar-1__header">
                    <span class="theme  modificators  fonts  font-family-4  fonts-progress-bars-text">Graphics Design</span>
                    <div class="theme  modificators  fonts  font-family-3  fonts-progress-bars-value">
                      <span class="js-progress-bars__value">50</span>%
                    </div>
                  </div>
                  <div class="progress-bar-1__body
                              theme  modificators  progress-bars  body--xs">
                    <div class="body__progress
                                theme  modificators  gradients  background-gradient-0-deg
                                js-progress-bars__progress"></div>
                  </div>
                </div>
                <!--Progress bar-->
                <!--Progress bar-->
                <div class="page-about__progress-bar
                            theme  components  progress-bars  progress-bar-1
                            js-progress-bars">
                  <div class="page-about__progress-bar  header  progress-bar-1__header">
                    <span class="theme  modificators  fonts  font-family-4  fonts-progress-bars-text">Graphics Design</span>
                    <div class="theme  modificators  fonts  font-family-3  fonts-progress-bars-value">
                      <span class="js-progress-bars__value">75</span>%
                    </div>
                  </div>
                  <div class="progress-bar-1__body
                              theme  modificators  progress-bars  body--xs">
                    <div class="body__progress
                                theme  modificators  gradients  background-gradient-0-deg
                                js-progress-bars__progress"></div>
                  </div>
                </div>
                <!--Progress bar-->
                <!--Progress bar-->
                <div class="page-about__progress-bar
                            theme  components  progress-bars  progress-bar-1
                            js-progress-bars">
                  <div class="page-about__progress-bar  header  progress-bar-1__header">
                    <span class="theme  modificators  fonts  font-family-4  fonts-progress-bars-text">Graphics Design</span>
                    <div class="theme  modificators  fonts  font-family-3  fonts-progress-bars-value">
                      <span class="js-progress-bars__value">75</span>%
                    </div>
                  </div>
                  <div class="progress-bar-1__body
                              theme  modificators  progress-bars  body--xs">
                    <div class="body__progress
                                theme  modificators  gradients  background-gradient-0-deg
                                js-progress-bars__progress"></div>
                  </div>
                </div>
                <!--Progress bar-->
              </div>
            </div>
          </div>
          <div class="vendor  components  flexboxgrid  col  col-md-6">

          </div>
        </div>
      </div>
    </section>

  </main>


  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/footers/footer-2'); ?>
  </div>
</div>


<?php get_template_part('template-parts/end-page'); ?>
