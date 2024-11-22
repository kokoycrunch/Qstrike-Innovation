<header class="header-primary topnav">
  <div class="w-full flex justify-center">
      <div class="navigation-container">
            <a class="brand site-logo" href="{{ home_url('/') }}">
              {!! wp_get_attachment_image( $siteLogo, 'full' ) !!}
            </a>
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                  <span id="nav-label" hidden>Navigation</span>
                  <button id="btnOpen" class="topnav__open" aria-expanded="false" aria-labelledby="nav-label"><span class="dashicons dashicons-menu-alt3"></span></button>
                  <div class="topnav__menu" role="dialog" aria-labelledby="nav-label">
                    <button id="btnClose" aria-label="Close" class="topnav__close"><span class="dashicons dashicons-exit"></span></button>
                    @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
                    @endif
                  </div>
                </nav>
      </div>
  </div>
</header>


