@extends('layouts.app')

@section('content')
<div class="latest-news-post">
  {{-- Hero --}}
  <div class="hero">
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

      <div class="latest-post">
        <div class="latest-post-container">
          <h1>{!! get_the_title() !!}</h1>
          <h6>Posted by: {{ get_the_author() }} on {{ get_the_date() }}</h6>
          <div class="news-content">
            <div class="panel-1">
              <div class="image-container">
                @if (has_post_thumbnail())
                  <img src="{{ get_the_post_thumbnail_url(null, 'large') }}" alt="{{ get_the_title() }}">
                @else
                  <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image">
                @endif
              </div>
            </div>
            <div class="panel-2">
              <p>{!! wp_trim_words(get_the_excerpt(), 100) !!}</p>
              <h5><a href="{{ get_permalink() }}" class="link-to-post">Read Article</a></h5>
            </div>
          </div>
        </div>
      </div>
      @php wp_reset_postdata() @endphp
    @else
      <h2 class="text-center">No Posts Available</h2>
    @endif
  </div>

  {{-- Latest news lists --}}
  <div class="latest-news-list">
    <div class="wrapper">
      <h3><i>See All the Latest Headlines and Articles</i></h3>
      <hr>
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

          <div class="wrapper__cont1">
            {{-- Image --}}
            <div class="img-cont">
              @if (has_post_thumbnail())
                <img src="{{ get_the_post_thumbnail_url(null, 'medium') }}" alt="{{ get_the_title() }}">
              @else
                <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image">
              @endif
            </div>

            {{-- Text Content --}}
            <div class="text-cont">
              <h4>{!! get_the_title() !!}</h4>
              <h6>Posted by: {!! get_the_author() !!} on {!! get_the_date() !!}</h6>
              <p>{!! wp_trim_words(get_the_excerpt(), 50) !!}</p>
              <h5><a href="{{ get_permalink() }}">Read more...</a></h5>
            </div>
          </div>
        @endwhile

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
</div>
@endsection
