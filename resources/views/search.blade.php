@extends('layouts.app')

@section('content')
  @include('partials.page-header')



    <div id="search-results-container">
        <div id="search-results">
          @if (! have_posts())
            <x-alert type="warning" class="text-center">
              {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

           <div class="text-center mt-10"> {!! get_search_form(false) !!}</div>
          @endif
          @while(have_posts()) @php(the_post())
          @include('partials.content-search')
          @endwhile
        </div>
    </div>

  {!! get_the_posts_navigation() !!}
@endsection
