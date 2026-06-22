{{--
  Template Name: Front page
--}}

@extends('layouts.app')

@section('content')
<div class="front-page">
  {{-- hero section --}}
  <div class="hero">
    <div class="herocont">
          <div class="herocont__text">
            <div class="flex flex-col gap-10">
                <h1 class="max-w-[466px] text-primary">{{ $homePageHeroHeader1 }} <br>changer</h1>
                <p data-aos="fade-up" data-aos-delay="200">{{ $homePageHeroSubheadline }}</p>
            </div>
          </div>
          <div class="herocont__carousel">
            <img src="http://qstrikeinov.test/wp-content/uploads/2025/05/Womens-Soccer-v3-1-2.png" alt="">
          </div>
    </div>
  </div>

  {{-- About our company --}}
  <div class="about">
    <div class="about_wrapper">
          <div class="about__cont">
              <h2>{{ $aboutHeader }}</h2>
              <p>{{ $aboutSubheadline }}</p>
          </div>
    </div>
  </div>
  {{-- Mission Vission --}}
  <div class="mission-vision">
    <div class="our-mission">
      <div class="our-mission-image">
        <img src="http://qstrikeinov.test/wp-content/uploads/2025/05/Mission-1.png" alt="">
      </div>
      <div class="our-mission-text">
        <div>
            <h3 class="uppercase"> OUR MISSION </h3>
            <p> {{$missionSubHeader}} </p>
            <span class="description">“Instilling confidence and excitement in athletes and coaches by efficiently bringing to market technology-driven, innovative, high-quality, custom sports apparel we can all be proud of.”
            </span>
        </div>
      </div>
      </div>
      <div class="our-mission our-mission-reverse">
        <div class="our-mission-text">
          <div>
              <h3 class="uppercase"> OUR VISSION </h3>
              <p> At Qstrike Innovations, our vision is simple: </p>
              <span class="description">“To build superior sports apparel and tech for every body on earth.”
              </span>
          </div>
        </div>
        <div class="our-mission-image">
          <img src="http://qstrikeinov.test/wp-content/uploads/2025/05/Vission-1.png" alt="">
        </div>
      </div>
  </div>
  {{-- End of Mission Vision --}}
  <div class="core-values">
    <h2>CORE VALUES</h2>
      <div class="core-values-container">
        <div class="core-values-item">
          <i class="fi fi-ss-medal text-[56px]"></i>
          <h4>EXCELLENCE</h4>
          <p>
            As an organization, we only aim to produce exceptional results for our customers and clients.
             Across diverse set expertise and specializations, our people demonstrate and exemplify both
             professional and personal excellence
          </p>
        </div>
        <div class="core-values-item">
          <i class="fi fi-ss-medal text-[56px]"></i>
          <h4>INNOVATION</h4>
          <p>We pioneer the industry by constantly reimagining the use of technology to improve client productivity, market & product expansion, reduction in cycle time as well as improved factory performance which ultimately drives revenue and growth. Trailblazing technology development is foundational to our long-term business strategies</p>
        </div>
        <div class="core-values-item">
          <i class="fi fi-ss-medal text-[56px]"></i>
          <h4>TEAM WORK</h4>
          <p>We take advantage of relevant synergies which exist between individuals and teams of varied specializations and expertise. Together we are stronger, and the unity of our actions more powerful to push the brand forward</p>
        </div>
        <div class="core-values-item">
          <i class="fi fi-ss-medal text-[56px]"></i>
          <h4>AGILITY AND SPEED</h4>
          <p>The aggregate & collective efforts of our diverse teams and experts allow us to adopt, respond to and deliver our commitments to our customers. Fast and consistent will always beat the slow and steady</p>
        </div>
        <div class="core-values-item">
          <i class="fi fi-ss-medal text-[56px]"></i>
          <h4>INTEGRITY</h4>
          <p>As an organization, we only aim to produce exceptional results for our customers and clients. Across diverse set expertise and specializations, our people demonstrate and exemplify both professional and personal excellence</p>
        </div>
        <div class="core-values-item">
          <i class="fi fi-ss-medal text-[56px]"></i>
          <h4>QUALITY</h4>
          <p>High quality products lead to unshakable customer loyalty and is an essential competitive advantage to increase market leadership and growth. Exceptionally happy and satisfied customers are key drivers to long- term revenue and profitability</p>
        </div>
      </div>
  </div>
  {{-- Our history --}}
  <div class="about">
    <div class="about_wrapper2">
          <div class="about__cont2">
              <h2>{{ $ourHistoryHeader }}</h2>
              <p>{{ $ourHistorySubheadline }}</p>
          </div>
    </div>
  </div>
  <div class="history" >
    {{-- @php
    $historyvideo_id = get_field('history_video', 'options');
    $historyvideo_url = $historyvideo_id ? wp_get_attachment_url($historyvideo_id) : null;
    @endphp
    <div class="history__cont2">
      @if ($historyvideo_url)
        <div class="video-container">
          <video id="history-video" muted loop playsinline class="video-bg">
            <source src="{{ $historyvideo_url }}" type="video/mp4">
          </video>
          <div class="video-controls" id="video-controls">
            <button id="play-pause" class="control-btn">⏸️</button>
            <input id="progress-bar" type="range" min="0" value="0" step="1">
            <button id="volume-toggle" class="control-btn">🔊</button>
            <button id="fullscreen-btn" class="control-btn">⛶</button>
          </div>
        </div>
      @endif
    </div> --}}
    {{-- <div class="history__cont3">
        <ul>
          @if(have_rows('our_history_timeline'))
          @while(have_rows('our_history_timeline')) @php the_row() @endphp
            <li>
                  <h3 class="event-date">{{ get_sub_field('date') }}</h3>
                  <p class="event-description">{{ get_sub_field('milestone') }}</p>
            </li>
          @endwhile
          @endif
        </ul>
    </div> --}}
  </div>
  {{-- Image Slider Section --}}
  <hr/>
        <div class="slider-wrapper" id="sliderWrapper">

          <div class="slider" id="slider">
            <div class="slide" style="background-image: url('http://qstrikeinov.test/wp-content/uploads/2025/06/2023.png');"></div>
            <div class="slide" style="background-image: url('http://qstrikeinov.test/wp-content/uploads/2025/06/2020.png');"></div>
            <div class="slide" style="background-image: url('http://qstrikeinov.test/wp-content/uploads/2025/06/2018.png');"></div>
            <div class="slide" style="background-image: url('http://qstrikeinov.test/wp-content/uploads/2025/06/2013.png');"></div>
            <div class="slide" style="background-image: url('http://qstrikeinov.test/wp-content/uploads/2025/06/2010.png');"></div>
            <div class="slide" style="background-image: url('http://qstrikeinov.test/wp-content/uploads/2025/06/1993.png');"></div>
          </div>

        </div>
</div>
@endsection


