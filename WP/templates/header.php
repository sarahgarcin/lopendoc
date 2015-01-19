<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 820.6 183.9" enable-background="new 0 0 820.6 183.9" xml:space="preserve">
           <g class="forme-opaque">
            <rect x="417.8" y="48.9" fill="#EF444E" width="87.3" height="87.3"/>
            <rect x="567.6" y="7.4" fill="#EF444E" width="44.5" height="128.6"/>
            <circle fill="#EF444E" cx="155.6" cy="92.6" r="44.5"/>
            <circle fill="#EF444E" cx="670.4" cy="92.6" r="44.5"/>
            <rect x="212.5" y="48.5" fill="#EF444E" width="44.5" height="128.6"/>
            <rect x="6.2" y="6.9" fill="#EF444E" width="44.5" height="128.6"/>
            <polyline fill="#EF444E" points="400.7,49.3 357,92.9 313.4,49.3 "/>
            <polyline fill="#EF444E" points="313.4,136.6 357,92.9 400.7,136.6 "/>
            <polyline fill="#EF444E" points="814.7,49.3 771,92.9 727.4,49.3 "/>
            <polyline fill="#EF444E" points="727.4,136.6 771,92.9 814.7,136.6 "/>
            <polyline fill="#EF444E" points="727.4,49.3 771,92.9 727.4,136.6 "/>
            <polyline fill="#EF444E" points="313.4,49.3 357,92.9 313.4,136.6 "/>
           </g>
           <g class="forme-alpha">
            <polyline opacity="0.8" fill="#FCB248" points="727.4,49.3 771,92.9 727.4,136.6 "/>
            <polygon opacity="0.8" fill="#FCB248" points="63.5,7.6 84.8,50 105.9,7.5 "/>
            <polyline opacity="0.8" fill="#FCB248" points="417.8,48.9 479.5,48.9 479.5,110.6 "/>
            <path opacity="0.8" fill="#FCB248" d="M612.1,91.6c0,24.6-19.9,44.5-44.5,44.5c-24.6,0-44.5-19.9-44.5-44.5
              c0-24.5,19.9-44.5,44.5-44.5C592.2,47.2,612.1,67.1,612.1,91.6z"/>
            <path opacity="0.8" fill="#FCB248" d="M301.4,92.4c0,24.6-19.9,44.5-44.5,44.5c-24.6,0-44.5-19.9-44.5-44.5
              c0-24.5,19.9-44.5,44.5-44.5C281.5,47.9,301.4,67.8,301.4,92.4z"/>
            <polyline opacity="0.8" fill="#FCB248" points="67.9,135.6 6.2,135.6 6.2,73.9 "/>
            <circle opacity="0.8" fill="#FCB248" cx="670.4" cy="92" r="22.2"/>
            <circle opacity="0.8" fill="#FCB248" cx="155.6" cy="92" r="22.2"/>
            <polygon opacity="0.8" fill="#FCB248" points="313.4,136.6 400.7,92.9 313.4,49.3 "/>
           </g>
        </svg>
        <div class="lopendocInstance">
			<?php echo custom_bloginfo(); ?>
        </div>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
