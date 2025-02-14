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
    <div class="hero__cont">
      @php
      $logo_bg_id = get_field('hero_logobg', 'options'); // Get the image ID
      $logo_bg_url = $logo_bg_id ? wp_get_attachment_url($logo_bg_id) : null; // Get the image URL
      @endphp
      <div class="cont1" style="background-image: url('{{ $logo_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: left; background-color: rgba(0, 0, 0, 1.0);" loading="lazy">
      </div>
      <div class="cont2"></div>
    </div>
    <div class="hero-text">
      <h1 data-aos="fade-right" data-aos-delay="200">{{ $homePageHeroHeader1 }} <span>{{ $homePageHeroHeader2 }}</span></h1>
      <p data-aos="fade-up" data-aos-delay="200">{{ $homePageHeroSubheadline }}</p>
    </div>
  </div>

  {{-- About our company --}}
  <div class="about">
    @php
    $about_image = get_field('about_our_company', 'options');
    $about_image_url = $about_image ? wp_get_attachment_url($about_image) : null;
    @endphp
    <div class="about__cont">
      <div class="">
        <h2>{{ $aboutHeader }}</h2>
        <p>{{ $aboutSubheadline }}</p>
      </div>
      <div>
        <img src="{{ $about_image_url }}" alt="">
      </div>
    </div>
  </div>
  {{-- Our history --}}
  <div class="history" >
    @php
    $historyvideo_id = get_field('history_video', 'options');
    $historyvideo_url = $historyvideo_id ? wp_get_attachment_url($historyvideo_id) : null;
    @endphp
    <div class="history__cont1">
      <h2>{{ $ourHistoryHeader }}</h2>
      <p> {{ $ourHistorySubheadline }} </p>
    </div>
    <div class="history__cont2">
      @if ($historyvideo_url)
        <div class="video-container">
          <video id="history-video" autoplay muted loop playsinline class="video-bg">
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
    </div>
    <div class="history__cont3">
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
    </div>
  </div>
  {{-- Mission Vission --}}
  <div class="mission-vision">
    <div class="mission-vision__cont">
      <h2> {{ $missioniVissionHeader }} </h2>
      <p> {{ $missionSubHeader}} </p>
      <blockquote class="text-darkgray">“Instilling <strong>confidence</strong> and <strong>excitement</strong> in <strong>athletes</strong> and <strong>coaches</strong> by
        <strong>efficiently bringing to market technology-driven, innovative, high-quality, custom sports apparel</strong> we can all be proud of.”</blockquote>
    </div>
  </div>
  <div class="mission-vision2">
    <div class="mission-vision__cont">
      <p> {{ $missionVissionSubheader }} </p>
      <blockquote class="text-darkgray">“To build <strong>superior sports apparel</strong> and <strong>tech</strong> for <strong>every body</strong> on earth.”</blockquote>
    </div>
  </div>
</div>
@endsection


