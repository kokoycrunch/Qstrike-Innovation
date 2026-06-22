@extends('layouts.app')

@section('content')
<div class="latest-news-post">
  {{-- Hero --}}
  <div class="hero">
    <div class="wrapper">
          <h1>LATEST NEWS</h1>
          @php
            $latest_post_args = [
              'post_type' => 'post',
              'posts_per_page' => 1, // Fetch only the latest post
              'orderby' => 'date',
              'order' => 'DESC',
            ];
            $latest_post_query = new WP_Query($latest_post_args);
          @endphp

          @if ($latest_post_query->have_posts())
            @php $latest_post_query->the_post() @endphp

              <div class="latest-post-container">

                @if (has_post_thumbnail())
                  <img src="{{ get_the_post_thumbnail_url(null, 'large') }}" alt="{{ get_the_title() }}">
                @else
                  <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image">
                @endif
                <h3>{!! get_the_title() !!}</h3>
                <p>{!! wp_trim_words(get_the_excerpt(), 100) !!}</p>
                <button><a href="{{ get_permalink() }}">Read Article</a></button>

              </div>

            @php wp_reset_postdata() @endphp
          @else
            <h2 class="text-center">No Posts Available</h2>
          @endif
          <hr class="border-graybase">
    </div>
  </div>


  {{-- Latest news lists --}}
  <div class="latest-news-list">
    <h4>EXPLORE THE LATEST EDGE OF INNOVATION</h4>
    <div class="wrapper">
      {{-- Custom Query for Posts --}}
      @php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;

      // Get the ID of the latest post displayed in the hero section
      $excluded_post_id = $latest_post_query->post->ID ?? 0;

      $args = [
        'post_type' => 'post', // Default post type
        'posts_per_page' => 5, // Limit to 5 posts per page
        'paged' => $paged, // Enable pagination
        'post__not_in' => [$excluded_post_id], // Exclude the latest post
      ];
      $latest_posts_query = new WP_Query($args);
    @endphp

      @if ($latest_posts_query->have_posts())
        @while ($latest_posts_query->have_posts())
          @php $latest_posts_query->the_post() @endphp

          <div class="latest-news-card">
            <div class="img-cont">
              @if (has_post_thumbnail())
                <img src="{{ get_the_post_thumbnail_url(null, 'medium') }}" alt="{{ get_the_title() }}">
              @else
                <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image">
              @endif
            </div>
            <div class="text-cont">
              <h6>{!! get_the_title() !!}</h6>
              <span class="text-xs font-medium">Posted by: {!! get_the_author() !!} on {!! get_the_date() !!}</span>
              <p>{!! wp_trim_words(get_the_excerpt(), 30) !!}</p>
              <br>
              <span class="text-small rounded-full px-8 py-2 bg-primary text-secondary w-max"><a href="{{ get_permalink() }}">Read more...</a></span>
            </div>
          </div>
        @endwhile
    </div>
        {{-- Pagination --}}
    <div class="pagination">
      {!! paginate_links([
        'total' => $latest_posts_query->max_num_pages,
        'current' => $paged,
        'format' => '?paged=%#%',
        'prev_text' => __('« Previous'),
        'next_text' => __('Next »'),
      ]) !!}
    </div>

    @php wp_reset_postdata() @endphp
  @else
    <p>No posts found.</p>
  @endif
  </div>
</div>
@endsection
