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

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

                    <?php
                    $single_project_images = rwmb_meta( 'nango_quality_control_single_post-gallery', array(), get_the_ID() );

                    if ( !empty( $single_project_images ) ) {
                      foreach ( $single_project_images as $image ) {
                        ?>

                        <div class="swiper-slide">
                          <div class="theme  components  containers  block-container
                          page-portfolio-single__image-wrapper">
                            <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo esc_url( $image['full_url'] ) ?>" alt="alt">
                          </div>
                        </div>

                        <?php
                      }
                    }
                    ?>

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
                    <span class="text"><?php the_title(); ?></span>
                    <div class="line
                              theme  modificators  lines  line-1--inline
                              theme  modificators  gradients  background-gradient-0-deg"></div>
                  </h1>
                  <p class="theme  modificators  fonts  font-family-3  fonts-titles--xs-up"><?php echo rwmb_meta( 'nango_quality_control_single_post-subtitle', array(), get_the_ID() ); ?></p>
                </section>


                <section class="theme  modificators  sections  section-5">
                  <h2 class="theme  components  titles
                           theme  modificators  fonts  font-family-4  fonts-titles--sm
                           theme  modificators  margins  margin-title--sm-1"><?php echo get_post_meta( 377, 'ncfd__quality-control-single-page', true )['title-desc']; ?></h2>
                  <div class="theme  modificators  fonts  fonts-paragraph--justify
                          theme  modificators  fonts  fonts-paragraphs--md
                          theme  modificators  margins  margin-paragraph--md">
                    <?php echo get_the_content(); ?>
                  </div>

                </section>


                <section class="theme  modificators  sections  section-5">
                  <div class="vendor  components  flexboxgrid  row">
                    <div class="vendor  components  flexboxgrid  col  col-md-8">
                      <!--Components  detail table-->
                      <div class="theme  components  tables  table-detail-item-1">
                        <h2 class="theme  components  titles
                         theme  modificators  fonts  font-family-4  fonts-titles--sm
                         theme  modificators  margins  margin-title--sm-1"><?php echo get_post_meta( 377, 'ncfd__quality-control-single-page', true )['title-detail']; ?></h2>


                        <div class="vendor  components  flexboxgrid  row
                                    theme  modificators  margins  margin-table__row--sm">
                          <div class="vendor  components  flexboxgrid  col  col-md-4
                                      theme  modificators  fonts  font-family-2">
                            <?php echo get_post_meta( 377, 'ncfd_quality-control-single-page__table-details', true )['table-row-1']; ?>
                          </div>
                          <div class="vendor  components  flexboxgrid  col  col-md-8">
                            <?php echo rwmb_meta( 'nango_quality_control_single_post__details-price', array(), get_the_ID() ); ?>
                          </div>
                        </div>
                        <div class="vendor  components  flexboxgrid  row
                                    theme  modificators  margins  margin-table__row--sm">
                          <div class="vendor  components  flexboxgrid  col  col-md-4
                                      theme  modificators  fonts  font-family-2">
                            <?php echo get_post_meta( 377, 'ncfd_quality-control-single-page__table-details', true )['table-row-2']; ?>
                          </div>
                          <div class="vendor  components  flexboxgrid  col  col-md-8">
                            <ul>
                              <?php
                              $text_list__basic_functions = rwmb_meta( 'text_list__basic-functions-id', array(), get_the_ID() );

                              if ( !empty( $text_list__basic_functions ) ) {
                                foreach ( $text_list__basic_functions as $list_item_array ) {
                                  foreach ( $list_item_array as $list_item ) {
                                    ?>

                                    <li class="theme  modificators  margins  margin-table__row--xs-1"><?php echo $list_item; ?></li>

                                    <?php
                                  }
                                }
                              }
                              ?>
                            </ul>
                          </div>
                        </div>
                        <div class="vendor  components  flexboxgrid  row
                                    theme  modificators  margins  margin-table__row--sm">
                          <div class="vendor  components  flexboxgrid  col  col-md-4
                                      theme  modificators  fonts  font-family-2">
                            <?php echo get_post_meta( 377, 'ncfd_quality-control-single-page__table-details', true )['table-row-3']; ?>
                          </div>
                          <div class="vendor  components  flexboxgrid  col  col-md-8">
                            <ul>
                              <?php
                              $text_list__advantages = rwmb_meta( 'text_list__advantages-id', array(), get_the_ID() );

                              if ( !empty( $text_list__advantages ) ) {
                                foreach ( $text_list__advantages as $list_item_array ) {
                                  foreach ( $list_item_array as $list_item ) {
                                    ?>

                                    <li class="theme  modificators  margins  margin-table__row--xs-1"><?php echo $list_item; ?></li>

                                    <?php
                                  }
                                }
                              }
                              ?>
                            </ul>
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
                           theme  modificators  margins  margin-title--sm-1">
                    <?php echo get_post_meta( 377, 'ncfd__quality-control-single-page', true )['title-share']; ?>
                  </h2>
                  <!--Share this widget-->
                  <?php get_template_part('template-widgets/widgets-share-this/widget-share-this-1'); ?>
                  <!--Share this widget-->
                </section>

              </div>
              <!--Single portfolio gallery description-->
            </div>
          </div>
        </section>

      <?php endwhile; ?>

      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      <!--Related posts-->
      <section>
        <?php get_template_part('template-parts/sections/section-related-quality-control-posts/section-related-quality-control-posts-1'); ?>
      </section>
      <!--Related posts-->


    </section>
  </main>


  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/footers/footer-2'); ?>
  </div>
</div>


<?php get_template_part('template-parts/end-page'); ?>


