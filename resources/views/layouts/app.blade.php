<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    <style>
              :root {
      --slide-width: 375px;
      --slide-gap: 32px;
    }
    .slider-wrapper {
      /* position: absolute; */
      /* top: 50%;
      left: 0; */
      width: 100vw;
      height: 100%;
      /* transform: translateY(-50%); */
      overflow: hidden;
      cursor: grab;
      touch-action: pan-y;
      margin: 64px 0 128px 0;
      padding: 0 0 0 0;
    }

    .slider {
      display: flex;
      flex-direction: row-reverse;
      gap: var(--slide-gap);
      transition: transform 0.3s ease;
      will-change: transform;
      height: 100%;
    }

    .slide {
      width: var(--slide-width);
      height: var(--slide-width);
      flex-shrink: 0;
      background-size: cover;
      background-position: center;
      background-color: #ccc;
      border-radius: 10px;
      user-select: none;
      pointer-events: none;
      /* box-shadow: 0px 100px 80px 0px rgba(0, 0, 0, 0.07), 0px 41.778px 33.422px 0px rgba(0, 0, 0, 0.05), 0px 22.336px 17.869px 0px rgba(0, 0, 0, 0.04), 0px 12.522px 10.017px 0px rgba(0, 0, 0, 0.04), 0px 6.65px 5.32px 0px rgba(0, 0, 0, 0.03), 0px 2.767px 2.214px 0px rgba(0, 0, 0, 0.02); */
    }
    @media (max-width: 1024px) {
      :root {
        --slide-width: 240px;
      }
    }

    @media (max-width: 768px) {
      :root {
        --slide-width: 180px;
      }
    }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RZ8HKPFCG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-3RZ8HKPFCG');
    </script>
  </head>

  <body @php(body_class())>

    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
{{-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    const searchButtons = document.querySelectorAll('.search-btn, .search-btn2');
    const searchOverlay = document.getElementById('search-overlay');
    const closeSearch = document.querySelector('.close-search');

    searchButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        searchOverlay.classList.add('active');
      });
    });

    closeSearch.addEventListener('click', () => {
      searchOverlay.classList.remove('active');
    });

    // Close when clicking outside the search box
    searchOverlay.addEventListener('click', (e) => {
      if (e.target === searchOverlay) {
        searchOverlay.classList.remove('active');
      }
    });
  });
</script> --}}
  </body>
</html>
