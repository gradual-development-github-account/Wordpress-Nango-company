<?php
/*
Template Name: Portfolio single page
*/
?>


<?php get_template_part('template-parts/head-page'); ?>


<div class="theme  components  template-parts  pages  page-2
            theme  components  template-parts  page-portfolio-single
            theme  modificators  containers  fullscreen
            vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-space-between">

  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/headers/header-2', $part_name = 'header-2' ); ?>
  </div>


  <main class="theme  modificators  containers  full-width">

    <section class="theme  modificators  sections  section-4-both">
      <section class="theme  modificators  sections  section-4">
        <div class="vendor  components  flexboxgrid  container-1200
                      vendor modificators  flexboxgrid  container--center">
          <div class="vendor  components  flexboxgrid  row">
            <!--Single portfolio gallery carousel-->
            <div class="vendor  components  flexboxgrid  col  col-md-6">

              <!--Component Swiper slider-->
              <div class="vendor  components  swiper-slider  swiper-container
                          vendor  modificators  swiper-slider  swiper-slider--buttons-1
                          js-swiper-slider-1-items-1">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="theme  components  containers  block-container
                          page-portfolio-single__image-wrapper">
                      <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/pages/portfolio-single/portfolio-single-1.jpg'; ?>" alt="alt">
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="theme  components  containers  block-container
                          page-portfolio-single__image-wrapper">
                      <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/pages/portfolio-single/portfolio-single-1.jpg'; ?>" alt="alt">
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="theme  components  containers  block-container
                          page-portfolio-single__image-wrapper">
                      <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/pages/portfolio-single/portfolio-single-1.jpg'; ?>" alt="alt">
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="theme  components  containers  block-container
                          page-portfolio-single__image-wrapper">
                      <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/pages/portfolio-single/portfolio-single-1.jpg'; ?>" alt="alt">
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="theme  components  containers  block-container
                          page-portfolio-single__image-wrapper">
                      <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/pages/portfolio-single/portfolio-single-1.jpg'; ?>" alt="alt">
                    </div>
                  </div>

                </div>

                <!--Controls pagination-->
                <div class="swiper-pagination  js-swiper-slider-1-items-1__pagination"></div>
                <!--Controls pagination-->
                <!--Controls buttons-->
                <button class="page-portfolio-single__carousel-buttons
                               section-related-posts-1__carousel-button
                             js-swiper-slider-1-items-1__button-next
                             swiper-slider--buttons-1__button-next
                            theme  modificators  fonts  font-family-3  fonts-buttons--md-1
                            theme  modificators  colors  buttons-color-1
                            theme  compononents  buttons  buttons-with-svg"
                        type="button">
                  <svg class="icon" width="52" height="52" viewBox="0 0 32 32">
                    <title>block-left</title>
                    <path d="M12.586 16l9.328-9.062-1.216-1.267-10.624 10.33 10.621 10.314 1.222-1.248zM1.994 30h28.010v-28h-28.010v28zM28.986 3.021v25.962h-25.971v-25.962h25.971z"></path>
                  </svg>
                  <!--<span class="tetx">Prev</span>-->
                </button>
                <button class="page-portfolio-single__carousel-buttons
                               section-related-posts-1__carousel-button
                             js-swiper-slider-1-items-1__button-prev
                             swiper-slider--buttons-1__button-prev
                            theme  modificators  fonts  font-family-3  fonts-buttons--md-1
                            theme  modificators  colors  buttons-color-1
                            theme  compononents  buttons  buttons-with-svg"
                        type="button">
                  <!--<span class="tetx">Next</span>-->
                  <svg class="icon" width="52" height="52" viewBox="0 0 32 32">
                    <title>block-right</title>
                    <path d="M10.086 25.062l1.216 1.267 10.624-10.33-10.621-10.314-1.222 1.248 9.331 9.066zM1.994 2v28h28.010v-28h-28.010zM28.986 28.979h-25.971v-25.958h25.971v25.958z"></path>
                  </svg>
                </button>
                <!--Controls buttons-->
              </div>
              <!--Component Swiper slider-->

            </div>
            <!--Single portfolio gallery carousel-->
            <!--Single portfolio gallery description-->
            <div class="vendor  components  flexboxgrid  col  col-md-6">

              <section class="theme  modificators  sections  section-5">
                <h1 class="theme  components  titles  titles-with-line  titles-with-line-1
                           theme  modificators  fonts  font-family-4  fonts-titles--lg
                           theme  modificators  margins  margin-title--sm">
                  <span class="text">White Building</span>
                  <div class="line
                              theme  modificators  lines  line-1--inline
                              theme  modificators  gradients  background-gradient-0-deg"></div>
                </h1>
                <p class="theme  modificators  fonts  font-family-3  fonts-titles--xs-up">Once of our projects</p>
              </section>


              <section class="theme  modificators  sections  section-5">
                <h2 class="theme  components  titles
                           theme  modificators  fonts  font-family-4  fonts-titles--sm
                           theme  modificators  margins  margin-title--sm-1">Project description</h2>
                <p class="theme  modificators  fonts  fonts-paragraph--justify
                          theme  modificators  fonts  fonts-paragraphs--md
                          theme  modificators  margins  margin-paragraph--md">
                  Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula por.
                </p>
                <p class="theme  modificators  fonts  fonts-paragraph--justify
                          theme  modificators  fonts  fonts-paragraphs--md">
                  Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue.
                </p>
              </section>


              <section class="theme  modificators  sections  section-5">
                <div class="vendor  components  flexboxgrid  row">
                <div class="vendor  components  flexboxgrid  col  col-md-8">
                  <!--Components  detail table-->
                  <div class="theme  components  tables  table-detail-item-1">
                    <h2 class="theme  components  titles
                         theme  modificators  fonts  font-family-4  fonts-titles--sm
                         theme  modificators  margins  margin-title--sm-1">Details</h2>
                    <div class="table">
                      <div class="table__col">
                        <div class="table__row
                                    theme  modificators  margins  margin-table__row--sm">
                          Date
                        </div>
                        <div class="table__row
                                    theme  modificators  margins  margin-table__row--sm">
                          Category
                        </div>
                        <div class="table__row
                                    theme  modificators  margins  margin-table__row--sm">
                          Client
                        </div>
                      </div>
                      <div class="table__col">
                        <div class="table__row
                                    theme  modificators  margins  margin-table__row--sm">
                          October, 18th, 2016
                        </div>
                        <div class="table__row
                                    theme  modificators  margins  margin-table__row--sm">
                          <ul>
                            <li>Graphic Design</li>
                            <li>Photography</li>
                            <li>Web Development</li>
                          </ul>
                        </div>
                        <div class="table__row
                                    theme  modificators  margins  margin-table__row--sm">
                          Crophos Company Inc.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Components  detail table-->
                </div>
              </div>
              </section>

              <section>
                <h2 class="theme  components  titles
                           theme  modificators  fonts  font-family-4  fonts-titles--sm
                           theme  modificators  margins  margin-title--sm-1">Share this project</h2>
                <!--Share this widget-->
                <?php get_template_part('template-widgets/widgets-share-this/widget-share-this-1'); ?>
                <!--Share this widget-->
              </section>

            </div>
            <!--Single portfolio gallery description-->
          </div>
        </div>
      </section>
      <section>
        <?php get_template_part('template-parts/sections/sections-related-projects/section-related-projects-1'); ?>
      </section>
    </section>

  </main>


  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/footers/footer-2'); ?>
  </div>
</div>


<?php get_template_part('template-parts/end-page'); ?>


