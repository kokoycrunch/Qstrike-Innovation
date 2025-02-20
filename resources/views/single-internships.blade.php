@extends('layouts.app')
@section('content')
<div class="positions">
  <div class="positions__wrapper">
      {{-- Job title --}}
      <div class="job-title">
        <div class=job-title__cont>
              <div>
                    <h3>{{ $positionTitle ?: get_the_title() }}</h3>
                    <p class="tag">{{ $location }}</p>
              </div>
              <button class="open-modal-btn">SUBMIT APPLICATION</button>
        </div>
      </div>
      {{-- Job description --}}
      <div class="job-description">
          <div class="post-content">
            {!! the_content() !!}
          </div>
      </div>
      <button class="open-modal-btn">SUBMIT APPLICATION</button>
    </div>
</div>
{{-- Modal --}}
<div class="modal hidden" id="application-modal">
  <div class="modal-overlay"></div>
  <div class="modal-content">
    <span class="close-modal-btn">&times;</span>
    <h3 class="uppercase">Submit Your Application</h3>
    </br>
    <p>for <i><b>{{ $positionTitle ?: get_the_title() }}</b></i> position</p>
    <hr>
    @php
      echo do_shortcode('[contact-form-7 id="aff0bb2" title="Interns"]');
    @endphp
  </div>
</div>
@endsection
