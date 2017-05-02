<?php
/*
Template Name: 404 page
*/
?>


<?php get_template_part('template-parts/head-page'); ?>




<div class="theme  components  masks">
  <div class="mask__content
              vendor  modificators  flexboxgrid  flex-container  container--justify-content-center  container--align-items-center">
    <div class="theme  components  template-parts  pages  page-2
            theme  components  template-parts  page-404
            theme  modificators  containers  fullscreen
            vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-space-between">

      <div class="theme  modificators  containers  full-width">
        <?php get_template_part('template-parts/headers/header-1'); ?>
      </div>

      <main class="theme  modificators  containers  full-width">

        <div class="vendor  components  flexboxgrid  container-1200
              vendor  modificators  flexboxgrid  container--center">
          <div class="vendor  components  flexboxgrid  row
                vendor  modificators  flexboxgrid  row--full-height">

            <div class="vendor  components  flexboxgrid  col  col-md-4
                    vendor  modificators  flexboxgrid  flex-container  container--justify-content-flex-end  container--align-items-center">
              <b class="theme  modificators  fonts  font-family-4  fonts-titles--large
                        theme  modificators  gradients  text-gradient-135-deg">404</b>
            </div>
            <div class="vendor  components  flexboxgrid  col  col-md-6">
              <h2>Page note found</h2>
              <p>
                It seems we can’t find what you’re looking for.
                Perhaps searching can help or go back to <a href="#">Homepage</a>.
              </p>
              <div class="page-404__form">
                <?php get_template_part('template-parts/forms/search-forms/search-form-1'); ?>
              </div>
            </div>
          </div>
        </div>
      </main>


      <div class="theme  modificators  containers  full-width">
        <?php get_template_part('template-parts/footers/footer-1'); ?>
      </div>
    </div>
  </div>


  <div class="mask__mask
              vendor  components  flexboxgrid  container-fluid">
    <div class="vendor  components  flexboxgrid  row
                vendor  modificators  flexboxgrid  row--full-height">
      <div class="vendor  components  flexboxgrid  col  col-xs-12
                  theme  modificators  masks  mask-1"></div>
    </div>
  </div>


  <div class="mask__image
              vendor  components  flexboxgrid  container-fluid">
    <div class="vendor  components  flexboxgrid  row
                vendor  modificators  flexboxgrid  row--full-height">
      <div class="theme  components  images  image-wrapper">
        <img class="theme  modificators  images  image--full-width" src="<?php echo get_template_directory_uri() . '/sources/theme/images/bg/bg-2.jpg'; ?>" alt="alt">
      </div>
    </div>
  </div>
</div>


<?php get_template_part('template-parts/end-page'); ?>







