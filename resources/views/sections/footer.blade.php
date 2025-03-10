<footer class="content-info w-full flex justify-center">
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
  <div class="list">
    <div class="list-cont">
      <div class="w-full">
        <a class="brand site-logo" href="{{ home_url('/') }}">
          {!! wp_get_attachment_image( $siteLogo, 'full' ) !!}
        </a>
        <h3 class="text-darkgray md:w-[12.50rem] pb-4"> BE THE <span class="italic text-primary"><strong>GAME CHANGER</strong></span></h3>
        <hr class="border-darkgray">
        <ul class="contact-info">
          <li><span class="dashicons dashicons-email"></span>hrdepartment@qstrike.com</li>
          <li><span class="dashicons dashicons-phone"></span>045 6461413</li>
          <li><span class="dashicons dashicons-location"></span>2F Alson Sportswear Inc Bldg Old
            Road Mcarthur Hway Telabastagan</li>
        </ul>
      </div>
    </div>
    <div class="list-cont">
      <h5>SOCIAL MEDIA</h5>
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
    <div class="list-cont">
      <h5>QUICK LINKS</h5>
      @if (has_nav_menu('footer_menu'))
        <nav class="footer-menu">
            {!! wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
        </nav>
      @endif

    </div>
  </div>
  <p class="text-center py-10">© 2024. ALL RIGHTS RESERVED QUICKSTRIKE MANUFACTURING</p>
  <p>Max Input Vars: {{ ini_get('max_input_vars') }}</p>

</footer>
