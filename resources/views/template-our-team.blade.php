{{--
  Template Name: Our Team
--}}

@extends('layouts.app')

@section('content')
<div class="our-team">
  {{-- Hero --}}
  <div class="hero">
    @php
    $ourteam_bg_id = get_field('our_teambg', 'options'); // Get the image ID
    $ourteam_bg_url = $ourteam_bg_id ? wp_get_attachment_url($ourteam_bg_id) : null; // Get the image URL
    @endphp
    <div class="hero__cont1" style="background-image: url('{{ $ourteam_bg_url }}'); background-size: cover; background-repeat: no-repeat;">
      <div></div>
      <h1 data-aos="fade-right" data-aos-delay="200">{{ $ourTeamHeader1 }} <b>{{ $ourTeamHeader2 }}</b></h1>
    </div>
    <div class="hero__cont2">
      <p data-aos="fade-down" data-aos-delay="200">{{ $ourTeamSubheadline }}</p>
      <blockquote data-aos="fade-left" data-aos-delay="200" >
        {!! $ourTeamSubheadlineEmphasized !!}
      </blockquote>
    </div>
  </div>
  {{-- Company Core Values --}}
  <div class="core-values">
    <div class="wrapper">
          <div class="core-values__cont1">
            <h2 class="text-secondary" data-aos="fade-right" data-aos-delay="200">{{ $coreValuesHeading }}</h2>
          </div>
          <div class="core-values__cont2">
            <div class="accordion">
              @if ($coreValues)
              @foreach ($coreValues as $core)
              <div class="accordion-item">
                <div>
                    <div class="accordion-header h-full bg-darkgray" data-aos="fade-left" data-aos-delay="200">
                      <h3 class="">
                        <i class="fi fi-bs-angle-double-right"></i>{{ $core['core_value'] }}
                      </h3>
                    </div>
                    <div class="accordion-content bg-lightgray ">
                        <p>{{ $core['description'] }}.</p>
                    </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
    </div>
  </div>
  {{-- Behind qstrike --}}
  <div class="qstrike-people">
      <div class="wrapper">
            <h2 data-aos="fade-right" data-aos-delay="200"> {{$behindQstrikeHeading1}} <span class="text-primary">{{$behindQstrikeHeading2}}</span></h2>
            <p class="subheading" data-aos="fade-up" data-aos-delay="200">
              {{$behindQstrikeSubheading}}
            </p>
            {{-- C-Suite --}}
            <div data-aos="fade-left" data-aos-delay="200">
              <hr>
            </div>
            <div class="qstrike-faces">
              <div class="qstrike-faces__cont">
                @if (have_rows('faces_behind_qstrike', 'options'))
                @while (have_rows('faces_behind_qstrike', 'options')) @php the_row() @endphp
                  @php
                      $main_image_url = wp_get_attachment_image_url(get_sub_field('main_image'), 'full');
                      $hover_image_url = wp_get_attachment_image_url(get_sub_field('hover_image'), 'full') ?: $main_image_url; // Fallback to main image if no hover image
                  @endphp
                      <div data-aos="fade-up" data-aos-delay="200">
                          <div class="employee-card col-span-1" data-hover-image="{{ $hover_image_url }}">
                            <img src="{{ $main_image_url }}" alt="{{ get_sub_field('full_name') }}'s Image" class="employee-image" loading="lazy">
                          </div>
                          <div class="overlay">
                            <h4>{{ get_sub_field('full_name') }}</h4>
                            <p>{{ get_sub_field('position') }}</p>
                          </div>
                      </div>
                @endwhile
                @endif
              </div>
            </div>

      </div>
  </div>

</div>



@endsection

