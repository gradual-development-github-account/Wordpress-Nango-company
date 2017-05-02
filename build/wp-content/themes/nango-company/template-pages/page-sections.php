<?php
/*
Template Name: Sections page
*/
?>


<?php get_template_part('template-parts/head-page'); ?>


<div class="theme  components  template-parts  pages  page-1
            theme  components  template-parts  page-sections
            theme  components  containers  relative-container
            theme  modificators  containers  fullscreen">
  
  <div class="page-1__header-wrapper
              theme  components  containers  absolute-container
              theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/headers/header-1'); ?>
  </div>
  
  
  <main class="vendor  components    swiper-slider  swiper-container
               vendor  modificators  swiper-slider  slider--fullscreen
               js-swiper-slider-fullscreen-1">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <?php get_template_part('template-parts/sections/sections-intriducion/sections-introducion-1'); ?>
      </div>
      <div class="swiper-slide">
        <?php get_template_part('template-parts/sections/sections-about/section-about-1'); ?>
      </div>
      <div class="swiper-slide">
        <?php get_template_part('template-parts/sections/sections-portfolio/section-portfolio-1'); ?>
      </div>
      <div class="swiper-slide">
        <?php get_template_part('template-parts/sections/sections-partners/section-partners-1'); ?>
      </div>
      <div class="swiper-slide">
        <?php get_template_part('template-parts/sections/sections-contacts/section-contacts-1'); ?>
      </div>      
    </div>
    <!-- Add Pagination -->
    <!--Pagination может не являться зависимым от компонента Slider -->
    <div class="vendor  components  swiper-pagination
                vendor  components  swiper-pagination-1
                js-swiper-slider-fullscreen-1__pagination"></div>
  </main>

</div>


<?php get_template_part('template-parts/end-page'); ?>
