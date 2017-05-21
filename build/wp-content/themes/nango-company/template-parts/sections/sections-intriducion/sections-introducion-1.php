<section class="theme  components  template-parts  sections  section-introducion-1
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
                     theme  modificators  fonts  font-family-4  sections-number--lg"><?php echo get_post_meta( 8, 'ncfd__sections-page_section_01', true )['number']; ?></span>
          </div>


          <div class="mask__mask
                      vendor  components  flexboxgrid  row">
            <div class="vendor  components  flexboxgrid  col  col-xs-12
                        theme  modificators  masks  mask-2"></div>
          </div>


          <div class="mask__image
                      vendor  components  flexboxgrid  row">
            <div class="theme  components  images  image-wrapper">
              <img class="theme  modificators  images  image--max-height" src="<?php echo get_template_directory_uri() . '/sources/theme/images/bg/bg-2.jpg'; ?>" alt="alt">
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
                <span class="text"><?php echo get_post_meta( 8, 'ncfd__sections-page_section_01', true )['title']; ?></span>
                <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
              </h2>
              <p class="theme  modificators  fonts  font-family-  fonts-titles--xs-up
                        theme  modificators  margins  margin-title--md"><?php echo get_post_meta( 8, 'ncfd__sections-page_section_01', true )['subtitle']; ?></p>
              <div class="theme  modificators  fonts  fonts-paragraph--justify
                        theme  modificators  fonts  fonts-paragraphs--md">
                <?php echo get_post_meta( 8, 'ncfd__sections-page_section_01', true )['desc']; ?>
              </div>
              
              <a class="section-introducion-1__button
                            theme  components  containers  inline-block-container
                            theme  compononents  buttons  button-1
                            theme  modificators  fonts  font-family-3"
                      href="<?php echo get_permalink('12'); ?>">
                <?php echo get_post_meta( 8, 'ncfd__sections-page_section_01', true )['button-about-us']; ?>
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