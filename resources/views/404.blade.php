@extends('layouts.app')

@section('content')
  {{-- @include('partials.page-header') --}}
      @php
      $error_bg_id = get_field('error_404', 'options'); // Get the image ID
      $error_bg_url = $error_bg_id ? wp_get_attachment_url($error_bg_id) : null; // Get the image URL
      @endphp
      <div class="error-404-wrapper" style="background-image: url('{{ $error_bg_url }}'); background-size: contain; background-repeat: no-repeat; background-position: center; background-color: rgba(0, 0, 0, 1.0);" loading="lazy">
          <div class="cont">
              <h1>PAGE NOT FOUND</h1>
              @if (! have_posts())
                <x-alert type="warning">
                  {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
                </x-alert>

                {!! get_search_form(false) !!}
          </div>
      </div>

  @endif
@endsection
