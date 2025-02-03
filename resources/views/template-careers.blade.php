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

    // Custom query for Positions post type
  $args1 = [
      'post_type' => 'positions', // Change this if your post type is named differently
      'posts_per_page' => -1, // Adjust the number of posts to display (-1 for all posts)
      'post_status' => 'publish', // Only show published posts
  ];

  $args2 = [
      'post_type' => 'internships', // Change this if your post type is named differently
      'posts_per_page' => -1, // Adjust the number of posts to display (-1 for all posts)
      'post_status' => 'publish', // Only show published posts
  ];

  $positions_query2 = new WP_Query($args2); // Run the custom query
  $positions_query = new WP_Query($args1); // Run the custom query
  @endphp

  <div class="hero" style="background-image: url('{{ $career_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: left;">
    <div class="bg-qstrike" style="background-image: url('{{ $careerhero_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: right;" data-aos="fade-left" data-aos-delay="10">
        <div class="hero__cont">
          <h1 data-aos="fade-right" data-aos-delay="200" ><span class="heading-1">{{$careersHeroHeading1}}</span><br/> <span class="heading-2">{{$careersHeroHeading2}}</span></h1>
          <p data-aos="fade-up" data-aos-delay="200">
            {{$careersSubheading}}
          </p>
        </div>
    </div>
  </div>
  {{-- Job-list --}}
  <div class="job-list">
    <div class="wrapper">
      <h2 data-aos="fade-down" data-aos-delay="200">{{$openPositionHeading}}</h2>
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
                  @if ($positions_query->have_posts())
                  @while ($positions_query->have_posts())
                    @php $positions_query->the_post(); @endphp
                    @php
                        // Get the title from the ACF field, fallback to post title if ACF field is empty
                        $position_title = get_field('title'); // ACF field name is 'title'
                        $position_title = $position_title ? $position_title : get_the_title();

                        $position_location = get_field('location'); // ACF field name is 'location'
                    @endphp
                      <div class="job-card">

                          <div class="job-card__cont1">
                                      <h3>{{ $position_title }}</h3>
                          </div>

                          <div class="job-card__cont2">
                                      <p class="location">{{ $position_location ? $position_location : 'Location not specified' }}</p>
                                      <form action="{{ get_permalink() }}" method="get">
                                        <button class="bg-graybase px-6 py-1">Apply</button>
                                      </form>
                          </div>

                      </div>
                  @endwhile
                  @else
                  <p>No positions available at the moment.</p>
                  @endif
                  @php wp_reset_postdata(); @endphp

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
                    @if ($positions_query2->have_posts())
                    @while ($positions_query2->have_posts())
                      @php $positions_query2->the_post(); @endphp
                      @php
                          // Get the title from the ACF field, fallback to post title if ACF field is empty
                          $position_title = get_field('title'); // ACF field name is 'title'
                          $position_title = $position_title ? $position_title : get_the_title();

                          $position_location = get_field('location'); // ACF field name is 'location'
                      @endphp
                        <div class="job-card">

                            <div class="job-card__cont1">
                                        <h3>{{ $position_title }}</h3>
                            </div>

                            <div class="job-card__cont2">
                                        <p class="location">{{ $position_location ? $position_location : 'Location not specified' }}</p>
                                        <form action="{{ get_permalink() }}" method="get">
                                          <button class="bg-graybase px-6 py-1">Apply</button>
                                        </form>
                            </div>

                        </div>
                    @endwhile
                    @else
                    <p>No positions available at the moment.</p>
                    @endif
                    @php wp_reset_postdata(); @endphp

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
      <h2 data-aos="fade-right" data-aos-delay="200"><span>{{ $whyQstrike }}</span></h2>
      <ul>
          @if ($whyQstrikeInnovations)
              @foreach ($whyQstrikeInnovations as $item)
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="fi fi-rs-shield-trust bullet-icon"></i>
                  <h4>{{ $item['title'] }}   –
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



