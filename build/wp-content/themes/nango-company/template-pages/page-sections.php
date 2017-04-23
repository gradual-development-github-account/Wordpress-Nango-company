<?php
/*
Template Name: Sections page
*/
?>


<?php get_template_part('template-parts/head-page'); ?>


<div class="theme  components  template-parts  page-sections
            theme  components  containers  relative-container
            theme  modificators  containers  fullscreen">
  
  <div class="theme  components  template-parts  page-sections__header-wrapper
              theme  components  containers  absolute-container
              theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/headers/header-1'); ?>
  </div>
  
  
  <div class="theme  components  template-parts  page-sections__slider-wrapper
              vendor  components    swiper-slider  swiper-container
              vendor  modificators  swiper-slider  slider--fullscreen
              js-swiper-slider-fullscreen-1">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div>
    </div>
    <!-- Add Pagination -->
    <!--Pagination может не являться зависимым от компонента Slider -->
    <div class="vendor  components  swiper-pagination
                js-swiper-slider-fullscreen-1__pagination-1"></div>
  </div>

</div>



<?php get_template_part('template-parts/end-page'); ?>
