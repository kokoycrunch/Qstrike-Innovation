{{--
  Template Name: Contact us
--}}

@extends('layouts.app')

@section('content')
<div class="contact-us">
  {{-- Hero --}}
  <div class="hero">
    <div class="wrapper">
      <h1 data-aos="fade-right" data-aos-delay="200">{{$contactHeading1}} <span>{{$contactHeading2}}</span></h1>
      <p data-aos="fade-up" data-aos-delay="200">{{$contactSubheading}}
      </p>
    </div>
  </div>
  {{-- Message form --}}
  <div class="message-form">
    <div class="wrapper">
      <h2 data-aos="fade-down" data-aos-delay="200">{{$formHeading}}</h2>
          {{-- Contact Form --}}
          <div class="wrapper__form">
            @php echo do_shortcode('[contact-form-7 id="6742ea2" title="Contact us"]'); @endphp
          </div>
          {{-- End Contact Form --}}
    </div>
  </div>
  {{-- Visit us --}}
  <div class="visit-us">
    <div class="wrapper">
      <div class="wrapper__cont1">
        <h2 data-aos="fade-down" data-aos-delay="200">{{$visitUsHeading}}</h2>
        <p data-aos="fade-right" data-aos-delay="200">{{$visitUsSubheading}}
        </p>
      </div>
      <div class="wrapper__cont2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.026145102117!2d120.61638161158875!3d15.101887685385408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f30007f1f4e5%3A0x26be1540ba989ebf!2sQSTRIKE%20INNOVATIONS%20PHILS.%2C%20OPC!5e0!3m2!1sen!2sph!4v1731756583772!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-left" data-aos-delay="200"></iframe>
      </div>
    </div>
  </div>

</div>

@endsection
