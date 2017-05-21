<div class="theme  components  template-parts  sections  section-related-projects-1">
  <div class="vendor  components  flexboxgrid  container-1200
                  vendor modificators  flexboxgrid  container--center">
    <div class="vendor  components  flexboxgrid  row">
      <div class="vendor  components  flexboxgrid  col  col-xs-12">

        <!--Carousel buttons-->
        <div class="vendor   modificators  flexboxgrid  flex-container  container--justify-content-space-between
                    theme  modificators  margins  margin-title--md-1">
          <h2 class="theme  components  titles  titles-with-line  titles-with-line-1
                       theme  modificators  fonts  font-family-4  fonts-titles--md">
            <span class="text"><?php echo get_post_meta( 377, 'ncfd__quality-control-single-page_related_posts', true )['title']; ?></span>
            <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
          </h2>

          <div class="vendor   modificators  flexboxgrid  flex-container  container--align-items-flex-end">
            <button class="section-related-projects-1__carousel-button
                           js-swiper-slider-3-items-1__button-next
                          theme  modificators  fonts  font-family-3  fonts-buttons--md-1
                          theme  modificators  colors  buttons-color-1
                          theme  compononents  buttons  buttons-with-svg"
                    type="button">
              <svg class="icon" width="32" height="32" viewBox="0 0 32 32">
                <title>block-left</title>
                <path d="M1.987 29.936h28.010v-28h-28.010v28zM21.658 6.522l-9.69 9.414 9.69 9.414-0.797 0.813-10.534-10.227 10.534-10.24 0.797 0.826z"></path>
              </svg>
              <span class="text"><?php echo get_post_meta( 377, 'ncfd__quality-control-single-page_related_posts', true )['button-back']; ?></span>
            </button>
            <button class="section-related-projects-1__carousel-button
                           js-swiper-slider-3-items-1__button-prev
                          theme  modificators  fonts  font-family-3  fonts-buttons--md-1
                          theme  modificators  colors  buttons-color-1
                          theme  compononents  buttons  buttons-with-svg"
                    type="button">
              <span class="text"><?php echo get_post_meta( 377, 'ncfd__quality-control-single-page_related_posts', true )['button-next']; ?></span>
              <svg class="icon" width="32" height="32" viewBox="0 0 32 32">
                <title>block-right</title>
                <path d="M30 2h-28.013v28h28.010v-28zM10.333 25.414l9.686-9.414-9.69-9.414 0.797-0.813 10.534 10.227-10.534 10.24-0.794-0.826z"></path>
              </svg>
            </button>
          </div>
        </div>
        <!--Carousel buttons-->

        <!--Carousel-->
        <div class="vendor  components  swiper-slider  swiper-container
                    js-swiper-slider-3-items-1">

          <?php
          $related_quality_control_Posts_slider = new WP_Query( array(
              'post_type'    => 'quality-control',
              'post__not_in' =>  array( get_the_ID() )
          ));
          ?>


          <div class="swiper-wrapper">

            <?php if ( $related_quality_control_Posts_slider->have_posts() ) : while ( $related_quality_control_Posts_slider->have_posts() ) : $related_quality_control_Posts_slider->the_post(); ?>

            <div class="swiper-slide">
              <a class="theme  components  containers  block-container
                        section-related-projects-1__image  image-wrapper
                        theme  modificators  margins  margin-item--sm"
                 href="<?php the_permalink(); ?>">
                <img class="theme  modificators  images-with-hover  image--full-width" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="alt">
              </a>
              <a class="theme  components  containers  block-container
                        theme  modificators  margins  margin-title--xs-1
                        theme  modificators  colors  links-color-1"
                 href="<?php the_permalink(); ?>">
                <h3 class="theme  modificators  fonts  font-family-4  fonts-titles--sm"><?php the_title(); ?></h3>
              </a>
            </div>

            <?php endwhile; ?>

            <?php else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

          </div>

        </div>
        <!--Carousel-->


      </div>
    </div>
  </div>
</div>