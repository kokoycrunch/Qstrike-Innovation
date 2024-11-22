<div class="accordion">
  @if ($coreValues)
  @foreach ($coreValues as $core)
  <div class="accordion-item">
    <div>
        <div class="accordion-header h-full bg-darkgray">
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
