<div class="vendor  components  semantic-ui  main-nav-1
            theme  modificators  behaviors  animation">
  <div class="ui teal buttons">
    <div class="ui dropdown  floating  icon"
         id="js-semantic-ui-main-nav-1">
      <button class="hamburger  hamburger--3dx"
              type="button"
              id="js-semantic-ui-main-nav-1">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
      </button>

      <?php
      wp_nav_menu( array(
          'container' => '',
          'menu_class'=>'menu  main-nav-1__menu'
      ));
      ?>

    </div>
  </div>
</div>


