<header class="header-cont">

<div class="header-primary">
    <div class="logo">
      <a class="brand site-logo" href="{{ home_url('/') }}">
        {!! wp_get_attachment_image( $siteLogo, 'full' ) !!}
      </a>
    </div>
    <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        @endif
    </nav>

      <div class="menu-icon">
        <i class="fi fi-br-menu-burger" onclick="toggleMenu()"></i>
      </div>
</div>

</header>

