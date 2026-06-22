<footer class="">
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
  <div class="list">
    <div class="list-cont">
      <div class="w-full">
        <a class="brand site-logo" href="{{ home_url('/') }}">
          {!! wp_get_attachment_image( $siteLogo, 'full' ) !!}
        </a>

      </div>
    </div>

    <div class="list-cont">
      <h6>QUICK LINKS</h6>
      @if (has_nav_menu('footer_menu'))
        <nav class="footer-menu">
            {!! wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
        </nav>
      @endif

    </div>
    <div class="list-cont">
      <h6>CONTACT US</h6>
        <ul class="contact-info">
          <li><span class="dashicons dashicons-email"></span>hrdepartment@qstrike.com</li>
          <li><span class="dashicons dashicons-phone"></span>045 6461413</li>
          <li><span class="dashicons dashicons-location"></span>2F Alson Sportswear Inc Bldg Old
            Road Mcarthur Hway Telabastagan</li>
        </ul>
    </div>
    <div class="list-cont">
      <h6>FOLLOW US</h6>
      <ul class="flex gap-3">
        @if ($socialMediaIcons)
        @foreach ($socialMediaIcons as $socmedicons)
        <li>
            {{-- Display the flag image --}}
            @if ($socmedicons['social_media_icons'])
              <a href="{{ $socmedicons['link'] }}">{!! wp_get_attachment_image($socmedicons['social_media_icons'], 'full') !!}</a>
            @endif
            {{-- Display the country name --}}
        </li>
        @endforeach
        @endif
      </ul>
    </div>
  </div>
  <div class="copyright">
    <p>© 2025. ALL RIGHTS RESERVED QUICKSTRIKE MANUFACTURING</p>
  </div>
  <!-- Search Overlay -->
  <div id="search-overlay" class="search-overlay">
    <div class="search-box">

      <input
        type="text"
        id="live-search-input"
        placeholder="Search posts..."
        aria-label="Search input"
        autocomplete="off"
      >

      <button class="close-search" aria-label="Close search">✕</button>

    </div>
    <!-- Results container -->
    <div id="search-results" class="search-results"></div>
  </div>
</footer>
