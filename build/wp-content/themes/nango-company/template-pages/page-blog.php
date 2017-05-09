<?php
/*
Template Name: Blog page
*/
?>

<?php get_template_part('template-parts/head-page'); ?>


<div class="theme  components  template-parts  pages  page-2
            theme  components  template-parts  page-blog
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
                <span class="text"><?php echo wp_get_document_title(); ?></span>
                <div class="line
                          theme  modificators  lines  line-1--inline
                          theme  modificators  gradients  background-gradient-0-deg"></div>
              </h1>
              <p class="theme  modificators  fonts  font-family-3  fonts-titles--xs-up
                        theme  modificators  margins  margin-paragraph--sm">Excepteur sint occaecat</p>
              <!--Page breadcrumbs-->
<!--
              <div class="ui breadcrumb
                              theme  modificators  fonts  font-family-3
                              theme  modificators  margins  margin-paragraph--sm-1">
                <a class="section">Home</a>
                <div class="divider"> / </div>
                <div class="active section">Страница блога</div>
              </div>
-->
              <div class="theme  modificators  fonts  font-family-3">
                <?php the_breadcrumb(); ?>
              </div>

              <!--Page breadcrumbs-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="vendor  components  flexboxgrid  container-1200
                    vendor modificators  flexboxgrid  container--center">
      <div class="vendor  components  flexboxgrid  row">

        <!--Posts-->
        <div class="vendor  components  flexboxgrid  col  col-md-8">
          <div class="page-blog__posts
                      vendor  components  flexboxgrid  row">

            <?php //$Blog_posts = new WP_Query( 'cat=4&posts_per_page=6&order=DESC' ); ?>

            <?php $our_Current_Page = get_query_var( 'paged' ); ?>

            <?php $Blog_posts = new WP_Query( array(
              'post_type'      => 'blog',
              'posts_per_page' => 6,
              'order'          => 'DESC',
              'paged'          => $our_Current_Page
            )); ?>

            <?php if ( $Blog_posts->have_posts() ) : while ( $Blog_posts->have_posts() ) : $Blog_posts->the_post(); ?>

              <div class="page-blog__post-cols
                        vendor  components  flexboxgrid  col  col-md-6">
                <!--Post component-->
                <div class="page-blog__post
                          theme  components  posts  post-1
                          js-postAnimation1-post">
                  <!--Image wrapper-->
                  <div class="page-blog__post-image-wrapper
                            post-1__image-wrapper
                            theme  components  images  image-wrapper
                            theme  modificators  margins  margin-post--md"
                       onmouseenter="postAnimation1Enter(this)">
                    <img class="post-1__image
                              theme  modificators  images-with-hover  image--full-width" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="alt">
                  </div>
                  <!--Image wrapper-->
                  <!--Hover block-->
                  <div class="post-1__hover-block
                            js-postAnimation1-hover-block"
                       onmouseleave="postAnimation1Leave(this)">

                    <div class="hover-block__image
                                theme  components  images  image-wrapper">
                      <?php $hover_block_images = rwmb_meta( 'nango_blog_hover_block_image', array(), get_the_ID() ); ?>
                      <?php foreach ( $hover_block_images as $image ) {  ?>
                        <img class="theme  modificators  images-with-hover  image--full-width" src="<?php echo esc_url( $image['full_url'] ); ?>" alt="alt">
                      <?php } ?>
                    </div>


                    <div class="page-blog__post-hover-mask
                              hover-block__mask
                              theme  modificators  gradients  background-gradient-1"></div>


                    <div class="page-blog__post-text
                              hover-block__text
                              vendor  modificators  flexboxgrid  flex-container  container--direction-column  container--justify-content-center">
                      <div>
                        <a class="theme  components  containers  inline-block-container" href="#">
                          <svg class="theme  modificators  gradients  svg-fill-gradient-2"
                               width="50px"  height="50px"  x="0px"  y="0px"
                               viewBox="0 0 56.693 56.693"
                               style="enable-background:new 0 0 56.693 56.693;">
                            <linearGradient class="svg-gradient">
                              <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                              <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                            </linearGradient>
                            <path class="svg-path"  fill="#111111"  d="M28.621 6.266c-0.906-0.966-1.837-1.907-2.803-2.813-2.048-1.917-5.114-1.946-7.162-0.035-1.462 1.366-2.845 2.816-4.262 4.227-0.010 0.010-0.013 0.022-0.019 0.038-0.006 0.022 0.003 0.048 0.022 0.054 0.013 0.006 0.022 0.010 0.032 0.010 0.051 0.003 0.106 0.003 0.157 0.003 1.254-0.016 2.435 0.256 3.533 0.867 0.176 0.099 0.259 0.026 0.368-0.086 0.81-0.813 1.616-1.629 2.432-2.432 0.771-0.762 1.824-0.758 2.589 0.003 0.8 0.794 1.597 1.59 2.387 2.387 0.749 0.755 0.762 1.811 0.010 2.566-2.458 2.48-4.928 4.947-7.408 7.408-0.211 0.211-0.509 0.378-0.794 0.464-0.707 0.218-1.302-0.032-1.811-0.544-0.659-0.666-1.322-1.325-1.971-1.974-0.204-0.205-0.535-0.205-0.739 0l-1.728 1.731c-0.205 0.205-0.205 0.534-0.003 0.742 0.704 0.72 1.411 1.456 2.144 2.166 2.032 1.971 5.29 1.958 7.286 0.013 0.813-0.794 1.619-1.594 2.419-2.4 1.789-1.795 3.603-3.562 5.347-5.398 1.808-1.91 1.779-5.072-0.026-6.998zM17.542 24.253c-0.029-0.003-0.054-0.003-0.083-0.003-1.274 0.022-2.48-0.25-3.594-0.87-0.182-0.102-0.262-0.013-0.368 0.093-0.803 0.803-1.603 1.613-2.41 2.41-0.8 0.79-1.837 0.784-2.634-0.010-0.746-0.742-1.488-1.488-2.234-2.234-0.928-0.928-0.931-1.907-0.003-2.835l7.12-7.12c0.074-0.074 0.147-0.147 0.224-0.218 0.563-0.509 1.344-0.624 2-0.262 0.224 0.122 0.422 0.304 0.605 0.486 0.646 0.634 1.283 1.277 1.914 1.907 0.205 0.205 0.534 0.205 0.739 0 0.586-0.586 1.168-1.165 1.77-1.763 0.205-0.205 0.202-0.531-0.003-0.736-0.826-0.822-1.635-1.67-2.522-2.429-1.933-1.661-4.944-1.587-6.806 0.154-1.325 1.242-2.586 2.544-3.869 3.827-1.347 1.35-2.72 2.675-4.022 4.070-1.84 1.968-1.814 5.069 0.029 7.043 0.896 0.96 1.827 1.888 2.784 2.787 2.026 1.904 5.104 1.942 7.136 0.048 1.469-1.373 2.861-2.829 4.288-4.246 0.010-0.010 0.013-0.026 0.016-0.045 0-0.026-0.032-0.051-0.077-0.054z"/>
                          </svg>
                        </a>
                      </div>
                      <p class="theme  modificators  fonts  fonts-paragraph--justify
                              theme  modificators  fonts  fonts-paragraphs--md
                              theme  modificators  margins  margin-paragraph--md">
                        <?php echo rwmb_meta( 'nango_blog_post_descr', array(), get_the_ID() ); ?>
                      </p>
                      <span><?php echo rwmb_meta( 'nango_blog_autor_of_post', array(), get_the_ID() ); ?></span>
                    </div>

                  </div>
                  <!--Hover block-->
                  <!--Text wrapper-->
                  <div class="post-1__text-wrapper">
                    <a class="theme  components  containers  block-container
                            theme  modificators  colors  links-color-1
                            theme  modificators  margins  margin-title--sm" href="<?php the_permalink(); ?>">
                      <h3 class="theme  components  titles
                               theme  modificators  fonts  font-family-4  fonts-titles--sm">
                        <?php the_title(); ?>
                      </h3>
                      <?php //echo $post->post_type; ?>
                    </a>
                    <div class="theme  modificators  fonts  fonts-paragraph--justify
                                theme  modificators  fonts  fonts-paragraphs--md
                                theme  modificators  margins  margin-paragraph--sm-1">
                      <?php the_excerpt(); ?>
                    </div>
                    <a class="theme components  links  links-with-svg
                                theme  modificators  colors  links-color-1"
                       href="<?php the_permalink(); ?>">
                      <span class="text">Читать далее</span>
                      <svg  class="icon"
                            width="24" height="24"
                            viewBox="0 0 32 32">
                        <title>block-right</title>
                        <path d="M30 2h-28.013v28h28.010v-28zM10.333 25.414l9.686-9.414-9.69-9.414 0.797-0.813 10.534 10.227-10.534 10.24-0.794-0.826z"></path>
                      </svg>
                    </a>

                  </div>
                  <!--Text wrapper-->
                </div>
                <!--Post component-->
              </div>

            <?php endwhile; ?>
          </div>

          <div class="custom-pagination">
            <?php
            //previous_posts_link('Предыдущая страница');
            //next_posts_link(    'Следующая страница', $Blog_posts -> max_num_pages );
            ?>
            <?php
            echo paginate_links( array(
              'total' => $Blog_posts -> max_num_pages
            ));
            ?>
          </div>

            <?php else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>



            <?php wp_reset_postdata(); ?>





          <div class="page-blog__pagination
                      vendor  components  flexboxgrid  row">
            <div class="vendor  components  flexboxgrid  col  col-xs-12">
              <div class="theme  modificators  paddings  padding-block--md">
                <!--Pagination Component-->
                <div class="theme  components  paginations  pagination-1
                            vendor  modificators  flexboxgrid  flex-container  container--justify-content-center  container--align-items-center">
                  <!--Pagination button Prev-->
                  <a class="pagination-1__button
                            theme components  links  links-svg-in-svg-1"
                     href="#"
                     style="width:46px; height:46px;">
                    <svg class="theme  modificators  gradients  svg-fill-gradient-1
                                icon-internal" width="32" height="32" viewBox="0 0 32 32">
                      <linearGradient class="svg-gradient">
                        <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                        <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                      </linearGradient>
                      <title>rounded-right</title>
                      <path class="svg-path"  d="M20.781 25.146l0.691-0.691c0.611-0.614 0.611-1.606 0-2.218l-5.13-5.126c-0.304-0.304-0.458-0.707-0.458-1.107s0.15-0.8 0.458-1.107l5.13-5.13c0.611-0.614 0.611-1.606 0-2.218l-0.691-0.691c-0.614-0.611-1.606-0.611-2.218 0l-8.035 8.035c-0.304 0.304-0.458 0.707-0.458 1.107s0.15 0.8 0.458 1.107l8.035 8.035c0.611 0.611 1.603 0.611 2.218 0.003z"></path>
                    </svg>
                    <svg class="theme  modificators  gradients  svg-stroke-gradient-1
                                icon-external" width="46" height="46">
                      <linearGradient class="svg-gradient">
                        <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                        <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                      </linearGradient>
                      <circle class="svg-path"
                              r="20" cx="23" cy="23"
                              fill="transparent" stroke="black" stroke-width="3" />
                    </svg>
                  </a>
                  <!--Pagination button Prev-->
                  <div class="theme  modificators  fonts  font-family-3  fonts-pagination">
                    <a class="pagination-1__page-number  active"  href="#">
                      <span class="text">01</span>
                      <div class="line"></div>
                    </a>
                    <a class="pagination-1__page-number"  href="#">
                      <span class="text">02</span>
                      <div class="line"></div>
                    </a>
                    <a class="pagination-1__page-number"  href="#">
                      <span class="text">03</span>
                      <div class="line"></div>
                    </a>
                    <a class="pagination-1__page-number">
                      <span class="text">...</span>
                    </a>
                    <a class="pagination-1__page-number"  href="#">
                      <span class="text">08</span>
                      <div class="line"></div>
                    </a>
                  </div>
                  <!--Pagination button Next-->
                  <a class="pagination-1__button
                            theme components  links  links-svg-in-svg-1"  
                     href="#"
                     style="width:46px; height:46px;">
                    <svg class="theme  modificators  gradients  svg-fill-gradient-1
                                icon-internal" width="32" height="32" viewBox="0 0 32 32">
                      <linearGradient class="svg-gradient">
                        <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                        <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                      </linearGradient>
                      <title>rounded-right</title>
                      <path class="svg-path"  d="M13.437 25.139l8.035-8.032c0.307-0.307 0.458-0.707 0.458-1.107s-0.154-0.803-0.458-1.107l-8.035-8.035c-0.611-0.611-1.603-0.611-2.218 0l-0.691 0.691c-0.611 0.611-0.611 1.603 0 2.218l5.126 5.126c0.307 0.307 0.458 0.707 0.458 1.107s-0.154 0.803-0.458 1.107l-5.126 5.13c-0.611 0.611-0.611 1.603 0 2.218l0.691 0.691c0.614 0.608 1.606 0.608 2.218-0.006z"></path>
                    </svg>
                    <svg class="theme  modificators  gradients  svg-stroke-gradient-1
                                icon-external" width="46" height="46">
                      <linearGradient class="svg-gradient">
                        <stop class="svg-gradient--start" offset="0%" stop-color=""/>
                        <stop class="svg-gradient--end"   offset="100%" stop-color=""/>
                      </linearGradient>
                      <circle class="svg-path"
                              r="20" cx="23" cy="23"
                              fill="transparent" stroke="black" stroke-width="3" />
                    </svg>
                  </a>
                  <!--Pagination button Next-->
                </div>
                <!--Pagination Component-->
              </div>
            </div>
          </div>
        </div>
        <!--Posts-->


        <!--Sidebar-->
        <div class="vendor  components  flexboxgrid  col  col-md-4">
          <?php get_template_part('template-parts/sidebars/side-bar-1'); ?>
        </div>
        <!--Sidebar-->

      </div>
    </div>
    </section>
  </main>


  <div class="theme  modificators  containers  full-width">
    <?php get_template_part('template-parts/footers/footer-2'); ?>
  </div>
</div>


<?php get_template_part('template-parts/end-page'); ?>
