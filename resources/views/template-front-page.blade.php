{{--
  Template Name: Front page
--}}

@extends('layouts.app')

@section('content')
<div class="front-page">
  {{-- hero section --}}
  <div class="hero">
    @php
        $video_id = get_field('theme_video', 'options');
        $video_url = $video_id ? wp_get_attachment_url($video_id) : null;
    @endphp
    @if ($video_url)
        <div class="background-video" data-aos="fade-left" data-aos-delay="200">
            <video autoplay muted loop playsinline class="video-bg">
                <source src="{{ $video_url }}" type="video/mp4" loading="lazy">
                Your browser does not support the video tag.
            </video>
        </div>
    @endif
    <div class="hero__cont1">
      @php
      $logo_bg_id = get_field('hero_logobg', 'options'); // Get the image ID
      $logo_bg_url = $logo_bg_id ? wp_get_attachment_url($logo_bg_id) : null; // Get the image URL
      @endphp
      <div class="cont1" style="background-image: url('{{ $logo_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: left; background-color: rgba(0, 0, 0, 1.0);" loading="lazy">
      </div>
      <div class="cont2"></div>
    </div>
    <div class="hero-text">
      <h1 data-aos="fade-right" data-aos-delay="200">be the <span>game changer</span></h1>
      <p data-aos="fade-up" data-aos-delay="200">Our craftsmanship is equal to that of leading
      brands in the industry and we are so confident
      in our uniform quality that we back your order
      with a lifetime manufacturing warranty.
      </p>
    </div>
  </div>

  {{-- About our company --}}
  <div class="about">
    <div class="about__cont">
      <div class="">
        <h2 data-aos="fade-right" data-aos-delay="200">ABOUT OUR COMPANY</h2>
        <p data-aos="fade-up" data-aos-delay="200">
          We are a dedicated team of outsourced web and software
           developers, graphic designers, and project managers
           specializing in pattern making, website design, and
           comprehensive web development services. Our mission
           is to provide vital I.T. support and technology solutions
           that drive efficiency and innovation for QuickStrike Corp
           and PROLOOK Sports, based in Utah, USA.
          </p>
      </div>
      <div data-aos="fade-left" data-aos-delay="200">
        <img src="http://qstrikeinov.test/wp-content/uploads/2024/11/placewhy-holder.jpg" alt="">
      </div>
    </div>
  </div>
  {{-- Our history --}}
  <div class="history" >
    <div class="history__cont1">
      <h2 data-aos="fade-down" data-aos-delay="200">our history</h2>
      <p data-aos="fade-up" data-aos-delay="200">From humble beginnings to becoming a recognized leader in sports apparel and tech solutions,
        QStrike Innovations has continually pushed boundaries. Our story is a testament to decades of
        dedication, strategic partnerships, and unwavering passion for excellence. Explore our
        transformative milestones that have shaped who we are today.</p>
    </div>
    <div class="history__cont2" data-aos="fade-left" data-aos-delay="200">
    </div>
    <div class="history__cont3">
        <ul>
          @if(have_rows('history', 'option'))
          @while(have_rows('history', 'option')) @php the_row() @endphp
            <li data-aos="fade-up" data-aos-delay="200">
                  <h3 class="event-date">{{ get_sub_field('date') }}</h3>
                  <p class="event-description">{{ get_sub_field('happening') }}</p>
            </li>
            @endwhile
            @endif
        </ul>
    </div>
  </div>
  {{-- Mission Vission --}}
  <div class="mission-vision">
    <div class="mission-vision__cont">
      <h2 data-aos="fade-down" data-aos-delay="200">Mission and Vission</h2>
      <p data-aos="fade-right" data-aos-delay="200">At Qstrike Innovations, our vision is simple:</p>
      <blockquote class="text-darkgray" data-aos="fade-left" data-aos-delay="200">“TO BUILD <strong>SUPERIOR SPORTS APPAREL</strong> AND <strong>TECH</strong> FOR <strong>EVERY BODY</strong> ON EARTH.”</blockquote>
    </div>
  </div>
  {{-- Trusted by --}}
  <div class="trusted-by">
    <div class="trusted-by__cont">
      <p class="text-center py-6" data-aos="fade-down" data-aos-delay="200">worked with some of the best our there</p>
      @php
      $trusted_brands_id = get_field('trusted_brands', 'options'); // Get the image ID
      $trusted_brands_url = $trusted_brands_id ? wp_get_attachment_url($trusted_brands_id) : null; // Get the URL
      @endphp
      @if ($trusted_brands_url)
        <img src="{{ $trusted_brands_url }}" class="pb-6" alt="Trusted Brands" data-aos="fade-up" data-aos-delay="200">
      @else
        <img src="http://qstrikeinov.test/wp-content/uploads/2024/11/Content-Website-3.png" class="pb-6" alt="Fallback Image" data-aos="fade-up" data-aos-delay="200">
      @endif
    </div>
  </div>
  {{-- Partner factories --}}
  <div class="partner-factories">
    <div class="partner-factories__cont">
      <div class="cont1">
        <p class="heading uppercase text-secondary" data-aos="fade-right" data-aos-delay="200">
          partner factories
        </p>
      </div>
      <div class="cont2">
        <ul>
          @if ($partnerFactories)
            @foreach ($partnerFactories as $factory)
            <li data-aos="fade-up" data-aos-delay="200">
                {{-- Display the flag image --}}
                @if ($factory['flag'])
                  {!! wp_get_attachment_image($factory['flag'], 'full') !!}
                @endif
                {{-- Display the country name --}}
                <p class="country">{{ $factory['country'] }}</p>
            </li>
            @endforeach
          @endif
        </ul>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection


