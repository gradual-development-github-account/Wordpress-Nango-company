<?php
/*
Template Name: Portfolio page
*/
?>


<?php get_template_part('template-parts/head-page'); ?>


<div class="theme  components  template-parts  pages  page-2
            theme  components  template-parts  page-portfolio
            theme  modificators  containers  fullscreen
            vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-space-between">

  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/headers/header-2', $part_name = 'header-2' ); ?>
  </div>


  <main class="theme  modificators  containers  full-width">
    <section class="theme  modificators  sections  section-4-both">
      <div class="vendor  components  flexboxgrid  container-1200
                  vendor modificators  flexboxgrid  container--center">
      <div class="vendor  components  flexboxgrid  row">
        <div class="vendor  components  flexboxgrid  col  col-md-6">

          <div class="page-portfolio__gallery">

            <?php $Portfolio_posts = new WP_Query( array(
                'post_type'      => 'quality-control',
                'posts_per_page' => 3,
                'order'          => 'DESC'
            )); ?>

            <?php if ( $Portfolio_posts->have_posts() ) : while ( $Portfolio_posts->have_posts() ) : $Portfolio_posts->the_post(); ?>

            <!--Component image with hover-->
            <div class="gallery__item
                        theme  components  images-with-hover  images-with-hover-1">
              <div class="gallery__image-wrapper
                          image-wrapper
                          theme  components  images  image-wrapper
                          images-with-hover-1__image-wrapper">
                <img class="
                            images-with-hover-1__image
                            theme  modificators  images-with-hover  image--full-height" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="alt">
              </div>
              <a class="images-with-hover-1__hover-block" href="<?php the_permalink(); ?>">
                <div class="hover-block__mask
                            theme  modificators  gradients  background-gradient-1"></div>
                <div class="gallery__hover-block
                            hover-block__text
                            theme  modificators  colors  color-5
                            vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-center">
                  <h3 class="theme  modificators  titles  titles-with-line--block-1
                             theme  modificators  fonts  font-family-4  fonts-titles--md-1
                             theme  modificators  margins  margin-title--sm-1">
                    <span class="text
                                 theme  components  containers  block-container
                                 theme  modificators  margins  margin-title--sm-1"><?php the_title(); ?></span>
                    <div class="line
                                theme  modificators  lines  line-2--block
                                theme  modificators  colors  background-color-5"></div>
                  </h3>
                  <span class="theme  modificators  fonts  font-family-3  fonts-titles--xs-1-up"><?php the_content(); ?></span>
                </div>
              </a>
            </div>
            <!--Component image with hover-->

            <?php endwhile; ?>

            <?php else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

          </div>

          <div class="vendor  modificators  flexboxgrid  flex-container  container--justify-content-center">
            <button class="theme  compononents  buttons  button-1
                           theme  modificators  fonts  font-family-3" type="button">
              <?php echo get_post_meta( $post->ID, 'ncfd__quality_control_list-page', true )['button-view-more']; ?>
            </button>
          </div>
        </div>
        <div class="vendor  components  flexboxgrid  col  col-md-6">
          <div class="page-portfolio__text">
            <h1 class="
                       theme  components  titles  titles-with-line  titles-with-line-1
                       theme  modificators  fonts  font-family-4  fonts-titles--lg
                       theme  modificators  margins  margin-title--sm">



              <span class="text"><?php echo get_the_title('22'); ?></span>
              <div class="line
                            theme  modificators  lines  line-1--inline
                            theme  modificators  gradients  background-gradient-0-deg"></div>
            </h1>
            <p class="theme  modificators  fonts  font-family-  fonts-titles--xs-up">
              <?php echo get_post_meta( $post->ID, 'ncfd__quality_control_list-page', true )['subtitle']; ?>
            </p>
<!--
            <ul class="page-portfolio__list-categories
                       theme  modificators  fonts  font-family-3  fonts-lists--lg">
              <li class="list-categories__item">
                <a class="theme  modificators  colors links-color-1" href="#">UI</a>
              </li>
              <li class="list-categories__item">
                <a class="theme  modificators  colors links-color-1" href="#">Design</a>
              </li>
              <li class="list-categories__item">
                <a class="theme  modificators  colors links-color-1" href="#">HTML/CSS</a>
              </li>
              <li class="list-categories__item">
                <a class="theme  modificators  colors links-color-1" href="#">Wordpress</a>
              </li>
              <li class="list-categories__item">
                <a class="theme  modificators  colors links-color-1" href="#">Angular</a>
              </li>
            </ul>
-->
<!--
            <ul class="page-portfolio__list-categories
                       theme  modificators  fonts  font-family-3  fonts-lists--lg">
              <?php

              wp_list_categories( array(
                'taxonomy'     => 'tax-portfolio-categories', // название таксономии
                'orderby'      => 'name',  // сортируем по названиям
                'show_count'   => 0,       // не показываем количество записей
                'pad_counts'   => 0,       // не показываем количество записей у родителей
                'hierarchical' => 1,       // древовидное представление
                'title_li'     => ''       // список без заголовка
              ));
              ?>
            </ul>
-->

            <div class="page-portfolio__desc
                        theme  modificators  fonts  fonts-paragraph--justify
                        theme  modificators  fonts  fonts-paragraphs--md">
              <?php echo get_post_meta( $post->ID, 'ncfd__quality_control_list-page', true )['desc']; ?>
              </div>
          </div>
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
