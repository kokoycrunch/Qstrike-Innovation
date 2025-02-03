@extends('layouts.app')

@section('content')
<div class="latest-news-page">

  <div class="latest-news-page__wrapper">
      {{-- Breadcrumb Navigation --}}
      <div class="breadcrumb">
        <a href="{{ home_url('/latest-news') }}">Latest News</a>
        <span class="separator">&gt;&gt;</span>
        <span class="current">{!! get_the_title() !!}</span>
      </div>
      {{-- Title --}}
      <div class="title">
        <div class=title__cont>
          <div>
            <h2>{!! get_the_title() !!}</h2>
            <h6>
              @if (have_posts())
              @while (have_posts()) @php the_post() @endphp
                  <h6>Posted by: {!! get_the_author() !!} on {!! get_the_date() !!}</h6>
              @endwhile
            @endif
          </div>
        </div>
      </div>
      <div class="content">
          @if (has_post_thumbnail())
          <div class="featured-image">
              {!! get_the_post_thumbnail(null, 'large') !!}
          </div>
          <hr>
          @endif
          <div class="news-content">
            {!! apply_filters('the_content', get_the_content()) !!}
          </div>

          {{-- Post Navigation --}}
          <div class="post-navigation">
            <div class="post-navigation__links">
              @if (get_previous_post_link())
                <div class="post-navigation__previous">
                  <span class="nav-subtitle">Previous Post</span>
                  {!! get_previous_post_link('%link') !!}
                </div>
              @endif

              @if (get_next_post_link())
                <div class="post-navigation__next">
                  <span class="nav-subtitle">Next Post</span>
                  {!! get_next_post_link('%link') !!}
                </div>
              @endif
            </div>
          </div>
      </div>

  </div>

</div>
@endsection
