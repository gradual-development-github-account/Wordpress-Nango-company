<section class="theme  components  template-parts  sections  section-portfolio-1
                theme  modificators  template-parts  sections  full-height">
  <div class="vendor  components  flexboxgrid  container-fluid
              vendor  modificators  flexboxgrid  container--full-height">
    <div class="vendor  components  flexboxgrid  row
                vendor  modificators  flexboxgrid  row--full-height">

      <div class="vendor  components  flexboxgrid  col  col-md-6">
        <div class="theme  components  masks">
          <div class="mask__content
                      vendor  modificators  flexboxgrid  flex-container  container--justify-content-center  container--align-items-center">
            <span class="theme  modificators  colors  color-5
                     theme  modificators  fonts  font-family-4  sections-number--lg"><?php echo get_post_meta( 8, 'ncfd__sections-page_section_03', true )['number']; ?></span>
          </div>


          <div class="mask__mask
                      vendor  components  flexboxgrid  row">
            <div class="vendor  components  flexboxgrid  col  col-xs-12
                        theme  modificators  masks  mask-2"></div>
          </div>


          <div class="mask__image
                      vendor  components  flexboxgrid  row">
            <div class="theme  components  images  image-wrapper">
              <img class="theme  modificators  images  image--max-height" src="<?php echo get_template_directory_uri() . '/sources/theme/images/bg/bg-5.jpg'; ?>" alt="alt">
            </div>
          </div>
        </div>
      </div>


      <div class="vendor  components  flexboxgrid  col  col-md-6">
        <!--Component mask-->
        <div class="theme  components  masks">
          <div class="mask__content
                      vendor  modificators  flexboxgrid  flex-container  container--align-items-center">

            <div class="page-sections__sections-data-container
                        theme  modificators  containers  full-width">
              <h2 class="theme  components  titles  titles-with-line  titles-with-line-1
                         theme  modificators  fonts  font-family-4  fonts-titles--md
                         theme  modificators  margins  margin-title--sm">
                <span class="text"><?php echo get_post_meta( 8, 'ncfd__sections-page_section_03', true )['title']; ?></span>
                <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
              </h2>
              <p class="theme  modificators  fonts  fonts-titles--xs-up"><?php echo get_post_meta( 8, 'ncfd__sections-page_section_03', true )['subtitle']; ?></p>
              
              <div class="section-portfolio-1__gallery">
                <div class="vendor  components  flexboxgrid  row
                            vendor  modificators  flexboxgrid  row--full-height">

                  <?php $Quality_Control_posts = new WP_Query( array(
                      'post_type'      => 'quality-control',
                      'posts_per_page' => 4,
                      'order'          => 'DESC'
                  )); ?>


                  <?php if ( $Quality_Control_posts->have_posts() ) : while ( $Quality_Control_posts->have_posts() ) : $Quality_Control_posts->the_post(); ?>

                  <div class="section-portfolio-1__gallery-cols
                              vendor  components  flexboxgrid  col  col-md-6">
                    <a class="theme  components  containers  block-container
                              section-portfolio-1__gallery-image
                              theme  components  images  image-wrapper"
                        href="<?php the_permalink(); ?>">
                      <img class="theme  modificators  images  image--max-width" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="alt">
                    </a>
                    <a class="section-portfolio-1__gallery-item-title
                              theme  modificators  colors  links-color-1
                              theme  components  containers  block-container
                              theme  components  titles
                              theme  modificators  fonts  font-family-4  fonts-titles--xs"
                       href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
<!--                    <span>Graphics design</span>-->
                  </div>

                  <?php endwhile; ?>

                  <?php else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                  <?php endif; ?>

                  <?php wp_reset_postdata(); ?>

                  
                </div>
              </div>

              <a class="section-portfolio-1__button
                            theme  components  containers  inline-block-container
                            theme  compononents  buttons  button-1
                            theme  modificators  margins  margin-item--sm"
                 href="<?php echo get_permalink('22'); ?>">
                <?php echo get_post_meta( 8, 'ncfd__sections-page_section_03', true )['button-portfolio']; ?>
              </a>
            </div>

          </div>


          <div class="mask__mask
                      vendor  components  flexboxgrid  row">
            <div class="vendor  components  flexboxgrid  col  col-xs-12
                        theme  modificators  masks  mask-1"></div>
          </div>


          <div class="mask__image
                      vendor  components  flexboxgrid  row">
            <div class="theme  components  images  image-wrapper">
              <img class="theme  modificators  images  image--max-height" src="<?php echo get_template_directory_uri() . '/sources/theme/images/bg/bg-1.jpg'; ?>" alt="alt">
            </div>
          </div>


        </div>
        <!--Component mask-->
      </div>

    </div>
  </div>
</section>