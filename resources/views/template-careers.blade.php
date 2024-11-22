{{--
  Template Name: Careers
--}}

@extends('layouts.app')

@section('content')
<div class="careers">
  {{-- Hero --}}
  @php
  $career_bg_id = get_field('career_logobg', 'options');
  $career_bg_url = $career_bg_id ? wp_get_attachment_url($career_bg_id) : null;
  $careerhero_bg_id = get_field('career_herobg', 'options'); // Get the image ID
  $careerhero_bg_url = $careerhero_bg_id ? wp_get_attachment_url($careerhero_bg_id) : null; // Get the image URL
  @endphp
  <div class="hero" style="background-image: url('{{ $career_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: left;">
    <div class="bg-qstrike" style="background-image: url('{{ $careerhero_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: right;" data-aos="fade-left" data-aos-delay="10">
        <div class="hero__cont">
          <h1 data-aos="fade-right" data-aos-delay="200">build your<br/> career with<br/> <span>qstrike<br/> innovations</span></h1>
          <p data-aos="fade-up" data-aos-delay="200">Explore new possibilities with a team that fosters creativity,
            collaboration, and growth every step of the way.
          </p>
        </div>
    </div>
  </div>
  {{-- Job-list --}}
  <div class="job-list">
    <div class="wrapper">
      <h2 data-aos="fade-down" data-aos-delay="200">be part of our <strong>team!</strong></h2>
      {{-- Regular position --}}
      <div class="accordion2">
        <div class="accordion-item2">
          <div>
              <div class="accordion-header2 h-full bg-primary" data-aos="fade-left" data-aos-delay="200">
                <h3 class="">
                  <i class="fi fi-bs-angle-double-right"></i> Regular Position
                </h3>
              </div>
              <div class="accordion-content2">
                <div class="position-list">
                  @if (have_rows('regular_position', 'option')) {{-- Correct key and options scope --}}
                  @while (have_rows('regular_position', 'option')) @php the_row() @endphp
                    <div class="job-card">
                      <div class="job-card__cont1">
                              @php
                                  $icon_id = get_sub_field('icon');
                                  $icon_url = $icon_id ? wp_get_attachment_image_url($icon_id, 'full') : null;
                              @endphp
                              @if ($icon_url)
                                  <img src="{{ $icon_url }}" alt="{{ get_sub_field('position') }}" class="job-icon">
                              @endif
                                  <h3>{{ get_sub_field('position') }}</h3>
                      </div>
                            @php $location = get_sub_field('location') @endphp
                      <div class="job-card__cont2">
                                  <p>{{ $location == 'option1' ? 'Work from home' : 'On site' }}</p>
                                  <button class="bg-graybase px-6 py-1"><b>Apply</b></button>
                      </div>
                    </div>
                  @endwhile
                @endif
                </div>
              </div>
          </div>
        </div>
      </div>
      {{-- Internship --}}
      <div class="accordion2">
        <div class="accordion-item2">
          <div>
              <div class="accordion-header2 h-full bg-primary" data-aos="fade-left" data-aos-delay="200">
                <h3 class="">
                  <i class="fi fi-bs-angle-double-right"></i> Internship
                </h3>
              </div>
              <div class="accordion-content2">
                <div class="position-list">
                  @if (have_rows('internship', 'option')) {{-- Correct key and options scope --}}
                  @while (have_rows('internship', 'option')) @php the_row() @endphp
                    <div class="job-card">
                      <div class="job-card__cont1">
                              @php
                                  $icon_id = get_sub_field('icon');
                                  $icon_url = $icon_id ? wp_get_attachment_image_url($icon_id, 'full') : null;
                              @endphp
                              @if ($icon_url)
                                  <img src="{{ $icon_url }}" alt="{{ get_sub_field('position') }}" class="job-icon">
                              @endif
                                  <h3>{{ get_sub_field('position') }}</h3>
                      </div>
                            @php $location = get_sub_field('location') @endphp
                      <div class="job-card__cont2">
                                  <p>{{ $location == 'option1' ? 'Work from home' : 'On site' }}</p>
                                  <button class="bg-graybase px-6 py-1"><b>Apply</b></button>
                      </div>
                    </div>
                  @endwhile
                @endif
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  {{-- Why Qstrike --}}
  <div class="why-qstrike">
    <div class="wrapper">
      <h2 data-aos="fade-right" data-aos-delay="200">Why <span>Qstrike Innovations?</span></h2>
      <ul>
          @if ($whyQstrike)
              @foreach ($whyQstrike as $item)
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="fi fi-rs-shield-trust bullet-icon"></i>
                  <h4>{{ $item['why'] }}   –
                    <span>
                      {{ $item['description'] }}
                    </span>
                  </h4>
              </li>
              @endforeach
          @endif
      </ul>
    </div>
  </div>
{{-- Testing area --}}

</div>
@endsection
